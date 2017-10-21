<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\admin as admins;
use Illuminate\Support\Facades\Auth;

class admin extends Controller
{
    //return form for admin login
	public function  login_form(){
		return view("admin.welcome.welcome");
	}	
	
	//authenticate admin
	public function  login_admin( Request $request ){
		if( $request->isMethod("POST")  ){
			if(Auth::guard('admin')->attempt(['email'=>$request->email,'password'=>$request->password])){
				$df="Hit Here";
				return $df;
				
			}
			else{
				return error(404);
			}
			
			
			
		}
		else{
			return error(404);
		}
	    
	}
}
