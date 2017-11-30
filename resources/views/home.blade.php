<!--ABOVE FOLD-->
              <div class="row above-fold">
                 
                    <div class="container hero-stuff-holder" data-enllax-ratio=".4" data-enllax-type="foreground">
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
            strings: ["We are building a whole new <b> Digital World<span>  ^500\n For Businesses </b>", "Using <b> Digital Tools </b> ^300\n to help businesses <b> grow and compete.</b>", "Building <b> Brands of the Future. ^500\n Today </b>"],
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
                <div class="col-md-4 animation-element bounce-up">
                    <div class="subject services-statement">
                        <h3 class="services-header">We are the perfect blend of aesthetics and function. And  we say it in the solutions we give</h3>
                        <img class="border-bar img-responsive" src = "{{ URL::asset('/images/syde-images/border-bar.png')}}" alt = "computer with design elements">
                        <p class="sharubati-text services-text">   We design custom solutions with your business in mind. We have what it takes to grow your brand both on print and display. We also craft custom  tools to help your business run efficiently.
                            Business requirements are different and we have the creativity and analytical thinking to implement your business strategy in a way that your business enjoys value for money.
                    </p>
                    </div>
                </div>

                <div class="col-md-8 services-box">
                    <div class="row">
                        <div class="col-md-4 animation-element bounce-up in-view">
                            <div class="services-container subject">
                                <img class="services-icon img-responsive" src = "{{ URL::asset('/images/syde-images/design-icon.png')}}" alt = "design-icon">
                                <h4 class="services-title"><b>DESIGN</b></h4>
                                <p class="sharubati-text">If you are looking for that high quality work that makes your business stand out and gives your brand an appealing identity, we are the team you need;
                                    <ul>
                                        <li class="sharubati-text"><a class="nav_user blue" href="branding">Design and Branding</a></li>
                                        <li class="sharubati-text"><a class="nav_user blue" 
                                        href="design-and-print">Print Design</a></li>
                                    </ul>
                                </p>
                            </div>
                        </div>

                        <div class="col-md-4 animation-element bounce-up in-view">
                            <div class="services-container subject">
                                <img class="services-icon img-responsive" src = "{{ URL::asset('/images/syde-images/devops-icon.png')}}" alt = "devops-icon">
                                <h4 class="services-title"><b>DEVELOPMENT</b></h4>
                                <p class="sharubati-text">Whether its a website, a web application or a custom business software, we have a professional team of designers and developers  that collaborates to deliver solutions that are functional and scalable.
                                    <ul>
                                        <li class="sharubati-text"><a  class="nav_user blue" href="web">Web systems</a></li>
                                        <li class="sharubati-text"><a class="nav_user blue" href="development">Custom Enterprise Software</a></li>
                                    </ul>

                                </p>
                            </div>
                        </div>

                        <div class="col-md-4 animation-element bounce-up in-view">
                            <div class="services-container subject">
                                <img class="services-icon img-responsive" src = "{{ URL::asset('/images/syde-images/strategy-icon.png')}}" alt = "strategy-icon">
                                <h4 class="services-title"><b>STRATEGY</b></h4>
                                <p class="sharubati-text">Data driven strategy to increase leads and conversions. We use a combinations of tools and media, a deep insight into buyer behavior to inform your digital options
                                    <ul>
                                        <li class="sharubati-text"><a class="nav_user blue" href="digital-marketing">Content Marketing</a></li>
                                        <li class="sharubati-text"><a class="nav_user blue" href="digital-marketing">Social Media Marketing</a></li>
                                        <li class="sharubati-text"><a class="nav_user blue" href="digital-marketing">Search Marketing (SEO, SEM)</a></li>
                                    </ul>
                                </p>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<!--MORE ABOUT US-->
        
    <div class="row more animation-element bounce-up in-view pro_leave">
        <img class="img-responsive more-background subject" src = "{{ URL::asset('/images/syde-images/designer-desk.png')}}" alt = "designer-desk">
            <div class="container animation-element bounce-up in-view">
                        <div class="col-md-8 more-text-container">
                            <h2 class="more-title blue sharubati-title subject">You can <b>trust us</b> to get the <b>job done.</b></br> We are professionals at what we do which makes us an <b>investment and</b> not a cost.</h2>
                            <p class="gray-text more-text sharubati-text subject">We are consciuos of cost and deadlines. We understand how much value you expect for your money and thats why we make it our business to deliver nothing short of impressive. Paying attention to every detail of your project and considerations for the ultimate user or audience.</br></br> At Sharubati we have a creative and professional team that will see to it that you get viable solutions for your business.
                            So trust us with your job, we have designers, developers and marketers to ensure your job is given an all round perspective.</p>
                        </div>


                        <div class="col-md-4 form-bg subject">
        
                                <div class="row form-header">
                                    <h2 class="form-title sharubati-title white">Lets Talk Business</h2>
                                </div>

                                <div class="row more-form-body">
                                     <form class="project_fm">
                                     {{csrf_field()}}
                                      <div class="form-group">
                                        <input type="text" class="form-control no-border sharubati-text" id="project-category" placeholder="What is your project about?" name="about">
                                      </div>
                                      
                                      <div class="form-group">
                                        <input type="text" class="form-control no-border sharubati-text"  placeholder="Do you have a bugdet?" name="budget">
                                      </div>
                                      
                                      <div class="form-group">
                                        <input type="text" class="form-control no-border sharubati-text"  placeholder="What about a deadline?" name="deadline">
                                      </div>
                                      <div class="form-group proj_update"  hidden>
                                        <input type="text" class="form-control no-border sharubati-text" placeholder="Name" name="name">
                                      </div>
                                      <div class="form-group proj_update" hidden>
                                        <input type="email" class="form-control no-border sharubati-text" placeholder="Email" name="email">
                                      </div>
                                      <div class="form-group proj_update"  hidden>
                                        <input type="text" class="form-control no-border sharubati-text" placeholder="Phone Number" name="phone">
                                      </div>

                                      <button type="button" class="sharubati-button sharubati-title pull-right pro_btn proje_btn"><b class="proj_change">A few more details</b> <i class="fa fa-paper-plane"></i></button>
                                    </form>
                                </div>
                        </div>                  
            </div>
    </div>
<!--MORE ABOUT US-->

        <div class="row testimony">
            <div class="container animation-element bounce-up">
                <h2 class="testimonial-header sharubati-title subject blue">What Our Customers Say About Us</h2>
                
                <div class="col-md-8 col-md-offset-2">

                        <img class="img-resonsive testimony-icon subject" src = "{{ URL::asset('/images/syde-images/testimony-speech-marks.png')}}" alt = "speech-marks">

                            <p class="testimony-text sharubati-text align-center subject">
                                When i was setting up, i needed a consultant who would help me appropiately position the brand and give it that unique identity.  <b>Sharubati Technologies</b> brought the business brand to life and implemented an effective way to gain awareness fast and i was amazed at how easily we hit our set threshold.<br><b>~ Oliver, Autokey.</b>
                            </p>
                </div>
            </div>
        </div>

    <div class="row client-logos animation-element bounce-up">

            <h2 class="clients-header sharubati-title blue subject">Some brands we have worked with.</h2>
            <div class="container">
              <section class="customer-logos slider subject">
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

    <script>

        (function($){
            
            //Plugin activation
            $(window).enllax();
            
//            $('#some-id').enllax();
            
//            $('selector').enllax({
//                type: 'background', // 'foreground'
//                ratio: 0.5,
//                direction: 'vertical' // 'horizontal'
//            });
            
        })(jQuery);



    </script>
    <script src="{{ URL::asset('/js/carousel.js')}}"></script>
    <script src="{{ URL::asset('/js/animations.js')}}"></script>