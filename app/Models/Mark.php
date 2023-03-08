<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mark extends Model
{
    protected $table="mark";
    use HasFactory;
    public function student(){ 
        
        return $this->hasMany('App\Models\Student','id','student_id')->select(['student_name as student_name','id']);
    

    }
    public function subject(){ 
        
        return $this->hasMany('App\Models\Subject','id','subject_id')->select(['name as subject_name','id']);
    

    }
}
