<div class="admin-comment">
@if( isset($id)   )
	@if(  isset($post) && isset($f) )
		<div>
	     posted:{{$post->created_at->diffForHumans()}}<br>
		 title:{{$post->title}}<br>
		 body:{{$post->body}}<br>
		 img:<img  class="img-responsive"  src="data:image/jpeg;base64,<?php echo base64_encode( $f->files   ); ?>" />
		 
	    </div>
		@if($cmt->isNotEmpty() && isset($cmt) )
			@foreach($cmt as $value  )
				<div>
				 posted:{{$value->created_at->diffForHumans()}}<br>
				 body:{{$value->body}}<br>
				 name:{{$value->name}}<br>
				 <button type="button" class="cmt_del"  id="{{$value->id}}">Delete</button>
				</div>
			@endforeach
		@else
			<p>Be first to comment...</p>
		@endif
	@else
		<p>An error occured....Couldn't load post</p>
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