<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\subscribers as sub;

class subscribers extends Controller
{
    //save subscribers
	public function save_sub(Request $request){
		if( $request->isMethod("POST")){
			$det=["email"=>$request->email];
			$su=sub::create($det);
			if($su){
				return "A confirmation email has been sent";
			}
			else{
				return abort(404);
			}
			//return "hit";
		}
		else{
			return abort(404);
		}
		
	}
}
