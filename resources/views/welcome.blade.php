<!doctype html>
<html lang="{{ app()->getLocale() }}">

    <head>
        <meta charset="utf-8">
        <meta name="google-site-verification" content="n9swYqcSP0lnLuQubAo4b3psuDZ2J19iaaGJndIcBpM" />
        

        <title>Sharubati</title>
        <link href="{{ URL::asset('/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{ URL::asset('/css/syde.css')}}" rel="stylesheet">
		<script src="/js/jquery-3.2.1.min.js"></script>
	   <script src="/js/jquery.js"></script>
	   <script  src="/js/ajax/get.js"></script>
	   
	   <script  src="/js/link.js"></script>
        
			<!-- Global Site Tag (gtag.js) - Google Analytics -->
			<script async src="https://www.googletagmanager.com/gtag/js?id=UA-107410195-1"></script>
			<script>
			  window.dataLayer = window.dataLayer || [];
			  function gtag(){dataLayer.push(arguments)};
			  gtag('js', new Date());

			  gtag('config', 'UA-107410195-1');
			</script>



    </head>
  
    <body>



<!--ABOVE FOLD-->
        <div class="container-fluid above-fold">


                <div class="row">
                 

                        <div class="hero-text-container">
                            <h1 class="hero-title align-center red">We are building a whole new <b>Digital World.</b></h1>
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
                                <h4 class="services-title">DESIGN</h4>
                                <p class="sharubati-text">If you are looking for that high quality work that makes your business stand out and gives your brand an appealing identity, we are the team you need;
                                    <ul>
                                        <li></li>
                                        <li>Branding</li>
                                        <li>Print</li>
                                    </ul>
                                </p>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="services-container">
                                <img class="services-icon img-responsive" src = "{{ URL::asset('/images/syde-images/devops-icon.png')}}" alt = "devops-icon">
                                <h4 class="services-title">DEVELOPMENT</h4>
                                <p class="sharubati-text">Whether its a website, a web application or a custom business software, we have a professional team of designers and developers  that collaborates to deliver solutions that are functional and scalable.
                                    <ul>
                                        <li>Web systems</li>
                                        <li>Custom Software</li>
                                        <li>Dev-ops</li>
                                    </ul>

                                </p>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="services-container">
                                <img class="services-icon img-responsive" src = "{{ URL::asset('/images/syde-images/strategy-icon.png')}}" alt = "strategy-icon">
                                <h4 class="services-title">STRATEGY</h4>
                                <p class="sharubati-text">Data driven strategy to increase leads and conversions. We use a combinations of tools and media, a deep insight into buyer behavior to inform your digital options
                                    <ul>
                                        <li>SEO</li>
                                        <li>Social Media Marketing</li>
                                        <li>Predictive Analysis</li>
                                        <li>Advertising</li>
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
                <div class="col-md-10 col-md-offset-1 more-container">
                    <div class="row">
                        <div class="col-md-6 text-container">
                            <h2 class="more-title white sharubati-title">You can trust us to get the job done. </br> Our solutions are not a cost, they are an investment.</h2>
                            <p class="white more-text sharubati-text">We are consciuos of cost and deadlines. We understand how much value you expect for your money and thats why  are backed by a creative and professional team that will see to it that you get just that.
                            So trust us with your job, we have designers, developers and marketers to ensure your job is given an all round perspective.</p>
                        </div>

                        <div class="col-md-6 form-container">

                                <div class="row form-header">
                                    <h2 class="form-title sharubati-title white">Lets Talk Business</h2>
                                </div>

                                <div class="row form-body">
                                     <form>
                                      <div class="form-group">
                                       <!-- <label for="project-category">What is your project about?</label>-->
                                        <input type="text" class="form-control no-border" id="project-category" placeholder="What is your project about?">
                                      </div>
                                      
                                      <div class="form-group">
                                       <!-- <label for="project-category">What is your project about?</label>-->
                                        <input type="text" class="form-control no-border" id="budget" placeholder="Do you have a predetermined budget">
                                      </div>
                                      
                                      <div class="form-group">
                                       <!-- <label for="project-category">What is your project about?</label>-->
                                        <input type="text" class="form-control no-border" id="project-category" placeholder="What about a deadline?">
                                      </div>

                                      <button type="submit" class="form-button pull-right"><b>A few more details</b><i class="fa fa-arrow-right"></i></button>
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
                        <p class="testimony-text">
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

        <div class="row footer-section">
            <div class="col-md-8 col-md-offset-2">
                <div class="footerform-container">
                    
                    <div class="col-md-6 form-container">
                                <div class="row form-header">
                                    <h2 class="form-title sharubati-title white">Still got a question?</h2>
                                </div>

                                <div class="row form-body">
                                     <form>
                                      <div class="form-group">
                                       <!-- <label for="project-category">What is your project about?</label>-->
                                        <input type="text" class="form-control no-border" id="project-category" placeholder="Your email">
                                      </div>
                                      
                                      <div class="form-group">
                                       <!-- <label for="project-category">What is your project about?</label>-->
                                        <input type="text" class="form-control no-border" id="budget" placeholder="Your phone number">
                                      </div>
                                      
                                      <div class="form-group">
                                       <!-- <label for="project-category">What is your project about?</label>-->
                                         <textarea class="no-border form-control" rows="3" id="message" name="message" placeholder="Your message"></textarea>
                                      </div>

                                      <button type="submit" class="form-button pull-right"><b>A few more details</b><i class="fa fa-arrow-right"></i></button>
                                    </form>
                                </div>
                    </div>


                    <div class="col-md-6">
                        <h1 class="sharubati-title">We are social</h1>
                        <img class="border-bar img-responsive" src = "{{ URL::asset('/images/syde-images/border-bar.png')}}" alt = "computer with design elements">
                        <p class="sharubati-text">Every now and then we share valuable tips and insights sorrounding our work. We think it might be helpful to your business as well. So like our social media pages and we’ll keep you in the know.</p>
                    </div>


                </div>
            </div>
        </div>

        
		

    </body>
 </html> 


        
<!-- @include('layouts.client-footer') -->

