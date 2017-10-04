@extends('layouts.client-master')

@section('content')

<div class="row pages-header">
	<div class="container">
		<div class="col-md-4">
			<h1 class="pages-header-title">Design</br><b>& Print </b></h1>
		</div>

		<div class="col-md-5 header-article-container pull-right">
			<img class="speech-mark" src = "{{ URL::asset('/images/syde-images/quotes.png')}}" alt = "speech marks">
			<h3><b>Unfortunately in business, customers judge a book by the cover. If they dont like how it looks, then they dont like it at all.</b></h3>
		</div>
	</div>
</div>

<div class="row pages-content">
	<div class="container pages-container">
		<div class="col-md-7">
			<h3 class="page-content-title">We take a lot of pride in seeing a project through to completion, from just a mere idea to execution. That way, we can guarantee the quality of the final output.</h3>

			<p class="page-text">Thats why we have a streamlined design process that ensures your project brief is executed within timelines and a pool of creatives to bring that idea to life.

			And whats more, you do not have to worry about the printer getting your design wrong, because we have a network of industry contacts, that help clients save time and money by allowing print professionals to handle the type of printing they are most competitive. It also allows us to become your single point of contact for the entire project.</p>

			<div class="col-md-6 portfolio-image">
				<img class="" src = "{{ URL::asset('/images/syde-images/design-img1.jpg')}}" alt = "speech marks">
			</div>

			<div class="col-md-6 portfolio-image">
				<img class="" src = "{{ URL::asset('/images/syde-images/design-img1.jpg')}}" alt = "speech marks">
			</div>

			<div class="col-md-6 portfolio-image">
				<img class="" src = "{{ URL::asset('/images/syde-images/design-img1.jpg')}}" alt = "speech marks">
			</div>

			<div class="col-md-6 portfolio-image">
				<img class="" src = "{{ URL::asset('/images/syde-images/design-img1.jpg')}}" alt = "speech marks">
			</div>

		</div>

		<div class="col-md-5 pages-form-container">
		
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
</div>
@endsection