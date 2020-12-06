<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
	public function curs(){
		return $this->hasMany('App\Models\Cur','teachers_id','id');
	}
}


