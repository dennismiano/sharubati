<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\admin as admins;
use Illuminate\Support\Facades\Auth;

class adminz extends Controller
{
	public function homess(){
		return view('admin.admin-master');
	}
    //return form for admin login
	public function  login_form(){
		return view("admin.login_form");
	}	
	
	//authenticate admin
	public function  login_admin( Request $request ){
		if( $request->isMethod("POST")  ){
			if(Auth::guard('admin')->attempt(['email'=>$request->email,'password'=>$request->password])  ){
				return redirect("/admin/home");
				//return redirect()->action("adminz@homess");
				//return "<p>test</p>";
			}
			else{
				$error="Wrong Email or Password....Please Recheck";
				return $error;
			}
			
			
			
		}
		else{
			return abort(404,'Oops something happened.....');
		}
	    
	}
	public function  ser(){
		$deatils=["email"=>"12@em.cm","password"=>bcrypt(1234567),"name"=>"sii"  ];
		;
		if(  admins::create($deatils)  ){
			echo"success";
		}
		else{
			
			echo"fatal";
			
		}
	    
	}
	
}
