<div>

@if( isset($posts) && $posts->isNotEmpty() && isset($f) && $f->isNotEmpty() )
	@foreach($posts as $value)
       <div class="user_p">
	   posted:{{$value->created_at->diffForHumans()}}<br>
       title:{{$value->title}}<br>
	   body:{{$value->body}}<br>
	   name:{{$value->name}}<br>
	   img:<img  class="img-responsive"  src="data:image/jpeg;base64,<?php echo base64_encode( $f->find($value->file_id)->files   ); ?>" /><br>
	   <button class="u_b" id="{{$value->id}}">Comment()</button><br>
	   
	   </div>
    @endforeach

	
@else
      <p>No posts yet...</p>	
@endif
</div>