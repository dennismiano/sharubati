<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\enquiries;

class messages extends Controller
{
    //save user msg
	public function save_msg(Request $request ){
		if( $request->isMethod("POST")  ){
			$det=["name"=>$request->name,"email"=>$request->email,"phone_no"=>$request->phone_no,"message"=>$request->body];
			$ms=enquiries::create($det);
			if($ms){
				return "Message sent successfully";
			}
			else{
				return "Failed to send message";
			}
			//return "hit";
		}
		else{
			return abort(404);
		}
		
		//return view("message.msgform");
	}
	//return msg base view
	public function msg_view(){
		$msg=enquiries::orderBy("created_at","desc")->SimplePaginate(5);
		return view("message.msg",["msg"=>$msg]);
		//return "hit";
	}
}
