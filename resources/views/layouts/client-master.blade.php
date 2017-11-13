<!doctype html>
<html lang="{{ app()->getLocale() }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="google-site-verification" content="n9swYqcSP0lnLuQubAo4b3psuDZ2J19iaaGJndIcBpM" />
        

        <title>Sharubati Change</title>
        <link href="{{ URL::asset('/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{ URL::asset('/css/syde.css')}}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway|Sanchez" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script  src="/js/bootstrap.bundle.js"></script>
        <script src="/js/jquery-3.2.1.min.js"></script>
        <script src="/js/jquery-ui.min.js"></script>
       <script  src="/js/user/user.js"></script>
       <script  src="/js/ajax/get.js"></script>
       <script type="text/javascript" src="https://cdn.bootcss.com/typed.js/1.1.4/typed.min.js"></script>
       
        
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
                    <img class="sharubati-logo" src = "{{ URL::asset('/images/syde-images/sharubati-logo.png')}}" alt = "logo">

                    <div class="pull-right menus navbar">
                      
                        <div class = "navbar-header">
                              <button type = "button" class = "navbar-toggle collapsed" 
                                 data-toggle = "collapse" data-target = "#example-navbar-collapse">
                                 <span class = "sr-only">Toggle navigation</span>
                                 <span class = "icon-bar top-bar"></span>
                                 <span class = "icon-bar middle-bar"></span>
                                 <span class = "icon-bar bottom-bar"></span>
                              </button>
                        </div>

                     <div class = "collapse navbar-collapse" id = "example-navbar-collapse">
                       <ul class="menu-links">   
                            <li class="links-list white sharubati-text"><a data-target="#" class="sharubati-nav-link sharubati-text nav_user" href="/">home</a></li>
                            <li class="links-list dropdown">
                                <a data-target="#" class="dropdown-toggle sharubati-nav-link sharubati-text nav_user" href="/design-and-print" data-toggle="dropdown">solutions<b class="caret"></b></a>

                                <ul class="dropdown-menu">
                                    <li class="sharubati-text"><a data-target="#" href="design-and-print">Design and Print</a></li>
                                    <li class="sharubati-text"><a data-target="#" href="branding">Brand & Marketing</a></li>
                                    <li class="sharubati-text"><a data-target="#" href="web">Web design & Development</a></li>
                                    <li class="sharubati-text"><a data-target="#" href="development">Enterprise Software Development</a></li>
                                    <li class="sharubati-text"><a data-target="#" href="digital-marketing">Digital Marketing</a></li>
                                </ul> 
                            </li>
                            <li class="links-list white sharubati-text"><a data-target="#" class="sharubati-nav-link nav_user" href="/blog">blog</a></li>
                            <li class="links-list white sharubati-text nav_user">team</li>
                        </ul>
                    </div>
            </div>
        </div>
    </div>
<div class="container-fluid">
        @yield('content')
</div>
            
</body>
</html>

