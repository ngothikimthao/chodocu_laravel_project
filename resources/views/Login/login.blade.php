@extends('Customer.Layout.master')
@section('precontent')
<!-- <div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Sign In</h3>
				<div class="d-flex justify-content-end social_icon">
					<span><i class="fab fa-facebook-square"></i></span>
					<span><i class="fab fa-google-plus-square"></i></span>
					<span><i class="fab fa-twitter-square"></i></span>
				</div>
			</div>
			<div class="card-body">
				<form>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="username">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="password">
					</div>
					<div class="row align-items-center remember">
						<input type="checkbox">Remember Me
					</div>
					<div class="form-group">
						<input type="submit" value="Login" class="btn float-right login_btn">
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					Don't have an account?<a href="#">Sign Up</a>
				</div>
				<div class="d-flex justify-content-center">
					<a href="#">Forgot your password?</a>
				</div>
			</div>
		</div>
	</div>
</div> -->
<div class="container">
	<div class="row">
		<form class="form-signin mg-btm">
    	<center><h3 class="heading-desc">Login </h3><center>
		<div class="social-box">
			<div class="row mg-btm">
				<div class="col-md-3"></div>
				<div class="col-md-6">
					<a href="#" class="btn btn-primary btn-block">
					<i class="icon-facebook"></i>Login with Facebook
					</a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-6">
					<a href="#" class="btn btn-info btn-block" >
					<i class="icon-twitter"></i>Login with Twitter
					</a>
				</div>
          	</div>
			<br>
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-6">
					<input type="text" class="form-control" placeholder="Email" autofocus>
					<br>
					<input type="password" class="form-control" placeholder="Password">
					Are you a business? <a href=""> Get started here</a>
					<span class="clearfix"></span>
				</div>
          	</div> 
			  <br>
		</div>
		<div class="login-footer">
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-6">
				<div class="col-md-3"></div>
				<div class="col-md-6">
					<div class="">
						<a href="">Forgot your password?</a>
						<a href="">Sign up now</a>
					</div>
				</div>
				<br>
				<div class="col-xs-3 col-md-3 pull-right">
					<button type="submit" class="btn btn-large btn-danger pull-right">Login</button>
				</div>
			</div>
   		</div>
      </form>
	</div>
</div>
@endsection
@section('content')
@endsection