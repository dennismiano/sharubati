<div>
@if (isset($sel) && isset($f) && null !== $sel  &&  null !== $f)

		title:{{$sel->title}}<br>
		body:{{$sel->body}}<br>
		name:{{$sel->name}}<br>
		image:<img  class="img-responsive blog-image"  src="data:image/jpeg;base64,<?php echo base64_encode( $f->files); ?>" /><br>
		

@else
	<p>No post selected</p>
@endif
</div>