<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comments extends Model
{
    //mass assign
	protected $fillable=['body','post_id','file_id'];
	
	public function post(){
		return $this->belongsTo('App\posts','post_id');
	}
}
