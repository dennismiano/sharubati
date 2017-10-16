<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class posts extends Model
{
    //mass assign
	protected $fillable=['title','body','file_id','name'];
	public function comment(){
		return $this->hasMany('App\comments','post_id');
	}
}
