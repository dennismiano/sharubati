<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class file_type extends Model
{
	
    //
	//protected $fillable=[""];
	public function files(){
		return $this->hasMany("App\files","file_type_id"); 
		
	}
}
