<div class="row admin-content">

	<div class="container">

		<h2 class="sharubati-title">Blogs Panel</h2>
		  
		<div class="col-md-6">

		  	<div class="blog-card form_card">

		  		<h3 class="sharubati-title blue">Create new blog</h3>
				  <form class="post_form">
                                 {{csrf_field()}}
						<div class="form-group">
							<label for="blogTitle" class="sharubati-text">Blog Title</label>
							<input type="text" class="form-control sharubati-text" id="blogTitle" name="blogTitle"  placeholder="project title" />
						</div>

						<div class="form-group">
							<label for="blogText" class="sharubati-text">Blog Body</label>
							<textarea rows="10" class="form-control sharubati-text" id="blogText" name="blogText" placeholder="project text" /></textarea>
						</div>
						<div class="form-group">
							<label for="blogName" class="sharubati-text">Blog By</label>
							<textarea rows="3" class="form-control sharubati-text" id="blogName" name="blogName" placeholder="Enter Name" /></textarea>
						</div>

						  
						  <div class="form-group"><input type="file" class="form-control"   name="files"  /> </div>
						  <button type="submit" class="sharubati-button"><b>Publish Blog</b><i class="fa fa-arrow-right"></i></button>   
				  </form>
			</div>
			  
		</div>
         <div class="col-md-6">
			<div class="blog-card">
				<h3 class="sharubati-title blue">Recent Blogs</h3>

				
				@if( isset( $posts ) && $posts->isNotEmpty() )
					         <ol>
							@foreach($posts as $p)
								
									<li class="sharubati-text">{{$p->title}} <a class="blg_up" id="{{$p->id}}">update </a>| <a class="blg_del" id="{{$p->id}}">delete</a>| <a>views (0)</a> | <a class="ad_cmt" href="#"  id="{{$p->id}}">comments (0)</a></li>
									
							@endforeach
							</ol>
							@if( $posts->links() !== null  )
								   {{$posts->links()}}
							@endif
					

			   @else
					<p class="sharubati-text">Sorry there are no posts yet...</p>

			  @endif
	           

				</div>
			</div> 
		
	</div>
</div>

