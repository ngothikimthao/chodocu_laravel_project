@extends('Customer.Layout.master')
@section('precontent')
<div class="container">
	<div class="row">
		<form class="form-signin mg-btm" method="POST" action="" >
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
					<input type="text" id="name" name="name" class="form-control" placeholder="Username" autofocus>
					<br>
					<input type="password" id="password" name="password" class="form-control" placeholder="Password">
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
					<button class="btn btn-success btn-submit">Submit</button>
				</div>
			</div>
   		</div>
      </form>
	</div>
</div>
@endsection
@section('content')
@endsection