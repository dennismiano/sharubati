<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class enquiries extends Model
{
    //
	protected $fillable=['name','email','phone_no','message'];
	protected $table="enquiries"; 
}
