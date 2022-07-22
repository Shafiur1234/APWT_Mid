<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\course;
use App\Models\student;

class studentCourses extends Model
{
    use HasFactory;
    protected $table = 'course_students';
    public $timeStamps = false;

    function students(){
        return $this->hasMany(student::class, 's_id', 's_id');
    }
    function courses(){
        return $this->hasMany(course::class, 'c_id', 'c_id');
    }
}
