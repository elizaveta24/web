<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cur extends Model
{
    use HasFactory;
	public function teachers(){
		return $this->belongsTo('App\Models\Teacher','teachers_id','id');
	}

	public function tasks(){
		return $this->hasMany('App\Models\Task','curs_id','id');
	}
	public function users(){
		return $this->belongsToMany('App\Models\User');
	}
}
