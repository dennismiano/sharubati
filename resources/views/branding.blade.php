@extends('layouts.client-master')

@section('content')

<div class="row pages-header">
	<div class="container">
		<div class="col-md-4">
			<h1 class="pages-header-title sharubati-title"><b>Branding</b></h1>
		</div>

		<div class="col-md-4 header-article-container pull-right">
			<img class="speech-mark" src = "{{ URL::asset('/images/syde-images/quotes.png')}}" alt = "speech marks">
			<h3 class="sharubati-title">Brand is the story behind your product or business. Its the value you propose to your customers. And we help you tell a better story.</h3>
		</div>
	</div>
</div>



<!--PAGE BODY STARTS HERE-->

<div class="row pages-content">
	<div class="container pages-container">
		<div class="col-md-8">
			<h3 class="page-content-title padding-text-right sharubati-title"><i>We believe a brand goes beyond crafting a unique identity, but we also recognize that identity is the first way to differentiate from the pack, it sets a direction, a guide that helps avoid ambiguity. </i></h3>

			<p class="page-text padding-text-right sharubati-title">Can you imagine how marketing used to be when brands never existed? There was no way for customers to identify a product they had desired. Gaining and retaining customers must have neen difficult. But since the evolution of brands, you can tell the story behind your product or business and why you are different. And we help you communicate that in a visually appealing way. </p>

		</div>

		<div class="col-md-4 pages-form-container">
		
			 					<div class="row form-header">
                                    <h2 class="form-title sharubati-title white">Lets talk about your project</h2>
                                </div>

                                <div class="row form-body">
                                     <form>
                                      <div class="form-group">
                                       <!-- <label for="project-category">What is your project about?</label>-->
                                        <input type="text" class="form-control no-border" id="project-category" placeholder="What is your project about?">
                                      </div>
                                      
                                      <div class="form-group">
                                       <!-- <label for="project-category">What is your project about?</label>-->
                                        <input type="text" class="form-control no-border" id="budget" placeholder="Do you have a bugdet?">
                                      </div>
                                      
                                      <div class="form-group">
                                       <!-- <label for="project-category">What is your project about?</label>-->
                                        <input type="text" class="form-control no-border" id="budget" placeholder="What about a deadline?">
                                      </div>

                                      <button type="submit" class="form-button pull-right"><b>A few more details</b><i class="fa fa-arrow-right"></i></button>
                                    </form>
                                </div>
            </div>
	</div>

</div>


<div class="row projects-portfolio">
	
	<div class="container">
		
		<h1 class="projects-header">Our Recent Projects</h1>

		<div class="col-md-8 projects-container">

			<div class="col-md-6">
				<img class="project-thumbnail" src = "{{ URL::asset('/images/syde-images/project-thumbnail.jpg')}}" alt = "project image">
			</div>

			<div class="col-md-6 project-holder">
				<h3 class="project-header">Bank Nyumbani</h3>
				<h5 class="gray-text byline"><b>Tags:</b> <i>Brand development, direction, graphic design</i></h5>
				<p class="project-text">Nit facimint qui aut opta quisita temporum dem volorati doles ma experferibus et haruntiam earum fugita poreperit quatia volenda conet am, culpa nisqui sanietur aut renis dolor modigniet atur, nonetur sundi doluptium </p>

				<button type="submit" class="form-button pull-right"><b>view full project</b><i class="fa fa-arrow-right"></i></button>
			</div>
		</div>

		<div class="col-md-8 projects-container">
			
			<div class="col-md-6">
				<img class="project-thumbnail" src = "{{ URL::asset('/images/syde-images/project-thumbnail.jpg')}}" alt = "project image">
			</div>

			<div class="col-md-6 project-holder">
				<h3 class="project-header">Bank Nyumbani</h3>
				<h5 class="gray-text byline"><b>Tags:</b> <i>Brand development, direction, graphic design</i></h5>
				<p class="project-text">Nit facimint qui aut opta quisita temporum dem volorati doles ma experferibus et haruntiam earum fugita poreperit quatia volenda conet am, culpa nisqui sanietur aut renis dolor modigniet atur, nonetur sundi doluptium </p>

				<button type="submit" class="form-button pull-right"><b>view full project</b><i class="fa fa-arrow-right"></i></button>
			</div>
		</div>

		<div class="col-md-8 projects-container">

			<div class="col-md-6">
				<img class="project-thumbnail" src = "{{ URL::asset('/images/syde-images/project-thumbnail.jpg')}}" alt = "project image">
			</div>

			<div class="col-md-6 project-holder">
				<h3 class="project-header">Bank Nyumbani</h3>
				<h5 class="gray-text byline"><b>Tags:</b> <i>Brand development, direction, graphic design</i></h5>
				<p class="project-text">Nit facimint qui aut opta quisita temporum dem volorati doles ma experferibus et haruntiam earum fugita poreperit quatia volenda conet am, culpa nisqui sanietur aut renis dolor modigniet atur, nonetur sundi doluptium </p>

				<button type="submit" class="form-button pull-right"><b>view full project</b><i class="fa fa-arrow-right"></i></button>
			</div>
		</div>

	</div>
</div>
@include('layouts.client-footer')
@endsection
