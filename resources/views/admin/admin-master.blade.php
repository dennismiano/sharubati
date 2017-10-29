<!doctype html>
<html lang="{{ app()->getLocale() }}">

    <head>
        <meta charset="utf-8">

        <title>Admin Panel</title>
        <link href="{{ URL::asset('/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{ URL::asset('/css/syde.css')}}" rel="stylesheet">
        <link href="{{ URL::asset('/css/admin-master.css')}}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway|Sanchez" rel="stylesheet">
		<script src="/js/jquery-3.2.1.min.js"></script>
	   <script src="/js/jquery.js"></script>
	   <script  src="/js/ajax/get.js"></script>
	   
	   <script  src="/js/link.js"></script>



    </head>
  
    <body>

    <div class="container-fluid">
            <div class="row admin-panel">
            		<img class="admin-panel-icon" src = "{{ URL::asset('/images/syde-images/admin-images/admin-menu.png')}}" alt = "logo">

            		<div class="admin-panel-links pull-right">
            			
            			<a href="/admin-home">
            				<img class="admin-panel-icon" src = "{{ URL::asset('/images/syde-images/admin-images/leads-01.png')}}" alt = "logo">
            			</a>

            			<a href="/messages">
            				<img class="admin-panel-icon" src = "{{ URL::asset('/images/syde-images/admin-images/messages-01.png')}}" alt = "logo">
            			</a>

            			<a href="/subscribers">
            				<img class="admin-panel-icon" src = "{{ URL::asset('/images/syde-images/admin-images/subscribers-01.png')}}" alt = "logo">
            			</a>

            			<a href="/blog">
            				<img class="admin-panel-icon" src = "{{ URL::asset('/images/syde-images/admin-images/edit-blog-01.png')}}" alt = "logo">
            			</a>

            			<a href="/projects">
            				<img class="admin-panel-icon" src = "{{ URL::asset('/images/syde-images/admin-images/projects-01.png')}}" alt = "logo">
            			</a>
            		</div>
            </div>
            		@yield('content')
    </div>