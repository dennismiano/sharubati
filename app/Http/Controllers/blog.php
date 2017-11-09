<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\posts;
use App\files ;
use illuminate\Support\Facades\Auth;
use App\comments;


class blog extends Controller
{
    //save post details
	public function create_post( Request $request ){
		//return "hit";
		if( $request->isMethod("POST")    ){
			//return "hit";
			//check if file present,name,
			$file_types=$request->file("files")->getMimeType() == "image/jpeg" || $request->file("files")->getMimeType() == "image/png" || $request->file("files")->getMimeType() == "image/gif";
			if( $request->file("files")->isValid() && $file_types){
				$der=["file_name"=>$request->file("files")->getClientOriginalName(),"files"=>file_get_contents( $request->file('files') )];
				$upload=files::create($der);
				if($upload){}
				else{
					return "An error occured.....retry uploading";
				}

			}
			else{
				return "failed to upload allowed extensions are jpg,jpeg and png";
			}
			$details=["title"=>$request->blogTitle,"body"=>$request->blogText,"file_id"=>$upload->id,"name"=>$request->blogName];
			$create_posts=posts::create($details);
			if($create_posts){
				return redirect()->action("blog@view_post");
				
			}
			else{
				return "Unable to create post...";
			}
		}
		else{
			return abort("404");
		}
	}
	
	//returns all posts and comments from db,post form
	public function view_post(){
	   $pos=posts::orderBy('created_at','desc')->SimplePaginate(5);
		return view('blog.blog',['posts'=>$pos]);
	}
	//del one or multiple posts
	public function del_post($id){
		$del=posts::destroy($id);
		if($del){
			return redirect()->action('blog@view_post');
			
		}
		else{
			return "Failed to delete post";
		}
	}
	//update post
	public function update_post($id){
		$up=posts::find($id);
		
		if($up){
			$f=files::find($up->file_id);
			return view('blog.update',['update'=>$up,'f'=>$f]);
			
		}
		else{
			return "Post doesn't exist";
		}
	}
	//save updated blog post
	public function update_save( Request $request){
		$u=posts::find($request->id);
		if($u){
			//save file first
			$file_types=$request->file("files")->getMimeType() == "image/jpeg" || $request->file("files")->getMimeType() == "image/png" || $request->file("files")->getMimeType() == "image/gif";
			if( $request->file("files")->isValid() && $file_types){
				$der=["file_name"=>$request->file("files")->getClientOriginalName(),"files"=>file_get_contents( $request->file('files') )];
				$upload=files::create($der);
				if($upload){}
				else{
					return "An error occured while uploading......retry";
				}

			}
			//return error
			else{
				return "failed to upload file...allowed extensions are jpg,jpeg and png";
			}
			$det=["title"=>$request->blogTitle,"body"=>$request->blogText,"file_id"=>$upload->id,"name"=>$request->blogName];
			$update=$u->update($det);
			if($update){
				return redirect()->action("blog@view_post");
			}
			else{
				return "Failed to update selected post";
			}
			
		}
		else{
			return "Sorry an error occured........post not found";
		}
	}
	//view selected post
	public function sel_post($id){
		$sel=posts::find($id);
		if($sel){
			$f=files::find($sel->file_id);
			return view("blog.view_post",["sel"=>$sel,"f"=>$f]);
		}
		else{
			return "Post doesn't exist";
		}
	}
	//return user blog view
	public function user_view(){
		$blo=posts::orderBy('created_at','desc')->SimplePaginate(5);
		$f=files::all();
		return view('blog.user_view',["posts"=>$blo,"f"=>$f]);
		
	}
	//return user comment form
	public function cmt_form($id){
		$come=comments::where("post_id",$id)->get();
		return view('blog.cmt_form',["id"=>$id,"cmt"=>$come]);
		
	}
	//save user comments
	public function cmt_save(Request $request     ){
		if( $request->isMethod("POST") ){
			$det=["body"=>$request->body,"post_id"=>$request->id,"name"=>$request->name,"email"=>$request->email];
			$cmt=comments::create($det);
			if($cmt){
				$id=$request->id;
				return redirect()->action('blog@cmt_form',["id"=>$id]);
				
			}
			else{
				return "Error......Failed to post comment";
			}
			
			
		}
		else{
			return abort(404);
		}
		
	}
	//admin delete comments
	public function del_comnt($id){
		$pos=comments::find($id)->post_id;;
		$del=comments::destroy($id);
		if($del && $pos){
			return redirect()->action("blog@ad_cmt_form",["id"=>$pos]);
			
		}
		else{
			return "Failed to delete comment";
		}
	}
	//admin return comment form and comment base view
	public function ad_cmt_form($id){
		$come=comments::where("post_id",$id)->get();
		$pos=posts::find($id);
		$f=files::find($pos->file_id);
		return view('blog.ad_cmt_form',["id"=>$id,"cmt"=>$come,"post"=>$pos,"f"=>$f]);
		
	}
	//save admin comment
	public function ad_cmt_save(Request $request     ){
		if( $request->isMethod("POST") ){
			$det=["body"=>$request->body,"post_id"=>$request->id,"name"=>$request->name,"email"=>$request->email];
			$cmt=comments::create($det);
			if($cmt){
				return redirect()->action('blog@ad_cmt_form',["id"=>$request->id]);
				
			}
			else{
				return "Error......Failed to post comment";
			}
			
			
		}
		else{
			return abort(404);
		}
		
	}
	
}
