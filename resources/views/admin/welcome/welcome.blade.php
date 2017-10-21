<!DOCTYPE HTML5>

<html>
	<head>
		<title>Admin Panel</title>
		<script src="/js/jquery-3.2.1.min.js"></script>
	   <script src="/js/jquery.js"></script>
	   <script src="/js/admin/login/login.js"></script>

	</head>
	<body>
	    <div class="login_form">
			
			<form class="login_admin">
				{{csrf_field()}}
			  <input type="email"  placeholder="Enter Email"   name="email" required/>
			  <input type="password"   placeholder="Enter Password"    name="password" required/>
			  <input type="submit" value="Sign In"/>
			  <a href="#">Forgot Password?</a>
			  
			</form>



		</div>
	    

	</body>



</html>