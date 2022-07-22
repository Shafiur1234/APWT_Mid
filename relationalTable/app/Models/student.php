<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\department;
use App\Models\studentCourses;

class student extends Model
{
    use HasFactory;
    protected $table = 'student';
    protected $primaryKey = 's_id';
    public $incrementing = true;
    public $timeStamps = false;
    function department(){
        
        return $this->belongsTo(department::class, 'department_id', 'department_id');
    }
    function stCourse(){
        return $this->hasMany(studentCourses::class, 's_id', 's_id');
    }
}
