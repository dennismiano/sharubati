<div>
@if( isset($update) && $update !== null && isset($f) && null !== $f )
  <h3 class="sharubati-title blue">Update blog</h3>
  <form class="update_form">
				 {{csrf_field()}}
				 <input type="hidden"  name="id"   value="{{$update->id}}"/>
		<div class="form-group">
			<label for="blogTitle" class="sharubati-text">Blog Title</label>
			<!--<input type="text" class="form-control sharubati-text" id="blogTitle" name="blogTitle"    value="{{$update->title}}"/> -->
			<textarea rows="1" class="form-control sharubati-text" id="blogTitle" name="blogTitle"  >{{$update->title}}</textarea>
		</div>

		<div class="form-group">
			<label for="blogText" class="sharubati-text">Blog Body</label>
			<textarea rows="10" class="form-control sharubati-text" id="blogText" name="blogText"  >{{$update->body}}</textarea>
		</div>
		<div class="form-group">
			<label for="blogName" class="sharubati-text">Blog By</label>
			<textarea rows="3" class="form-control sharubati-text" id="blogName" name="blogName"  >{{$update->name}}</textarea>
		</div>

		  <div> Current Image <br><img  class="img-responsive"  src="data:image/jpeg;base64,<?php echo base64_encode( $f->files ); ?>" />  <p>Replace with</p>   </div>
		  <div class="form-group"><input type="file" class="form-control"   name="files"  /> </div>
		  <button type="submit" class="sharubati-button"><b>Publish Blog</b><i class="fa fa-arrow-right"></i></button>   
  </form>
  @else
	  <p>Error no post selected to update</p>
	
@endif
</div>