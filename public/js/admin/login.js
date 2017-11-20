$(document).ready( function(){
	$.ajaxSetup({
			headers:{
					'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
					}
	});
	//admin home
	$.ajax({
			async:true,
			type:"GET",
			url:"/project/show",
			error:function(data){
				$("body").empty().html(data);
			},
			success:function(data){
				$(".admin-content").empty().html(data);
				
			}
			
			
		});
	
	//login admin
	$(".login_admin").on("submit",function(e){
		e.preventDefault();
		e.stopImmediatePropagation();
		
		var d= new FormData(this);
		$.ajax({
			async:true,
			type:"POST",
			url:"/admin/login",
			contentType:false,
			processData:false,
			data:d,
			error:function(data){
				$("body").empty().html(data);
			},
			success:function(data){
				$(".login_form").remove();
				$("body").html(data);
				
			}
			
			
		});
		
		
	}   );
	
	/*$(".container-fluid").on("click",".blog", function(e){
		e.preventDefault();
		e.stopImmediatePropagation();
		//alert("hit");
		$.ajax({
			async:true,
			type:"GET",
			url:"/blog/admin",
			error:function(data){
				$(".admin-content").empty().html(data);
			},
			success:function(data){
				$(".admin-content").empty().html(data);
				//alert(data);
				
			}
			
			
		});
		
	}  ); */
	//capture all admin navigation links
	$(".nav_li").each( function(index){
		$(this).on("click",function(e){
			e.preventDefault();
		    e.stopImmediatePropagation();
			var ur=$(this).attr("href");
			$.ajax({
			async:true,
			type:"GET",
			url:ur,
			error:function(data){
				$(".admin-content").empty().html(data);
			},
			success:function(data){
				$(".admin-content").empty().html(data);
				//alert(data);
				
			}
			
			
		});
			
		
		
	}  ); });
	//save admin post
	$(".container-fluid").on("submit", ".post_form",function(e){
		e.preventDefault();
		e.stopImmediatePropagation();
		//alert("hit");
		var da=new FormData(this);
		$.ajax({
			async:true,
			type:"POST",
			url:"/blog/post",
			data:da,
			contentType:false,
			processData:false,
			error:function(data){
				$("body").empty().html(data);
			},
			success:function(data){
				//$(".blog_form")[0].clear();
				//alert(data);
				$(".admin-content").empty().html(data);
				
			}
			
			
		});
		
	}  );
	//admin update return form
	$(".container-fluid").on("click", ".blg_up",function(e){
		e.preventDefault();
		e.stopImmediatePropagation();
		var da=$(this).attr("id");
		$.ajax({
			async:true,
			type:"GET",
			url:"/blog/update/form/"+da,
			error:function(data){
				$(".admin-content").empty().html(data);
			},
			success:function(data){
				//$(".blog_form")[0].clear();
				//alert(data);
				$(".admin-content").empty().html(data);
				
			}
			
			
		});
		
	}  );
	//admin update post save
	$(".container-fluid").on("submit", ".update_form",function(e){
		e.preventDefault();
		e.stopImmediatePropagation();
		var da=new FormData(this);
		$.ajax({
			async:true,
			type:"POST",
			url:"/blog/update/save",
			data:da,
			contentType:false,
			processData:false,
			error:function(data){
				$(".admin-content").empty().html(data);
			},
			success:function(data){
				//$(".blog_form")[0].clear();
				//alert(data);
				$(".admin-content").empty().html(data);
				
			}
			
			
		});
		
	}  );
	//admin delete post
	$(".container-fluid").on("click", ".blg_del",function(e){
		e.preventDefault();
		e.stopImmediatePropagation();
		var da=$(this).attr("id");
		$.ajax({
			async:true,
			type:"GET",
			url:"/blog/del/post/"+da,
			
			error:function(data){
				$(".admin-content").empty().html(data);
			},
			success:function(data){
				//$(".blog_form")[0].clear();
				alert("Successfully deleted post");
				$(".admin-content").empty().html(data);
				
			}
			
			
		});
		
	}  );
	//view comment and cmt form
	$(".container-fluid").on("click", ".ad_cmt",function(e){
		e.preventDefault();
		e.stopImmediatePropagation();
		var da=$(this).attr("id");
		$.ajax({
			async:true,
			type:"GET",
			url:"/blog/cmt/"+da,
			
			error:function(data){
				$(".admin-content").empty().html(data);
			},
			success:function(data){
				$(".admin-content").empty().html(data);
				
			}
			
			
		});
		
	}  );
	//admin save comment
	$(".container-fluid").on("submit", ".cmt_form",function(e){
		e.preventDefault();
		e.stopImmediatePropagation();
		var da=new FormData(this);
		$.ajax({
			async:true,
			type:"POST",
			url:"/blog/cmt",
			data:da,
			contentType:false,
			processData:false,
			error:function(data){
				$(".admin-content").empty().html(data);
			},
			success:function(data){
				//$(".blog_form")[0].clear();
				//alert(data);
				$(".admin-content").empty().html(data);
				
			}
			
			
		});
		
	}  );
	//admin del comment
	$(".container-fluid").on("click", ".cmt_del",function(e){
		e.preventDefault();
		e.stopImmediatePropagation();
		var da=$(this).attr("id");
		$.ajax({
			async:true,
			type:"GET",
			url:"/cmt/del/"+da,
			error:function(data){
				$(".admin-content").empty().html(data);
			},
			success:function(data){
				//$(".blog_form")[0].clear();
				alert("Successfully deleted comment");
				$(".admin-content").empty().html(data);
				
			}
			
			
		});
		
	}  );
	//view

}  );