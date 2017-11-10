
<div class="cmt_div">
@if( isset($id)  )
	@if( $cmt->isNotEmpty() && isset($cmt) )
		<div class="cmt_u">
		@foreach($cmt as $value  )
	         <div>
	         posted:{{$value->created_at->diffForHumans()}}<br>
	         body:{{$value->body}}<br>
			 name:{{$value->name}}<br>
			 </div>
	    @endforeach
		</div>
	@else
		<p>Be first to comment...</p>
    @endif
	
<form class="cmt_form">
{{csrf_field()}}
  <input type="hidden" name="id" value="{{$id}}" />
 <input type="text" name="body" placeholder="type comment"/>
 <input type="text" name="name" placeholder="type name"/>
 <input type="email" name="email" placeholder="type email"/>
 <button type="submit" >comment</button>
 

</form>




@else
	<p>Oops an error occured...</p>
	
@endif
</div>