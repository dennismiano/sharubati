@extends('layouts.client-master')

@section('content')

<div class="row pages-header">
		<div class="container">
			<div class="col-md-5">
				<h1 class="pages-header-title sharubati-title">Enterprise</br> Software<b></br> Development</b></h1>
			</div>

			<div class="col-md-4 header-article-container pull-right">
				<img class="speech-mark" src = "{{ URL::asset('/images/syde-images/quotes.png')}}" alt = "speech marks">
				<h3 class="">The growth of internet has brought a whole new digital world with billion of users, we are helping businesses set up  a virtual shop as well</h3>
			</div>
		</div>
</div>


<div class="row pages-content">
	<div class="container pages-container">
		<div class="col-md-8">
			<h3 class="page-content-title padding-text-right sharubati-title"><i>We are building secure, scalable and functional enterprise level software for businesses.</i></h3>

			<p class="page-text padding-text-right sharubati-title">Whether you are a start-up or an established business, we 	
				We are helping build your IT strategy, by applying modern design principles, in conjunction with the latest in cloud, mobile, and desktop technologies, to create tailored solutions that connect co-workers and customers, accelerating business processes and saving resources.
				</br></br>At sharubati we believe that code should not only be beautiful but also have the capability to grow with your business.Our products range from :
				<ul>
					<li>Appliction Development</li>
					<li>Custom API Development and Integration</li>
					<li>SQL and Big Data Database Services</li>
					<li>Social Media Application Development</li>
					<li>Interactive Web and Streaming Media Development</li>
					<li>PDF Automation Programming</li>
					<li>iPhone, iPad, and Android Apps</li>
					<li>e-Commerce</li>
					<li>Hosting and Managed Application Services</li>
				</ul>

			</p>

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

<div class="row industries">
	<div class="container">
		<h1 class="sharubati-title align-center">Industries we serve</h1>

		<div class="col-md-10 col-md-offset-1">
			<div class="col-md-3">
				<img class="industry-icon" src = "{{ URL::asset('/images/syde-images/education.png')}}">
				<h4 class="sharubati-title align-center">Educational Institutions </h4>
			</div>

			<div class="col-md-3">
				<img class="industry-icon" src = "{{ URL::asset('/images/syde-images/financial.png')}}">
				<h4 class="sharubati-title align-center">Banks & Financial Institutions </h4>
			</div>

			<div class="col-md-3">
				<img class="industry-icon" src = "{{ URL::asset('/images/syde-images/government.png')}}">
				<h4 class="sharubati-title align-center">Government </h4>
			</div>

			<div class="col-md-3">
				<img class="industry-icon" src = "{{ URL::asset('/images/syde-images/manufacturing.png')}}">
				<h4 class="sharubati-title align-center">Manufacturing & Production </h4>
			</div>


			<div class="col-md-3">
				<img class="industry-icon" src = "{{ URL::asset('/images/syde-images/service-industry.png')}}">
				<h4 class="sharubati-title align-center">Service Industry </h4>
			</div>


			<div class="col-md-3">
				<img class="industry-icon" src = "{{ URL::asset('/images/syde-images/religious.png')}}">
				<h4 class="sharubati-title align-center">Religious Institutions </h4>
			</div>

			<div class="col-md-3">
				<img class="industry-icon" src = "{{ URL::asset('/images/syde-images/retail-business.png')}}">
				<h4 class="sharubati-title align-center">Retail Businesses </h4>
			</div>


			<div class="col-md-3">
				<img class="industry-icon" src = "{{ URL::asset('/images/syde-images/transport.png')}}">
				<h4 class="sharubati-title align-center">Transport & Logistics</h4>
			</div>
		</div>
	</div>
</div>
@include('layouts.client-footer')
@endsection