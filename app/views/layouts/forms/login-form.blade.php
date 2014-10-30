
<ul class="nav navbar-nav navbar-right">

	@if (isset($_SESSION['user_id']))
	<form
	class="navbar-form navbar-right" role="logout"
	method="POST"
	action="logout">
	<div class="form-group">
		<button type="logout" class="btn btn-default">Logout</button>
	</div>
</form> 		

@else 
<form
class="navbar-form navbar-right" role="login"
method="POST"
action="login">
<div class="form-group">
	Username: <input style="width:100px " type="text" name="username" class="form-control">
	Password: <input style="width:130px "type="text" name="password" class="form-control">
	<button type="login" class="btn btn-default">Login</button>
	<button type="register" class="btn btn-default">Register</button>
</div>
</form>

@endif

