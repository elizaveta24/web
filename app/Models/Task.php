<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
	public function curs(){
		return $this->belongsTo('App\Models\Cur','curs_id','id');
	}
}
