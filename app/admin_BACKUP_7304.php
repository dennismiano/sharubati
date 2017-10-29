<?php

namespace App;

<<<<<<< Updated upstream
use Illuminate\Database\Eloquent\Model;
=======
//use Illuminate\Database\Eloquent\Model;
>>>>>>> Stashed changes
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
