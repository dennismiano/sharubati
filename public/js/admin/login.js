$(document).ready( function(){
	$.ajaxSetup({
			headers:{
					'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
					}
	});
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
	$(".blog").on("click", function(e){
		e.preventDefault();
		e.stopImmediatePropagation();
		//alert("hit");
		$.ajax({
			async:true,
			type:"GET",
			url:"/blog",
			error:function(data){
				$("body").empty().html(data);
			},
			success:function(data){
				$(".admin-content").empty();
				$(".admin-content").html(data);
				//alert(data);
				
			}
			
			
		});
		
	}  );
	$(".container-fluid").on("submit", "",function(e){
		e.preventDefault();
		e.stopImmediatePropagation();
		alert("hit");
		var da=new FormData(this);
		/**$.ajax({
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
				$(".blog_form")[0].clear();
				alert('success');
				
			}
			
			
		});*/
		
	}  );
	
}  );