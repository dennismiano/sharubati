<div>
  <form class="post_form">
		  {{csrf_field()}}
		  <input type="text" placeholder="Enter title" required/>
		  <input   type="text" placeholder="Enter body"   required/>
		  <input type="text"  placeholder="Enter Name "required/>
		  <input type="file"   name="files"  required/>
		  <input type="submit"  value="POST"/>
  
   		
   
  </form>
  @if( isset( $post )  )

	@else
		<p>Sorry there are no posts yet...</p>

  @endif






</div>