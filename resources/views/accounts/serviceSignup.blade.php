@extends('layouts.app')
@section('content')

<div class="main_content">
	<div class="container">
		<div class="col-md-12 login-box">
			<div class="col-md-offset-4 col-md-4">
				<h3 class="sigunp-title">Sign up to E-dehari</h3>
				<form  action="{{url('create_serviceUser')}}" method="post">
          {{csrf_field()}}
					<div class="form-group">
			          <input type="text" class="form-control" name="f_name" id="f_name" placeholder="First Name" required="">
			        </div>
			        <div class="form-group">
			          <input type="text" class="form-control" name="phone" id="phone" placeholder="Mobile Number*" required="">
			        </div>
			        <div class="form-group">
			          <input type="email" class="form-control" name="email" id="email" placeholder="Email">
			        </div>
			        <div class="form-group">
			          <input type="password" class="form-control" name="password" id="password" placeholder="Password" required="">
			        </div>
              <input type="hidden" name="type" value="serviceUser">
			        <div class="form-group">
			        	<button type="submit" class="btn btn-fb btn-block btn-lg">Sign Up</button>
			        </div>
			      </form>
			</div>
		</div>
	</div>
</div>
@endsection
