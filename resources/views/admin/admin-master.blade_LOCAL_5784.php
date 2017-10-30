<!doctype html>
<html lang="{{ app()->getLocale() }}">

    <head>
        <meta charset="utf-8">

        <title>Admin Panel</title>
        <link href="{{ URL::asset('/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{ URL::asset('/css/syde.css')}}" rel="stylesheet">
        <link href="{{ URL::asset('/css/admin-master.css')}}" rel="stylesheet">
		<script src="/js/jquery-3.2.1.min.js"></script>
	   <script src="/js/jquery.js"></script>
	   <script  src="/js/ajax/get.js"></script>
	   
	   <script  src="/js/admin/login.js"></script>



    </head>
  
    <body>

    <div class="container-fluid ">
            <div class="row admin-panel">
            		<img class="admin-panel-icon" src = "{{ URL::asset('/images/syde-images/admin-images/admin-menu.png')}}" alt = "logo">

            		<div class="admin-panel-links pull-right">
            			<img class="admin-panel-icon" src = "{{ URL::asset('/images/syde-images/admin-images/leads-01.png')}}" alt = "logo">

            			<img class="admin-panel-icon" src = "{{ URL::asset('/images/syde-images/admin-images/messages-01.png')}}" alt = "logo">

            			<img class="admin-panel-icon" src = "{{ URL::asset('/images/syde-images/admin-images/subscribers-01.png')}}" alt = "logo">

            			<img class="admin-panel-icon blog" src = "{{ URL::asset('/images/syde-images/admin-images/edit-blog-01.png')}}" alt = "logo">

            			<img class="admin-panel-icon" src = "{{ URL::asset('/images/syde-images/admin-images/projects-01.png')}}" alt = "logo">
            		</div>
            </div>
         <div class="row admin-content">
		      <div class="col-md-6">
					<div class="lead-holder">
						<h2 class="lead-name sharubati-title">Anthony Doe</h2>
						<p class="sharubati-text">anthonydoe@gmail.com | 0722123456 </p>
						<p class="sharubati-text gray-text">1 month ago</p>

						<p class="sharubati-text"><b>SERVICE:</b><span class="gray-text">WEB DEVELOPMENT</span></p>
						<p class="sharubati-text"><b>BUDGET:</b><span class="gray-text">NONE</span></p>
						<p class="sharubati-text"><b>DEADLINE:</b><span class="gray-text">NONE</span></p>
					</div>
				</div>

				<div class="col-md-6">
					<div class="lead-holder">
						<h2 class="lead-name sharubati-title">Anthony Doe</h2>
						<p class="sharubati-text">anthonydoe@gmail.com | 0722123456 </p>
						<p class="sharubati-text gray-text">1 month ago</p>

						<p class="sharubati-text"><b>SERVICE:</b><span class="gray-text">WEB DEVELOPMENT</span></p>
						<p class="sharubati-text"><b>BUDGET:</b><span class="gray-text">NONE</span></p>
						<p class="sharubati-text"><b>DEADLINE:</b><span class="gray-text">NONE</span></p>
					</div>
		       </div>	
        </div>
		</div>
		</body>
		</html>