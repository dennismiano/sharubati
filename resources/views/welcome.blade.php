<!doctype html>
<html lang="{{ app()->getLocale() }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="google-site-verification" content="n9swYqcSP0lnLuQubAo4b3psuDZ2J19iaaGJndIcBpM" />

        <title>Sharubati Technologies</title>
        <link href="{{ URL::asset('/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{ URL::asset('/css/syde.css')}}" rel="stylesheet">
        <link href="{{ URL::asset('/css/infinite-slider.css')}}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway|Sanchez" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <script src="/js/jquery-3.2.1.min.js"></script>
        <script src="/js/jquery-ui.min.js"></script>
        <script  src="/js/user/user.js"></script>
        <script  src="/js/ajax/get.js"></script>
        <script  src="/js/bootstrap.bundle.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
        <script type="text/javascript" src="https://cdn.bootcss.com/typed.js/1.1.4/typed.min.js"></script>
        <script src="/js/carousel.js"></script>
       
        
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

<!--HEADER-->

    <div class="container-fluid">
            <div class="row sharubati-header">
                <div class="container">

                    <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                          </button>
                    <img class="sharubati-logo" src = "{{ URL::asset('/images/syde-images/sharubati-logo.png')}}" alt = "logo">
                        </div>


                    <div class="pull-right menus collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                       <ul class="menu-links">   
                            <li class="links-list white sharubati-text"><a data-target="#" class="sharubati-nav-link sharubati-text nav_user" href="/">home</a></li>
                            <li class="links-list dropdown white">
                                <a data-target="#" class="dropdown-toggle sharubati-nav-link sharubati-text" href="#" data-toggle="dropdown">solutions<b class="caret"></b></a>

                                <ul class="dropdown-menu">
                                    <li class="sharubati-text"><a class="nav_user" data-target="#" href="/design-and-print">Design and Print</a></li>
                                    <li class="sharubati-text"><a class="nav_user" data-target="#" href="branding">Brand & Marketing</a></li>
                                    <li class="sharubati-text"><a class="nav_user" data-target="#" href="web">Web design & Development</a></li>
                                    <li class="sharubati-text"><a class="nav_user" data-target="#" href="development">Enterprise Software Development</a></li>
                                    <li class="sharubati-text"><a  class="nav_user"data-target="#" href="digital-marketing">Digital Marketing</a></li>
                                </ul> 
                            </li>
                            <li class="links-list white sharubati-text nav_user">team</li>
                            <li class="links-list white sharubati-text nav_user">Contact Us</li>
                        </ul>
                    </div>
            </div>
        </div>

<!--END HEADER-->


<div class="container-fluid">


    {{--          This is ajax div where the magick happens    --}}
        <div class="magic">
<!--ABOVE FOLD-->
              <div class="row above-fold">
                 
                    <div class="container">
                        <div class="hero-text-container">
                            <h1 class="hero-title align-center blue write"></h1>
                            
                        </div>

                        <div class="text-center">
                            <button class="hero-button">Lets talk about your project <i class="fa fa-chevron-circle-right"></i></button>
                        </div>
                    </div>

                </div>

<script type="text/javascript">
    $(function(){
        $(".write").typed({
            strings: ["We are building a whole new <b> Digital World<span>  ^500\n For Businesses </b>", "Using <b> Digital Tools </b> ^300\n to help businesses <b> grow and compete.</b>", "Building <b> Brands of the Future ^500\n Today </b>"],
            typeSpeed: 0,
            loop: true,
            loopCount: false,
            backSpeed: 0,
            backDelay: 5000,
            showCursor: false,
            eraseAtOnce: true,
            contentType: 'html',
        });
    });
</script>
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
                                        <li class="sharubati-text"><a href="branding">Branding</a></li>
                                        <li class="sharubati-text"><a class="nav_user" 
                                        href="/design-and-print">Print</a></li>
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
                                        <li class="sharubati-text"><a  class="nav-user" href="web">Web systems</a></li>
                                        <li class="sharubati-text"><a href="development">Custom Enterprise Software</a></li>
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
                                        <li class="sharubati-text"><a href="digital-marketing">Content Marketing</a></li>
                                        <li class="sharubati-text"><a href="digital-marketing">Social Media Marketing</a></li>
                                        <li class="sharubati-text"><a href="digital-marketing">Search Marketing (SEO, SEM)</a></li>
                                    </ul>
                                </p>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<!--MORE ABOUT US-->
        
        <div class="row more">
            <div class="container">
                    <div class="row more-container">
                        <div class="col-md-8 text-container">

                            <img class="img-responsive more-background" src = "{{ URL::asset('/images/syde-images/designer-desk.png')}}" alt = "designer-desk">

                            <h2 class="more-title blue sharubati-title">You can <b>trust us</b> to get the <b>job done.</b></br> Our solutions are not a cost, they are an <b>investment.</b></h2>
                            <p class="gray-text more-text sharubati-text">We are consciuos of cost and deadlines. We understand how much value you expect for your money and thats why  are backed by a creative and professional team that will see to it that you get just that.
                            So trust us with your job, we have designers, developers and marketers to ensure your job is given an all round perspective.</p>
                        </div>


                        <div class="col-md-4 form-bg">
        
                                <div class="row form-header">
                                    <h2 class="form-title sharubati-title white">Lets Talk Business</h2>
                                </div>

                                <div class="row more-form-body">
                                     <form>
                                      <div class="form-group">
                                        <input type="text" class="form-control no-border sharubati-text" id="project-category" placeholder="What is your project about?">
                                      </div>
                                      
                                      <div class="form-group">
                                        <input type="text" class="form-control no-border sharubati-text" id="budget" placeholder="Do you have a bugdet?">
                                      </div>
                                      
                                      <div class="form-group">
                                        <input type="text" class="form-control no-border sharubati-text" id="budget" placeholder="What about a deadline?">
                                      </div>

                                      <button type="submit" class="sharubati-button sharubati-title pull-right"><b>A few more details</b> <i class="fa fa-paper-plane"></i></button>
                                    </form>
                                </div>
                        </div>
                    </div>
                    
            </div>
    </div>

        <div class="row testimony">
            <div class="container">
                <h2 class="testimonial-header sharubati-title" >What Our Customers Say About Us</h2>
                
                <div class="col-md-8 col-md-offset-2">

                        <img class="img-resonsive testimony-icon" src = "{{ URL::asset('/images/syde-images/testimony-speech-marks.png')}}" alt = "speech-marks">

                            <p class="testimony-text sharubati-text align-center">
                                When i was setting up, i needed a consultant who would help me appropiately position the brand and give it that unique identity.  <b>Sharubati Technologies</b> brought the business brand to life and implemented an effective way to gain awareness fast and i was amazed at how easily we hit our set threshold.<br><b>~ Oliver, Autokey.</b>
                            </p>
                </div>
            </div>
        </div>

    <div class="row client-logos">

            <h2 class="clients-header sharubati-title">Some of the brands we have worked with.</h2>
            <div class="container">
              <section class="customer-logos slider">
                <div class="slide"><img src="{{ URL::asset('/images/syde-images/omega-logo.png')}}"></div>
                <div class="slide"><img src="{{ URL::asset('/images/syde-images/pace-logo.png')}}"></div>
                <div class="slide"><img src="{{ URL::asset('/images/syde-images/techguy-logo.png')}}"></div>
                <div class="slide"><img src="{{ URL::asset('/images/syde-images/adventurepics-logo.png')}}"></div>
                <div class="slide"><img src="{{ URL::asset('/images/syde-images/umati-logo.png')}}"></div>
                <div class="slide"><img src="{{ URL::asset('/images/syde-images/yakayeke-logo.png')}}"></div>
                <div class="slide"><img src="{{ URL::asset('/images/syde-images/techguy-logo.png')}}"></div>
                <div class="slide"><img src="{{ URL::asset('/images/syde-images/nairobichapel-logo.png')}}"></div>
              </section>
            </div>
    </div>
</div>


<div class="row subscribe">
    <div class="container">
        <div class="col-md-10 col-md-offset-1">
            <h3 class="white align-center subcriber-statement sharubati-title"><b>The Digital World</b> is exploding with <b>new information</b> everyday and we have made it our business to keep you informed and offer insights for your business.</br> Join our growing list of subscribers.</h3>

            <div class="subscriber-form col-md-8 col-md-offset-2">
                    <form class="sub_form form-inline">
                        <div class="form-group col-md-8">
					       {{csrf_field()}}
                            <input type="email" class="sharubati-form sharubati-text subcriber-email" id="budget" name="email" placeholder="your email" required>
                        </div>

                        <div class="form-group col-md-4">
                            <button type="submit" class="form-button sharubati-title"><b>Subscribe</b><i class="fa fa-paper-plane"></i></button>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</div>

<div class="row footer">
    <div class="container">
        <div class="col-md-4 footer-container">
            <h1 class="sharubati-title">Who We Are</h1>
            <p class="sharubati-text footer-text"><b>Sharubati Technologies</b> is an IT consulting firm based in Nairobi and was set up to offer 360 degrees digital solutions to our customers. From design, print, brand origination, UX/UI, web, software development,  digital strategy and marketing, data handling and analytics. 
            </p>

            <h4 class="sharubati-text"><b>Sharubati Technologies Ltd.</b></h4>
            <p class="sharubati-text"><i class="fa fa-phone-square"></i> +254 725 131 565 (Dennis)</h5>
            <p class="sharubati-text"><i class="fa fa-phone-square"></i> +254 724 209162 (Sydney)</h5>
        </div>

        <div class="col-md-4 footer-container">
            <h1 class="sharubati-title">We Are Social</h1>
            <p class="sharubati-text footer-text">Every so often we share our wisdom gained from work experience with our followers on social media pages. </p>
            
            <div class="social-icons">
                <a href=""><img class="social-icon" src = "{{ URL::asset('/images/syde-images/social-icons-02.png')}}" alt = "logo"></a>
                <a href=""><img class="social-icon" src = "{{ URL::asset('/images/syde-images/social-icons-03.png')}}" alt = "logo"></a>
                <a href=""><img class="social-icon" src = "{{ URL::asset('/images/syde-images/social-icons-04.png')}}" alt = "logo"></a>
                <a href=""><img class="social-icon" src = "{{ URL::asset('/images/syde-images/social-icons-05.png')}}" alt = "logo"></a>
            </div>
        </div>

        <div class="col-md-4 ms_leave">
                            <div class="row form-header">
                                    <h2 class="form-title sharubati-title white">Contact us</h2>
                                </div>

                                <div class="row footer-form-body">
                                    <form class="msg_form">
									{{csrf_field()}}
                                      
                                      <div class="form-group">
                                        <input type="text" class="form-control no-border sharubati-text" id="" name="name" placeholder="Name"  required>
                                      </div>

                                      <div class="form-group">
                                        <input type="email" class="form-control no-border sharubati-text" id="" name="email" placeholder=" Email" required>
                                      </div>

									  <div class="form-group update" hidden >
	   
										<input type="text" class="form-control no-border sharubati-text" id="budget" name="phone_no" placeholder="phone no." required>
									  </div>
									  
									  <div class="form-group  update " hidden>
									   
										<textarea class="form-control no-border sharubati-text" cols="3"  name="body"  placeholder="Type Message" required>Message</textarea>
									  </div>
                                      
<!-- <<<<<<<< HEAD
                                      <div class="form-group">
                                        <input type="text" class="form-control no-border sharubati-text" id="budget" placeholder="phone no.">
                                      </div>
                                      
                                      <div class="form-group">
                                        <textarea class="form-control no-border sharubati-text" rows="4">Message</textarea>
                                      </div>

                                      <button type="submit" class="sharubati-button pull-right"><b>A few more details</b> <i class="fa fa-paper-plane"></i></button>-->
                                      

                                      <button type="button" class="sharubati-button pull-right msg_bt fm_btn"><b class="change">A few more details </b> <i class="fa fa-arrow-right"></i></button>
                                    </form>
                                </div>  
        </div>
    </div>
    </body>
</html>

