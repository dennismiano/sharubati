<div>
    <script src="/js/admin/login/login.js"></script>
	<form class="login_admin">
	    {{csrf_field()}}
	  <input type="email"  placeholder="Enter Email" required  name="email"/>
	  <input type="password"   placeholder="Enter Password"    name="password" required/>
	  <input type="submit" value="Sign In"/>
	  <a href="#">Forgot Password?</a>
	  
	</form>



</div>