<!doctype html>
<html lang="{{ app()->getLocale() }}">
<html >
    <head>
        <meta charset="utf-8">
       
        

        <title>Sharubati</title>
        <link href="{{ URL::asset('/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{ URL::asset('/css/syde.css')}}" rel="stylesheet">

        <!--fonts-->
       <link href="https://fonts.googleapis.com/css?family=Sanchez" rel="stylesheet">
       <link href="https://fonts.googleapis.com/css?family=Hind" rel="stylesheet"> 

    </head>
  
    <body>

<!--ABOVE FOLD-->
        <div class="container-fluid above-fold">
            <div class="container syde-header">
                <img class="syde-logo" src = "{{ URL::asset('/images/syde-images/sharubati-logo.png')}}" alt = "First slide">
                
                <div class="pull-right">
                    <b><ul class="menu-links">
                        <li class="links-list white">home</li>
                        <li class="links-list white">solutions</li>
                        <li class="links-list white">blog</li>
                        <li class="links-list white">team</li>
                    </ul></b>
                </div>

                
            </div>

            <div class="container">
                
                <div class="cta-container col-md-4">   
                    <div class="">
                        <h1 class="running-text white">Small Team <br> Custom Solutions</h1>
                    </div>

                    <button class="cta-button"><b>Lets talk about your project </b></button>
                </div>

            <img class="hero-image img-responsive" src = "{{ URL::asset('/images/syde-images/slider-computer.png')}}" alt = "computer with design elements">

            </div>

        </div>


<!--SERVICES-->
       
        <div class="container main-services">
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
                                    <li>Advertising</li>
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
                                </ul>
                            </p>
                    </div>
                    </div>
                </div>
            </div>
        </div>

<!--MORE ABOUT US-->
        <div class="container-fluid more">
            <div class="container">
                <div class="col-md-8 col-md-offset-2 more-container">
                    <div class="row">
                        <div class="col-md-7">
                            <h4 class="more-title white">You can trust us to get the job done.</h4>
                            <p class="white more-text">We are consciuos of cost and deadlines. We understand how much value you expect for your money and thats why  are backed by a creative and professional team that will see to it that you get just that.
                            So trust us with your job, we have designers, developers and marketers to ensure your job is given an all round perspective.</p>
                        </div>

                        <div class="col-md-5">
                            <div class="form-container">
                                <h2 class="form-title">Lets Talk Business</h2>
                                 <form>
                                  <div class="form-group">
                                   <!-- <label for="project-category">What is your project about?</label>-->
                                    <input type="text" class="form-control" id="project-category" placeholder="What is your project about?">
                                  </div>
                                  
                                  <div class="form-group">
                                   <!-- <label for="project-category">What is your project about?</label>-->
                                    <input type="text" class="form-control" id="budget" placeholder="Do you have a predetermined budget">
                                  </div>
                                  
                                  <div class="form-group">
                                   <!-- <label for="project-category">What is your project about?</label>-->
                                    <input type="text" class="form-control" id="project-category" placeholder="What about a deadline?">
                                  </div>

                                  <button type="submit" class="btn btn-default">A few more details</button>
                                </form>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>

        <div class="container-fluid testimony">
            <h2 class="testimonial-header" >Our Happy Customers</h2>
            
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
                    <h2 class="clients-header">Some of the brands we have worked with.</h2>

                    <div class="col-md-3">
                        <img class="img-resonsive" src = "{{ URL::asset('/images/syde-images/omega-logo.png')}}" alt = "devops-icon">
                    </div>

                    <div class="col-md-3">
                        <img class="img-resonsive" src = "{{ URL::asset('/images/syde-images/pace-logo.png')}}" alt = "devops-icon">
                    </div>

                    <div class="col-md-3">
                        <img class="img-resonsive" src = "{{ URL::asset('/images/syde-images/startimes-logo.png')}}" alt = "devops-icon">
                    </div>

                    <div class="col-md-3">
                        <img class="img-resonsive" src = "{{ URL::asset('/images/syde-images/umati-logo.png')}}" alt = "devops-icon">
                    </div>

                    <div class="col-md-3">
                        <img class="img-resonsive" src = "{{ URL::asset('/images/syde-images/yakayeke-logo.png')}}" alt = "devops-icon">
                    </div>

                    <div class="col-md-3">
                        <img class="img-resonsive" src = "{{ URL::asset('/images/syde-images/techguy-logo.png')}}" alt = "devops-icon">
                    </div>

                    <div class="col-md-3">
                        <img class="img-resonsive" src = "{{ URL::asset('/images/syde-images/adventurepics-logo.png')}}" alt = "devops-icon">
                    </div>

                    <div class="col-md-3">
                        <img class="img-resonsive" src = "{{ URL::asset('/images/syde-images/nairobichapel-logo.png')}}" alt = "devops-icon">
                    </div>
            </div>
        </div>

    </body>
<!-- </html> -->