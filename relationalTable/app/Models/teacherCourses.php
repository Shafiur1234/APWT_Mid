<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\course;
use App\Models\teacher;
class teacherCourses extends Model
{
    use HasFactory;
    protected $table = 'course_teachers';
    public $timeStamps = false;

    function teachers(){
        return $this->hasMany(teacher::class, 't_id', 't_id');
    }
    function courses(){
        return $this->hasMany(course::class, 'c_id', 'c_id');
    }
}
