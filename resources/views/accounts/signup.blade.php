@extends('layouts.app')
@section('content')
<div class="main_content">
	<div class="container">
		<div class="row">
			<div class="col-md-offset-3 col-md-6 login-box">
				<ul class="nav nav-pills">
					<li class="active"><a data-toggle="pill" href="#individual">Individual worker </a></li>
					<li><a data-toggle="pill" href="#franchise">Franchise or Shop</a></li>
					<li><a data-toggle="pill" href="#company">Company or Contractor</a></li>
				</ul>
				<div class="tab-content">
					<div id="individual" class="tab-pane fade in active">
						<form  action="{{url('create_User')}}" method="post">
							{{csrf_field()}}
							<div class="form-group">
								<input type="text" class="form-control" id="email" name="email_phone" placeholder="Email">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" id="mobile" placeholder="Mobile Number">
							</div>
							<div class="form-group">
								<input type="password" class="form-control" name="password" id="pwd" placeholder="Password">
							</div>
							<input type="hidden" name="type" value="individual">
							<div class="form-group col-md-offset-2 col-md-8">
								<button type="submit" class="btn login-btn btn-block btn-lg">Sign Up</button>
								<br>
								<p class="text-center"><strong>Or</strong></p>
								<button class="btn btn-fb btn-lg btn-block"><i class="fa fa-facebook-square pull-left" aria-hidden="true"></i>Continue with Facebook<i class="fa fa-arrow-circle-o-right pull-right" aria-hidden="true"></i></button>
								<button class="btn btn-gmail btn-lg btn-block"><i class="fa fa-google-plus pull-left" aria-hidden="true"></i>Continue with Gmail<i class="fa fa-arrow-circle-o-right pull-right" aria-hidden="true"></i></button>
							</div>
						</form>
					</div>
					<div id="franchise" class="tab-pane fade">
						<form  action="{{url('create_User')}}" method="post">
							{{csrf_field()}}
							<div class="form-group">
								<input type="text" class="form-control" id="email" name="email_phone" placeholder="Email">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" id="mobile" placeholder="Mobile Number">
							</div>
							<div class="form-group">
								<input type="password" class="form-control" name="password" id="pwd" placeholder="Password">
							</div>
							<input type="hidden" name="type" value="shop">
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
						<form  action="{{url('create_User')}}" method="post">
							{{csrf_field()}}
							<div class="form-group">
								<input type="text" class="form-control" id="email" name="email_phone" placeholder="Email">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" id="mobile" placeholder="Mobile Number">
							</div>
							<div class="form-group">
								<input type="password" class="form-control" name="password" id="pwd" placeholder="Password">
							</div>
							<input type="hidden" name="type" value="company">
							<div class="form-group col-md-offset-2 col-md-8">
								<button type="submit" class="btn login-btn btn-block btn-lg">Sign Up</button>
								<br>
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
</div>
@endsection
