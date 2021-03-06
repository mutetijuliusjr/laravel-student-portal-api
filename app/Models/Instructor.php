<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    use HasFactory;
	
	protected $fillable = ['user_id'];
	
	public function user(){
		return $this->belongsTo(User::Class);
	}
	
	public function units(){
		return $this->belongsToMany(Unit::Class)->using(Instructor_Unit::Class);
	}
}
