<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\admin as admins;

class admin extends Controller
{
    //return form for admin login
	public function  login_form(){
		return view("admin.welcome.welcome");
	}	
	
	//authenticate admin
	public function  login_admin( Request $request ){
		if( $request->isMethod("POST")  ){
			$em=$request->email;
			$pass=$request->pass;
			//check whether email exists
			$check=User::where("email",$em)->first();
			//$ch_ad=admins::where("user_id",$check->id)->first();
			/*if($check && $ch_ad){
				//return redirect("/admin/home");
			}*/
			$f=$check;
			return  $f;
			
			
			
		}
		else{
			return error(404);
		}
	    
	}
}
