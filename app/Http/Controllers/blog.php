<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\posts;
use App\files;
use illuminate\Support\Facades\Auth;


class blog extends Controller
{
	//return post form
	public function post_form(){
		
	}
	//return comment form
	public function comnt_form(){}
    //save post details
	public function create_post( Request $request ){
		if($request->isMethod("POST")  ){
		    $details=["title"=>$request->title,"body"=>$request->body,"name"=>$request->name];
		//check if file is set 
			if($request->file("files") && $request->file('files')->isValid() && $request->file('files')->getClientSize() <= 8000000 && $request->getMaxFileSize() ){
				//save file
				$files_det=["file_name"=>$request->file('files')->getClientOriginalName(),"file_type_id"=>1,"admin_id"=>Auth::id()];
				$filess=files::create($file_det);
				if($filess){
					//save post
					$details['file_id']=$filess->id;
					$create_posts=posts::create($details);
					if($create_posts){
						return redirect()->action("blog@view_post");
						
					}
					else{
						$error="Oops couldn't create posts...";
						return $error;
						
					}
					
				}
				else{
					$error='Oops something happened try uploading again';
					return $error;
					
				}
				
			}
			else{
				$error="Please check whether file uploaded correctly<br>Max file upload size is ".$request->getMaxFileSize();
				return $error;
				
				
			}
			
		}
		else{
			return abort(404,"Oops something happened");
			
		}
	}
	
	//returns all posts and comments from db,post form
	public function view_post(){
	   $pos=posts::orderBy('created_at','desc')->SimplePaginate(5);
		return view('blog.blog',['posts'=>$pos]);
	}
	
	//save comment details to db
	public function create_comnt(){}
	
	//del one or multiple posts
	public function del_post(){}
	
	//del one or multiple comments of same post
	public function del_comnt(){}
}
