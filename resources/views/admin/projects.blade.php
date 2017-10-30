@extends('admin.admin-master')

@section('content')
<div class="row admin-content">

	<div class="container">

		<h2 class="sharubati-title">Projects Panel</h2>
		  
		<div class="col-md-6">

		  	<div class="blog-card">

		  		<h3 class="sharubati-title blue">Upload new project</h3>
				  <form class="post_form">

				  	<div class="form-group">
				        <label for="projectTitle" class="sharubati-text">Project Title</label>
				        <input type="text" class="form-control" id="projectTitle" placeholder="blog title" required/>
				    </div>

				    <div class="form-group">
				        <label for="projectText" class="sharubati-text">Project Body</label>
				        <textarea rows="10" class="form-control" id="projectText" placeholder="blog text" required/></textarea>
				    </div>

						  {{csrf_field()}}
						  <div class="form-group"><input type="file" class="form-control"   name="files"  required/> </div>
						  <button type="submit" class="sharubati-button"><b>Publish Project</b><i class="fa fa-arrow-right"></i></button>   
				  </form>
			</div>
			  @if( isset( $post )  )

				@else
					<p class="sharubati-text">Sorry there are no posts yet...</p>

			  @endif
		</div>

		<div class="col-md-6">
			<div class="blog-card">
				<h3 class="sharubati-title blue">Recent Projects</h3>

				<ol>
				<li class="sharubati-text">This is the first story <a href="">update | delete | views (0)</a></li>
				<li class="sharubati-text">This is the first story <a href="">update | delete | views (0)</a></li>
				<li class="sharubati-text">This is the first story <a href="">update | delete | views (0)</a></li>
				</ol>

			</div>
		</div>
	</div>
</div>

@endsection