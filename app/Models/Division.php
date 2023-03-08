<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    protected $table='table_division';
    use HasFactory;
    public function class(){ 
        
        return $this->hasMany('App\Models\Classes','id','class_id')->select(['class as class_name','id']);
    

    }
}

