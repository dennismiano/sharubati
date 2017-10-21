<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    //mass assign
	protected $fillable = [
        'name', 'email', 'password',
    ];
	/*public function user(){
		return $this->belongsTo('App\User');
		
	}*/
}
