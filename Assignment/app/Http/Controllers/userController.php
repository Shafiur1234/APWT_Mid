<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\userInfo;

class userController extends Controller
{

    function validateRegistration(Request $req){
        $req->validate([
            'name'=>"required|regex:/^[a-zA-Z\s\.\-]+$/",
            'email'=>"required|email|unique:users|regex:/^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,3}$/",
            'psw'=>"required|min:8|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/",
            'psw_repeat'=>"required|same:psw"
        ],
        [
           'name.required'=>'Provide a valid name',
           'email.required'=>'Provide a valid email',
           'psw.required'=>"Password must contain upper case, lower case, number and special characters, min length 8",
           'psw_repeat.required'=>'Must enter the password again',
           'psw_repeat.same'=>'Password must match with repeat password'
        ]);
        $user = new userInfo();
        $user->name = $req->name;
        $user->email = $req->email;
        $user->pass = $req->psw_repeat;
        $res = $user->save();
        
        if($res){
            return redirect()->route('welcome');

        }else{
            return back()->with('fail', 'something wrong');
        }
    }

    function checkLogin(Request $req){
        $req->validate([
            'email'=>"required|email|regex:/^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,3}$/",
            'pass'=>"required|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/"
        ],
        [
            'pass.required'=>'Please enter the password',
            'pass.regex'=>'Password not matched'
        ]);
        $user = userInfo::where('email', '=', $req->email)->first();
        if($user){
            if($req->pass == $user->pass){
                if ($user->type === 'admin') {
                    return redirect()->route('admin.dashboard');
                }else{
                    return redirect()->route('user.dashboard');
                }

            }else{
                return back()->with('fail','Password incorrect');
            }

        }else{
            return back()->with('fail','This email is not registered');
        }

    }

    function userDetail(Request $req){
        $user = userInfo::where('id', '=', decrypt($req->id))->first();

        return view('userDetails')->with('user_info', $user);
    }

    function user_Dashboard(){
        $user = userInfo::where('type', '=', 'user')->get();


        return view('userDashboard')->with('user_data', $user);
    }
    function admin_Dashboard(){
        $user = userInfo::where('type', '=', 'user')->get();
        $admin = userInfo::where('type', '=', 'admin')->get();


        return view('adminDashboard')->with('user_data', $user)->with('admin_data', $admin);
    }
}
