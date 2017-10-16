<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class files extends Model
{
    //mass assign
	protected $fillable=['file_type_id','file_name','user_id'];
	
	public function file_type(){
		return $this->belongTo('App\file_type''file_type_id');
	}
	public function user(){
		return $this->belongsTo('App\User','user_id');
	}
}
