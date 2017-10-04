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
			type:"POST",
			url:"/admin/login",
			contentType:false,
			processData:false,
			data:d,
			success:function(data){
				$("body").empty().html(data);
				
			}
			
		});
		
		
	}   );
	
}  );