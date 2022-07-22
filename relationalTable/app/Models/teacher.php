<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\department;
use App\Models\teacherCourses;

class teacher extends Model
{
    use HasFactory;
    protected $table = 'teacher';
    protected $primaryKey = 't_id';
    public $incrementing = true;
    public $timeStamps = false;
    function department(){
        
        return $this->belongsTo(department::class, 'department_id', 'department_id');
    }
    function techCourse(){
        return $this->hasMany(teacherCourses::class, 't_id', 't_id');
    }
}
