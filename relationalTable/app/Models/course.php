<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\department;
use App\Models\studentCourses;
use App\Models\teacherCourses;

class course extends Model
{
    use HasFactory;
    protected $table = 'course';
    public $timeStamps = false;

    function department(){
       return $this->belongsTo(department::class, 'department_id', 'department_id');
    }
    function stCourse(){
        return $this->hasMany(studentCourses::class, 'c_id', 'c_id');
    }
    function techCourse(){
        return $this->hasMany(teacherCourses::class, 'c_id', 'c_id');
    }
}
