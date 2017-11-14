$(document).ready( function(){
		$.ajaxSetup({
				headers:{
						'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
						}
		});
		//capture all user nav links
			//capture all user nav links
			
	$(".nav_user").each( function(index){
		$(this).on("click",function(e){
			e.preventDefault();
		    e.stopImmediatePropagation();
			var ur=$(this).attr("href");
			$.ajax({
			async:true,
			type:"GET",
			url:ur,
			error:function(data){
				$(".magic").empty().html(data);
			},
			success:function(data){
				$(".magic").empty().html(data);
				//alert(data);
				
			}
			
			
		});
			
		
		
	}  ); });
	//user cmt form
	$("body").on("click", ".u_b",function(e){
		e.preventDefault();
		e.stopImmediatePropagation();
		var da=$(this).attr("id");
		var l=$(this);
		$.ajax({
			async:true,
			type:"GET",
			url:"/blog/comment/form/"+da,
			error:function(data){
				$(".magic").empty().html(data);
			},
			success:function(data){
				l.parents(".user_p").after(data);
				//alert("i");
				l.hide();
				
			}
			
			
		});
		
	}  );
	//save user cmt
	$("body").on("submit", ".cmt_form",function(e){
		e.preventDefault();
		e.stopImmediatePropagation();
		var da=new FormData(this);
		var lc=$(this);
		$.ajax({
			async:true,
			type:"POST",
			url:"/blog/comment",
			data:da,
			contentType:false,
			processData:false,
			error:function(data){
				$(".cmt_u").empty().html(data);
			},
			success:function(data){
				
				lc.parents(".cmt_div").empty().html(data);
				
			}
			
			
		});
		
	}  );
	//mouse out rm cmt 
	$("body").on("mouseleave",".cmt_div",function(){
		   $(this).remove();
		   $(".u_b").show(5000);
	}   );
	//msg form add more fields
	$("body").on("click",".msg_bt",function(e){
		    e.preventDefault();
			e.stopImmediatePropagation();
		   $(".update").show(2000);
		   $(".change").text("send");
		   $(this).attr({type:"submit"});
		   $(this).toggleClass("msg_bt");
		   
	}   );
	//hover out reduce msg form
	$("body").on("mouseleave",".ms_leave",function(e){
		    e.preventDefault();
			e.stopImmediatePropagation();
		   $(".update").hide(1000);
		   $(".change").text("A few more details");
		   $(".fm_btn").attr({type:"button"});
		   $(".fm_btn").toggleClass("msg_bt");
		   
	}   );
	//save messAGES
	$("body").on("submit",".msg_form",function(e){
			e.preventDefault();
			e.stopImmediatePropagation();
			var da= new FormData(this);
			$.ajax({
				async:true,
				type:"POST",
				url:"/msg/save",
				data:da,
				contentType:false,
				processData:false,
				error:function(data){
					$(".magic").empty().html(data);
				},
				success:function(data){
					alert(data);
					$(".msg_form")[0].reset();
					
				}
				
			}); 
			//alert("hit");
		   
		   
	}   );
	//save sub
	$("body").on("submit",".sub_form",function(e){
			e.preventDefault();
			e.stopImmediatePropagation();
			var lg=$(this);
			var da= new FormData(this);
			$.ajax({
				async:true,
				type:"POST",
				url:"/sub/save",
				data:da,
				contentType:false,
				processData:false,
				error:function(data){
					$(".magic").empty().html(data);
				},
				success:function(data){
					alert(data);
					lg[0].reset();
					
					//$(".msg_form")[0].reset();
					
				}
				
			}); 
			//alert("hit");
		   
		   
	}   );

});