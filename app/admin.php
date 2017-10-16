<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    //mass assign
	protected $fillable=["user_id"];
	public function user(){
		return $this->belongsTo('App\User');
		
	}
}
