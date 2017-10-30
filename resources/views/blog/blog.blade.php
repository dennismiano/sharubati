<div class="row admin-content">

	<div class="container">

		<h2 class="sharubati-title">Blogs Panel</h2>
		  
		<div class="col-md-6">

		  	<div class="blog-card">

		  		<h3 class="sharubati-title blue">Create new blog</h3>
				  <form class="post_form">
                                 {{csrf_field()}}
				  	<div class="form-group">
				        <label for="blogTitle" class="sharubati-text">Blog Title</label>
				        <input type="text" class="form-control sharubati-text" id="blogTitle" placeholder="project title" required/>
				    </div>

				    <div class="form-group">
				        <label for="blogText" class="sharubati-text">Blog Body</label>
				        <textarea rows="10" class="form-control sharubati-text" id="blogText" placeholder="project text" required/></textarea>
				    </div>

						  {{csrf_field()}}
						  <div class="form-group"><input type="file" class="form-control"   name="files"  required/> </div>
						  <button type="submit" class="sharubati-button"><b>Publish Blog</b><i class="fa fa-arrow-right"></i></button>   
				  </form>
			</div>
			  @if( isset( $post )  )

				@else
					<p class="sharubati-text">Sorry there are no posts yet...</p>

			  @endif
		</div>

		<div class="col-md-6">
			<div class="blog-card">
				<h3 class="sharubati-title blue">Recent Blogs</h3>

				<ol>
				<li class="sharubati-text">This is the first story <a href="">update | delete | views (0)</a></li>
				<li class="sharubati-text">This is the first story <a href="">update | delete | views (0)</a></li>
				<li class="sharubati-text">This is the first story <a href="">update | delete | views (0)</a></li>
				</ol>

			</div>
		</div>
	</div>
</div>

