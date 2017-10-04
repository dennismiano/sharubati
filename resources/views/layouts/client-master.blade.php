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
       <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>
  
    <body>

<!--ABOVE FOLD-->
        <div class="container-fluid">
            <div class="row sharubati-header">

                <div class="container">
                    <img class="sharubati-thumbnail-logo" src = "{{ URL::asset('/images/syde-images/sharubati-thumbnail.gif')}}" alt = "logo">

                    <div class="pull-right">
                        <b><ul class="menu-links">
                            <li class="links-list white">home</li>
                            <li class="links-list white">solutions</li>
                            <li class="links-list white">blog</li>
                            <li class="links-list white">team</li>
                        </ul></b>
                    </div>
                </div>
            </div>


            <div class="container-fluid">
                @yield('content')
            </div>

        </div>
    </body>
</html>

