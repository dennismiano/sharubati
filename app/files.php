<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class files extends Model
{
	protected $table="files";
    //mass assign
	protected $fillable=['file_type_id','file_name','admin_id'];
	
	public function file_type(){
		return $this->belongTo('App\file_type''file_type_id');
	}
	public function admin(){
		return $this->belongsTo('App\admin','admin_id');
	}
}
