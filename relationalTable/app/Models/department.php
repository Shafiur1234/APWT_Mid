<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\student;
use App\Models\course;

class department extends Model
{
    use HasFactory;
    protected $table = 'department';
    protected $primaryKey = 'department_id';
    public $incrementing = true;
    public $timeStamps = false;
    function students(){
        
        return $this->hasMany(student::class, 'department_id', 'department_id');
    }
    function teachers(){
        
        return $this->hasMany(teacher::class, 'department_id', 'department_id');
    }
    function courses(){
        return $this->hasMany(course::class,'department_id', 'department_id');
    }
}
