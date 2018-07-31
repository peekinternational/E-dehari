@extends('layouts.app')
@section('content')
  
<div class="main_content">
	<div class="container">
		<div class="col-md-12 login-box">
			<div class="col-md-offset-4 col-md-4">
				<h3 class="sigunp-title">Sign up to E-dehari</h3>
				<form  action="">
					<div class="form-group">
			          <input type="text" class="form-control" id="firstName" placeholder="First Name">
			        </div>
			        <div class="form-group">
			          <input type="text" class="form-control" id="emailMobile" placeholder="Mobile Number or Email*">
			        </div>
			        <div class="form-group">
			          <input type="password" class="form-control" id="pwd" placeholder="Password">
			        </div>
			        <div class="form-group">
			        	<button type="submit" class="btn btn-fb btn-block btn-lg">Sign Up</button>
			        </div>
			      </form>
			</div>
			<!-- <div class="tab-content">
			    <div id="individual" class="tab-pane fade in active">
			      <form  action="">
			        <div class="form-group">
			          <input type="email" class="form-control" id="email" placeholder="Mobile Number or Email">
			        </div>
			        <div class="form-group">
			          <input type="password" class="form-control" id="pwd" placeholder="Password">
			        </div>
			        <div class="form-group col-md-offset-2 col-md-8">
			        	<button type="submit" class="btn login-btn btn-block btn-lg">Sign Up</button>
			        	<br>
			        	<p class="text-center"><strong>Or</strong></p>
			        	<button class="btn btn-fb btn-lg btn-block"><i class="fa fa-facebook-square pull-left" aria-hidden="true"></i>Continue with Facebook<i class="fa fa-arrow-circle-o-right pull-right" aria-hidden="true"></i></button>
				        	<button class="btn btn-gmail btn-lg btn-block"><i class="fa fa-google-plus pull-left" aria-hidden="true"></i>Continue with Gmail<i class="fa fa-arrow-circle-o-right pull-right" aria-hidden="true"></i></button>
			        </div>
			      </form>
			    </div>
			    <div id="frenchise" class="tab-pane fade">
			      <form  action="">
			        <div class="form-group">
			          <input type="email" class="form-control" id="email" placeholder="Mobile Number or Email">
			        </div>
			        <div class="form-group">
			          <input type="password" class="form-control" id="pwd" placeholder="Password">
			        </div>
			        <div class="form-group col-md-offset-2 col-md-8">
			        	<button type="submit" class="btn login-btn btn-block btn-lg">Sign Up</button>
			        	<br>
			        	<p class="text-center"><strong>Or</strong></p>
			        	<button class="btn btn-fb btn-lg btn-block"><i class="fa fa-facebook-square pull-left" aria-hidden="true"></i>Continue with Facebook<i class="fa fa-arrow-circle-o-right pull-right" aria-hidden="true"></i></button>
				        	<button class="btn btn-gmail btn-lg btn-block"><i class="fa fa-google-plus pull-left" aria-hidden="true"></i>Continue with Gmail<i class="fa fa-arrow-circle-o-right pull-right" aria-hidden="true"></i></button>
			        </div>
			      </form>
			    </div>
			    <div id="company" class="tab-pane fade">
			      	<form  action="">
  				        <div class="form-group">
  				          <input type="email" class="form-control" id="email" placeholder="Mobile Number or Email">
  				        </div>
  				        <div class="form-group">
  				          <input type="password" class="form-control" id="pwd" placeholder="Password">
  				        </div>
  				        <div class="form-group col-md-offset-2 col-md-8">
  				        	<button type="submit" class="btn login-btn btn-block btn-lg">Sign Up</button>
  				        	<br>
  				        	<p class="text-center"><strong>Or</strong></p>
  				        	<button class="btn btn-fb btn-lg btn-block"><i class="fa fa-facebook-square pull-left" aria-hidden="true"></i>Continue with Facebook<i class="fa fa-arrow-circle-o-right pull-right" aria-hidden="true"></i></button>
  				        	<button class="btn btn-gmail btn-lg btn-block"><i class="fa fa-google-plus pull-left" aria-hidden="true"></i>Continue with Gmail<i class="fa fa-arrow-circle-o-right pull-right" aria-hidden="true"></i></button>
  				        </div>
				      	</form>
			    </div>
			</div> -->
		</div>
	</div>
</div>
@endsection