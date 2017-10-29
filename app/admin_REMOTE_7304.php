<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class admin extends Authenticatable
{
    //mass assign
	protected $fillable = [
        'name', 'email', 'password',
    ];
	/*public function user(){
		return $this->belongsTo('App\User');
		
	}*/
}
