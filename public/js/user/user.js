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
});