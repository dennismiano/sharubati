<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\project as pro;

class project extends Controller
{
    //save proj
    public function proj_save(Request $request){
    	if( $request->isMethod("POST")   ){
    		$det=["about"=>$request->about,"budget"=>$request->budget,"deadline"=>$request->deadline,"name"=>$request->name,"email"=>$request->email,"phone"=>$request->phone];
    		$projo=pro::create($det);
    		if( $projo  ){
    			return "Thanks for believing in us...we'll email a confirmation";
    		}
    		else{
                  return "Failed to add project details";
    			}

    		//return "hit";

    	}
    	else{
    		return abort(404);
    	}

    }
    //return all proj details
    public function view_proj(){
    	$re=pro::orderBy("created_at","desc")->SimplePaginate(5);
    	return view("admin.proj",["proj"=>$re]);
    }
}
