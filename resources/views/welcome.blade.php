<!doctype html>
<html lang="{{ app()->getLocale() }}">

    <head>
        <meta charset="utf-8">
        <meta name="google-site-verification" content="n9swYqcSP0lnLuQubAo4b3psuDZ2J19iaaGJndIcBpM" />
        

        <title>Sharubati Technologies</title>
        <link href="{{ URL::asset('/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{ URL::asset('/css/syde.css')}}" rel="stylesheet">
        <!-- <link href="https://fonts.googleapis.com/css?family=Raleway|Sanchez" rel="stylesheet"> -->
		<script src="/js/jquery-3.2.1.min.js"></script>
		<script src="/js/jquery-ui.min.js"></script>
	   
	   <script  src="/js/user/user.js"></script>
	   
        
			<!-- Global Site Tag (gtag.js) - Google Analytics -->
			<!--  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-107410195-1"></script>
			<script>
			  window.dataLayer = window.dataLayer || [];
			  function gtag(){dataLayer.push(arguments)};
			  gtag('js', new Date());

			  gtag('config', 'UA-107410195-1');
			</script> -->



    </head>
  
    <body>



<!--ABOVE FOLD-->
        <div class="row sharubati-header">

                <div class="container">
                    <img class="sharubati-logo" src = "{{ URL::asset('/images/syde-images/sharubati-logo.png')}}" alt = "logo">

                    <div class="pull-right menus">
                        <b><ul class="menu-links">
						{{--   add class nav_user loads into magic class thru ajax    --}}
                            <li class="links-list white"><a  class="nav_user" href="/">home</a></li>
                            <li class="links-list white"><a  class="nav_user" href="#">solutions</a></li>
                            <li class="links-list white"><a  class="nav_user" href="/blog">blog</a></li>
                            <li class="links-list white"><a  class="nav_user" href="#">team</a></li>
                        </ul></b>
                    </div>
                </div>
            </div>
			{{--          This is ajax div where the magick happens    --}}
			<div class="magic">
													<div class="container-fluid above-fold">

									<div class="row">
									 

											<div class="hero-text-container">
												<h1 class="hero-title align-center blue">We are building a whole new <b>Digital World.</b></h1>
												<h1 class="hero-title align-center blue"><b>For Businesses</b></h1>
											</div>

											<div class="text-center">
												<button class="hero-button">Lets talk about your project</button>
											</div>
										</div>


									</div>


					<!--SERVICES-->
						   
							<div class="row main-services result_get">
								<div class="container">
									<div class="col-md-4">
										<h3 class="services-header">We are the perfect blend of aesthetics and function. And  we say it in the solutions we give</h3>
										<img class="border-bar img-responsive" src = "{{ URL::asset('/images/syde-images/border-bar.png')}}" alt = "computer with design elements">
										<p class="sharubati-text services-text">   We design custom solutions with your business in mind. We have what it takes to grow your brand both on print and display. We also craft custom  tools to help your business run efficiently.
											Business requirements are different and we have the creativity and analytical thinking to implement your business strategy in a way that your business enjoys value for money.
									</div>

									<div class="col-md-8 services-box">
										<div class="row">
											<div class="col-md-4">
												<div class="services-container coloured-border">
													<img class="services-icon img-responsive" src = "{{ URL::asset('/images/syde-images/design-icon.png')}}" alt = "design-icon">
													<h4 class="services-title"><b>DESIGN</b></h4>
													<p class="sharubati-text">If you are looking for that high quality work that makes your business stand out and gives your brand an appealing identity, we are the team you need;
														<ul>
															<li class="sharubati-text"><a class="nav_user" href="/branding">Branding</a></li>
															<li class="sharubati-text"><a class="nav_user" href="/design-and-print">Print</a></li>
														</ul>
													</p>
												</div>
											</div>

											<div class="col-md-4">
												<div class="services-container">
													<img class="services-icon img-responsive" src = "{{ URL::asset('/images/syde-images/devops-icon.png')}}" alt = "devops-icon">
													<h4 class="services-title"><b>DEVELOPMENT</b></h4>
													<p class="sharubati-text">Whether its a website, a web application or a custom business software, we have a professional team of designers and developers  that collaborates to deliver solutions that are functional and scalable.
														<ul>
															<li class="sharubati-text"><a class="nav_user" href="/web">Web systems</a></li>
															<li class="sharubati-text"><a class="nav_user" href="/development">Custom Enterprise Software</a></li>
														</ul>

													</p>
												</div>
											</div>

											<div class="col-md-4">
												<div class="services-container">
													<img class="services-icon img-responsive" src = "{{ URL::asset('/images/syde-images/strategy-icon.png')}}" alt = "strategy-icon">
													<h4 class="services-title"><b>STRATEGY</b></h4>
													<p class="sharubati-text">Data driven strategy to increase leads and conversions. We use a combinations of tools and media, a deep insight into buyer behavior to inform your digital options
														<ul>
															<li class="sharubati-text"><a class="nav_user" href="/digital-marketing">Content Marketing</a></li>
															<li class="sharubati-text"><a class="nav_user"  href="/digital-marketing">Social Media Marketing</a></li>
															<li class="sharubati-text"><a  class="nav_user" href="/digital-marketing">Search Marketing (SEO, SEM)</a></li>
														</ul>
													</p>
											</div>
											</div>
										</div>
									</div>
								</div>
							</div>

					<!--MORE ABOUT US-->
							<div class="container-fluid more">
								<div class="container">
									<div class="more-container">
										<div class="row">
											<div class="col-md-8 text-container">

												<img class="img-responsive" src = "{{ URL::asset('/images/syde-images/designer-desk.png')}}" alt = "designer-desk">

												<h2 class="more-title blue sharubati-title">You can <b>trust us</b> to get the <b>job done.</b></br> Our solutions are not a cost, they are an <b>investment.</b></h2>
												<p class="gray-text more-text sharubati-text">We are consciuos of cost and deadlines. We understand how much value you expect for your money and thats why  are backed by a creative and professional team that will see to it that you get just that.
												So trust us with your job, we have designers, developers and marketers to ensure your job is given an all round perspective.</p>
											</div>

											<div class="col-md-4 pages-form-container">
							
													<div class="row form-header">
														<h2 class="form-title sharubati-title white">Lets Talk Business</h2>
													</div>

													<div class="row form-body">
														 <form>
														  <div class="form-group">
														   <!-- <label for="project-category">What is your project about?</label>-->
															<input type="text" class="form-control no-border sharubati-text" id="project-category" placeholder="What is your project about?">
														  </div>
														  
														  <div class="form-group">
														   <!-- <label for="project-category">What is your project about?</label>-->
															<input type="text" class="form-control no-border sharubati-text" id="budget" placeholder="Do you have a bugdet?">
														  </div>
														  
														  <div class="form-group">
														   <!-- <label for="project-category">What is your project about?</label>-->
															<input type="text" class="form-control no-border sharubati-text" id="budget" placeholder="What about a deadline?">
														  </div>

														  <button type="submit" class="sharubati-button sharubati-title pull-right"><b>A few more details</b><i class="fa fa-arrow-right"></i></button>
														</form>
													</div>
											</div>

									</div>
								</div>
							</div>
						</div>

							<div class="container-fluid testimony">
								<h2 class="testimonial-header sharubati-title" >Our Happy Customers</h2>
								
								<div class="col-md-8 col-md-offset-2">
									<div class="row">
										<div class="col-md-3">
										<img class="testimony-image img-resonsive" src = "{{ URL::asset('/images/syde-images/testimonial-image.png')}}" alt = "devops-icon">
										</div>

										<div class="col-md-9">
											<p class="testimony-text sharubati-text">
												When i was setting up, i needed a consultant who would help me appropiately position the brand and give it that unique identity.  SYDE brought the business brand to life and implemented an effective way to gain awareness fast and i was amazed at how easily we hit our set threshold.<br><b>~ Oliver, Autokey.</b>
											</p>
										</div>

									</div>
								</div>

							</div>

							<div class="container">
								<div class="col-md-8 col-md-offset-2">
										<h2 class="clients-header sharubati-title">Some of the brands we have worked with.</h2>
									<div class="row ">
										<div class="col-md-3 col-sm-3 col-xs-6">
											<img class="img-resonsive client-logo" src = "{{ URL::asset('/images/syde-images/omega-logo.png')}}" alt = "devops-icon">
										</div>

										<div class="col-md-3 col-sm-3 col-xs-6">
											<img class="img-resonsive" src = "{{ URL::asset('/images/syde-images/pace-logo.png')}}" alt = "devops-icon">
										</div>

										<div class="col-md-3 col-sm-3 col-xs-6">
											<img class="img-resonsive" src = "{{ URL::asset('/images/syde-images/startimes-logo.png')}}" alt = "devops-icon">
										</div>

										<div class="col-md-3 col-sm-3 col-xs-6">
											<img class="img-resonsive" src = "{{ URL::asset('/images/syde-images/umati-logo.png')}}" alt = "devops-icon">
										</div>
									</div>

										<div class="col-md-3 col-sm-3 col-xs-4">
											<img class="img-resonsive" src = "{{ URL::asset('/images/syde-images/yakayeke-logo.png')}}" alt = "devops-icon">
										</div>

										<div class="col-md-3 col-sm-3 col-xs-4">
											<img class="img-resonsive" src = "{{ URL::asset('/images/syde-images/techguy-logo.png')}}" alt = "devops-icon">
										</div>

										<div class="col-md-3 col-sm-3 col-xs-4">
											<img class="img-resonsive" src = "{{ URL::asset('/images/syde-images/adventurepics-logo.png')}}" alt = "devops-icon">
										</div>

										<div class="col-md-3 col-sm-3 col-xs-4">
											<img class="img-resonsive" src = "{{ URL::asset('/images/syde-images/nairobichapel-logo.png')}}" alt = "devops-icon">
										</div>
								</div>
							</div>
		    </div>
            {{--  END USER AJAX DIV  --}}
<div class="row subscribe">

    <div class="container">
        <div class="col-md-10 col-md-offset-1">
            <h3 class="white align-center subcriber-statement sharubati-title">Get marketing insights, tips on how to grow your company brand, our informed news letters and much much more right into your inbox.</h3>

                <div class="subscriber-form">
                    <form class="sub_form">
					{{csrf_field()}}
                        <input type="email" class="form-control no-border subcriber-email" id="budget" name="email" placeholder="your email" required>
                        <button type="submit" class="form-button pull-right"><b>Subscribe</b><i class="fa fa-arrow-right"></i></button>
                    </form>
                </div>

        </div>
    </div>
</div>

<div class="row footer">
    <div class="container">
        <div class="col-md-4">
            <h1 class="sharubati-title">Who We Are</h1>
            <p class="sharubati-text footer-text">Sharubati Technologies is a tech firm that was set up to offer integrated digital solutions to our customers. From design, print, brand origination, UX/UI, web, software development,  digital strategy and marketing, data handling and analytics. 
            Our  view is most of these services are related and by having them executed in one firm allows for a very informed concept and consistency in execution.
            </p>

            <h4 class="sharubati-text"><b>Sharubati Technologies Ltd.</b></h4>
        </div>

        <div class="col-md-4">
            <h1 class="sharubati-title">We Are Social</h1>
            <p class="sharubati-text footer-text">Every so often we share our work experience with our followers on social media pages and encourage them to do the same.</p>
        </div>

        <div class="col-md-4 ms_leave">
                            <div class="row form-header">
                                    <h2 class="form-title sharubati-title white">Contact us</h2>
                                </div>

                                <div class="row form-body ">
                                    <form class="msg_form">
									{{csrf_field()}}
                                      <div class="form-group">
                                       
                                        <input type="text" class="form-control no-border" id="" name="name" placeholder="Name"  required>
                                      </div>

                                      <div class="form-group">
                                       
                                        <input type="email" class="form-control no-border" id="" name="email" placeholder=" Email" required>
                                      </div>
									  <div class="form-group update" hidden >
	   
										<input type="text" class="form-control no-border" id="budget" name="phone_no" placeholder="phone no." required>
									  </div>
									  
									  <div class="form-group  update " hidden>
									   
										<textarea class="form-control no-border" cols="3"  name="body"  placeholder="Type Message" required>Message</textarea>
									  </div>
                                      
                                      

                                      <button type="button" class="form-button pull-right msg_bt fm_btn"><b class="change">A few more details</b><i class="fa fa-arrow-right"></i></button>
                                    </form>
                                </div>  
        </div>
    </div>
    

        
	</div>	

    </body>
 </html> 


        


