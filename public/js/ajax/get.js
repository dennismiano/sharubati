//use class aj_get and add attribute href to add ajax to a tag
//use class result_get to get result empties class before loading data



$(document).ready( function(){
    $.ajaxSetup({
			headers:{
					'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
					}
	});
 $(".aj_get").each( function(){
	 $(this).on("click",function(e){
		 e.stopImmediatePropagation();
		 e.preventDefault();
		 //alert("Test!!");
		 var url=$(this).attr("href");
		 $.ajax( {
			 type:"GET",
			 url:url,
			 success:function(data){
				 $(".result_get").empty().html(data);
				 //alert(data);
			 }
		 } );
	 });
 });


} );