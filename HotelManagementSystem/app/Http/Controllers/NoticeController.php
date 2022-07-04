<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notice;

class NoticeController extends Controller
{
    //
    public function AddNotice(){
        return view('reception.addnotice');
    }

    public function AddNoticeSubmit(Request $req){
 
        $this->validate($req,
            [
                'notice' => 'required',
                
            ],
            [
                'notice.required' => 'Please provide notice..',
                
                
            ]
        );
        $notice = new Notice();
        $notice->notice = $req->notice;
        $notice->save();

       // return $customer;
        //return $customer;
        return redirect()->route('reception.addnotice.list');
    }

    public function AddNoticeList(){
        $notice = Notice::all();
        return view('reception.addnoticelist')->with('notice', $notice);
    }


}
