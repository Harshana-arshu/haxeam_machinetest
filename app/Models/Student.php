<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table='student_detail';
    use HasFactory;
    public function class(){ 
        
        return $this->hasMany('App\Models\Classes','id','class_id')->select(['class as class_name','id']);
    

    }
    public function teacher(){
        return $this->hasMany('App\Models\Login','id','teacher_id')->select(['teacher_name as name','id']);
    }
    public function division(){ 
        
        return $this->hasMany('App\Models\Division','id','division_id')->select(['divisions as division_name','id']);
    

    }

}
