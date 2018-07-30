@extends('layouts.app')
@section('content')
  
<div class="main_content">
	<div class="container">
		<div class="row"> 
			<div class="col-md-offset-3 col-md-6 login-box text-center">
				<div class="col-md-offset-2 col-md-8">
					<h3 class="sigunp-title" style="text-align: center;">Login with your email</h3>
			      	<form  action="">
				        <div class="form-group">
				          <input type="email" class="form-control" id="email" placeholder="Mobile Number or Email">
				        </div>
				        <div class="form-group">
				          <input type="password" class="form-control" id="pwd" placeholder="Password">
				        </div>
				        <p><a href="" class="forgot">Forgot your password?</a></p>
				        <div class="form-group">
				        	<button type="submit" class="btn login-btn btn-block btn-lg">Log In</button>
				        	<p class="text-center"><strong>Or</strong></p>
				        	<button class="btn btn-fb btn-lg btn-block"><i class="fa fa-facebook-square pull-left" aria-hidden="true"></i>Continue with Facebook<i class="fa fa-arrow-circle-o-right pull-right" aria-hidden="true"></i></button>
				        	<button class="btn btn-gmail btn-lg btn-block"><i class="fa fa-google-plus pull-left" aria-hidden="true"></i>Continue with Gmail<i class="fa fa-arrow-circle-o-right pull-right" aria-hidden="true"></i></button>
				        </div>
			      	</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection