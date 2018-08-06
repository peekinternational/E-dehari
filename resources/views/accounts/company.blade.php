@extends('layouts.app')
@section('content')
<?php
	$dob = '';
	if ($user_get_info != null) {
		$dob = $user_get_info->dob;
	}else {
		$dob= '';
	}
 ?>
<div class="individual-section">
	<div class="container">
		<div class="row">

			<div class="tab-content">
				<div id="personal-info" class="tab-pane fade in active">
					<div class="col-md-7 left-side">
						<h3>Help people find the right person</h3>
						<h4>
							<span class="span-circle" style="background: #FF6D0B;">1</span>
							<span class="des-title">Personal details</span>
							<span class="span-circle">2</span>
							<span class="des-title">Add Workers</span>
							<span class="span-circle">3</span>
							<span class="des-title">Add Services & Prices</span>
						</h4>
						<div class="col-md-8 individual-form">
							<form class="" action="#">
								{{csrf_field()}}
							  	<div class="form-group">
							  		<label>Full Name</label>
							  		<div class="input-group">
							  	  		<span class="input-group-addon"><i class="fa fa-user-o"></i></span>
							  	  		<input type="text"  id="name" class="form-control" name="f_name" value="{{$user_get->f_name}}">
							  		</div>
							  	</div>
							  	<div class="form-group">
							  		<label>Valid Mobile</label>
							  		<div class="input-group">
							    		<span class="input-group-addon"><i class="fa fa-mobile"></i></span>
							    		<input type="text" id="phone" class="form-control" name="phone" value="{{$user_get->phone}}">
							  		</div>
							  	</div>
							  	<div class="form-group">
							  		<label>Email Address(optional)</label>
							  		<div class="input-group">
							    		<span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
							    		<input type="text" id="email" class="form-control" name="email" value="{{$user_get->email}}">
							  		</div>
							  	</div>
							  	<div class="form-group">
							  		<label>Establish Date</label>
							  		<div class="input-group">
							    		<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
							    		<input type="date" id="dob" class="form-control" name="dob" value="{{$dob}}">
							  		</div>
							  	</div>
									<div class="form-group col-md-offset-8 col-md-3 nxt-btn">
							  		<button type="submit" id="franchise_info" data-toggle="pill" href="#addworkers" class="btn login-btn btn-block btn-lg">Next <i class="fa fa-arrow-circle-o-right pull-right" aria-hidden="true"></i></button>
							  	</div>
							</form>
						</div>


					</div>

					<div class="col-md-5 right-side" style="padding: 37px 0 86px 50px;">
						<div class="user-panel">
								<span class="user-bg"><i class="fa fa-user"></i></span>
							<div class="user-section">
								<div class="arrow-up"></div>
								<div class="user-info">
									<div class="c100 p40">
			                            <span class="user-img">
			                            	<img src="{{'../images/userIcon.png'}}">
			                            </span>
			                            <div class="slice">
			                                <div class="bar"></div>
			                                <div class="fill"></div>
			                            </div>
			                        </div>
									<h4 class="text-muted" style="padding-top: 17px;">Profile <span class="text-color">40%</span> Complete</h4>
									<ul class="user-menu">
										<li><a href=""><i class="fa fa-cog"></i>Account Settings</a></li>
										<li><a href=""><i class="fa fa-lock"></i>Change Password</a></li>
										<li><a href=""><i class="fa fa-power-off"></i>Logout</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="addworkers" class="tab-pane fade in">
					<div class="col-md-7 left-side">
						<h3>Help people to find the right person </h3>
						<h4>
							<span class="span-circle" style="background: #FF6D0B;">1</span>
							<span class="des-title">Personal details</span>
							<span class="span-circle" style="background: #FF6D0B;">2</span>
							<span class="des-title">Add Workers</span>
							<span class="span-circle">3</span>
							<span class="des-title">Add Services & Prices</span>
						</h4>
						<div class="col-md-9 individual-form">
							<form class="" action="#" method="" style="padding-top: 20px;">
                				{{csrf_field()}}
							  	<div class="row">
							  		<div class="form-group col-md-6" style="padding-right: 0;">
								  		<label>Worker Name</label>
								  		<div class="input-group">
								  			<span class="input-group-addon"><i class="fa fa-user-o"></i></span>
								    		<input type="text" name="w_name" id="w_name" class="form-control worker_input" placeholder="Worker Name">
								  		</div>
							  		</div>
								  	<div class="form-group col-md-6">
								  		<label>Worker Designation</label>
								  		<div class="input-group">
								    		<span class="input-group-addon"><i class="fa fa-user-o"></i></span>
								    		<input type="text" name="w_designation" id="w_designation" class="form-control worker_input" placeholder="Worker Designation">
								  		</div>
								  	</div>
							  	</div>
							  	<div class="form-group">
							  		<label>Valid Mobile</label>
							  		<div class="input-group">
							    		<span class="input-group-addon"><i class="fa fa-mobile"></i></span>
							    		<input type="text" name="w_mobile" id="w_mobile" class="form-control worker_input" placeholder="Mobile">
							  		</div>
							  	</div>
							  	<div class="row">
							  		<div class="form-group col-md-4" style="padding-right: 0;">
								  		<label>Gender</label>
								  		<div class="input-group">
								    		<span class="input-group-addon"><i class="fa fa-venus"></i></span>
								    		<input type="text" name="w_gender" id="w_gender" class="form-control worker_input">
								  		</div>
							  		</div>
								  	<div class="form-group col-md-4">
								  		<label>Worker Picture</label><br>
								  		<label class="btn btn-file" for="w_image">Upload Picture
								  			<input type="file" name="w_image" id="w_image">
								  		</label>
								  	</div>
							  	</div>

						  		<div class="form-group col-md-4 nxt-btn" style="padding-left: 0;">
						  			<button type="submit" id="w_btn" class="btn login-btn btn-block">Add New <i class="fa fa-arrow-circle-o-right pull-right" aria-hidden="true"></i></button>
						  		</div>
							</form>
						</div>

						<div class="form-group col-md-offset-5 col-md-5 nxt-btn">
							<a data-toggle="pill" href="#personal-info" class="btn back-btn btn-lg"><i class="fa fa-arrow-circle-o-left pull-left" aria-hidden="true"></i> Back </a>
				  			<a data-toggle="pill" href="#location" class="btn save-btn btn-lg">Next <i class="fa fa-arrow-circle-o-right pull-right" aria-hidden="true"></i></a>
				  		</div>

					</div>
					<div class="col-md-5 right-side" style="padding: 33px 0 58px 50px;">
						<div class="user-panel">
								<span class="user-bg"><i class="fa fa-user"></i></span>
							<div class="user-section">
								<div class="arrow-up"></div>
								<div class="user-info">
									<div class="c100 p60">
			                            <span class="user-img">
			                            	<img src="{{'../images/userIcon.png'}}">
			                            </span>
			                            <div class="slice">
			                                <div class="bar"></div>
			                                <div class="fill"></div>
			                            </div>
			                        </div>
									<h4 class="text-muted" style="padding-top: 17px;">Profile <span class="text-color">60%</span> Complete</h4>
									<ul class="user-menu">
										<li><a href=""><i class="fa fa-cog"></i>Account Settings</a></li>
										<li><a href=""><i class="fa fa-lock"></i>Change Password</a></li>
										<li><a href=""><i class="fa fa-power-off"></i>Logout</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="location" class="tab-pane fade in">
					<div class="col-md-7 left-side" style="padding-bottom: 00px;">
						<h3>Help people to find the right person </h3>
						<h4>
							<span class="span-circle" style="background: #FF6D0B;">1</span>
							<span class="des-title">Personal details</span>
							<span class="span-circle" style="background: #FF6D0B;">2</span>
							<span class="des-title">Professional experience</span>
							<span class="span-circle" style="background: #FF6D0B;">3</span>
							<span class="des-title">Add Services & Prices</span>
						</h4>
						<div class="col-md-9 individual-form">
							<form class="">
							  	<div class="form-group">
							  		<label>Select Service Categories</label>
							  	  	<select class="form-control" id="srv_category" name="srv_category">
							  	  		<option value="Electrical Service" selected>Electrical Service</option>
							  	  		<option value="Car Service">Car Service</option>
							  	  	</select>
							  	</div>
				  		  	  	<div class="row">
				  		  		  	<div class="form-group col-md-5">
				  		  		  		<label>How much we will charge</label>
			  		  		    		<input type="text" id="amount" name="amount" class="form-control service_input" placeholder="Charge Rate">
				  		  		  	</div>
				  		  		  	<div class="form-group col-md-4" style="padding-left: 0;">
				  		  		  		<label>Hours/Days</label>
			  		  		    		<input type="text" id="wages" name="wages" class="form-control service_input" placeholder="Hours/Days">
				  		  		  	</div>
				  		  	  		<div class="form-group col-md-3" style="padding-left: 0;">
				  		  		  		<label>Rate</label>
		  		  		  				<select class="form-control" name="currency_type" id="currency_type">
		  		  		  					<option value="AED">AED</option>
		  		  		  					<option value="USD">USD</option>
		  		  		  					<option value="PKR">PKR</option>
		  		  		  				</select>
				  		  	  		</div>
				  		  	  	</div>
				  		  	  	<div class="form-group col-md-4 nxt-btn" style="padding-left: 0;">
						  			<button type="submit" id="srv_btn" class="btn login-btn btn-block">Add New </button>
						  		</div>
							</form>
						</div>

						<div class="form-group col-md-offset-6 col-md-5 nxt-btn frnchs-nxtbtn">
							<a data-toggle="pill" href="#addworkers" class="btn back-btn btn-lg"><i class="fa fa-arrow-circle-o-left pull-left" aria-hidden="true"></i> Back </a>
				  			<a href="#" class="btn save-btn btn-lg">Next <i class="fa fa-arrow-circle-o-right pull-right" aria-hidden="true"></i></a>
				  		</div>

					</div>
					<div class="col-md-5 right-side" style="padding: 31px 0 42px 50px;">
						<div class="user-panel">
								<span class="user-bg"><i class="fa fa-user"></i></span>
							<div class="user-section">
								<div class="arrow-up"></div>
								<div class="user-info">
									<div class="c100 p70">
			                            <span class="user-img">
			                            	<img src="{{'../images/userIcon.png'}}">
			                            </span>
			                            <div class="slice">
			                                <div class="bar"></div>
			                                <div class="fill"></div>
			                            </div>
			                        </div>
									<h4 class="text-muted" style="padding-top: 17px;">Profile <span class="text-color">70%</span> Complete</h4>
									<ul class="user-menu">
										<li><a href=""><i class="fa fa-cog"></i>Account Settings</a></li>
										<li><a href=""><i class="fa fa-lock"></i>Change Password</a></li>
										<li><a href=""><i class="fa fa-power-off"></i>Logout</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Ajax for Franchise  -->
<script>
$('#franchise_info').click(function (e) {
	e.preventDefault();
	// var form_value = $(this).serialize();
	var name = $('#name').val();
	var phone = $('#phone').val();
	var email = $('#email').val();
	var dob = $('#dob').val();
	console.log(email, dob);
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});

	form = new FormData();
	form.append('name', name);
	form.append('phone', phone);
	form.append('email', email);
	form.append('dob', dob);

	$.ajax({
		type: 'post',
		data: form,
		cache: false,
		contentType: false,
		processData: false,
		url: "{{ url('personal_info') }}",
		success: function (response) {
			console.log(response);
			if (response == "successfully") {
				$('#personal-info').removeClass('active');
				$('#addworkers').addClass('active');
			}
		}
	});
});
</script>

<script>
$('#w_btn').click(function (e) {
	e.preventDefault();
	// var form_value = $(this).serialize();
	var w_name = $('#w_name').val();
	var w_designation = $('#w_designation').val();
	var w_mobile = $('#w_mobile').val();
	var w_gender = $('#w_gender').val();
	var w_image = $('#w_image')[0].files[0];
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});

	form = new FormData();
	form.append('w_name', w_name);
	form.append('w_designation', w_designation);
	form.append('w_mobile', w_mobile);
	form.append('w_gender', w_gender);
	form.append('w_image',w_image);

	$.ajax({
		type: 'post',
		data: form,
		cache: false,
		contentType: false,
		processData: false,
		url: "{{url('add_worker_company')}}",
		success: function (response) {
			console.log(response);
			if (response == "1") {
			$('.worker_input').val('');

			}
		}
	});
});
</script>


<script>
$('#srv_btn').click(function (e) {
	e.preventDefault();
	var srv_category = $('#srv_category').val();
	var amount = $('#amount').val();
	var wages = $('#wages').val();
	var currency_type = $('#currency_type').val();
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});

	form = new FormData();
	form.append('srv_category', srv_category);
	form.append('amount', amount);
	form.append('wages', wages);
	form.append('w_mobile', w_mobile);
	form.append('currency_type', currency_type);

	$.ajax({
		type: 'post',
		data: form,
		cache: false,
		contentType: false,
		processData: false,
		url: "{{url('add_service_company')}}",
		success: function (response) {
			console.log(response);
			if (response == "1") {
			$('.service_input').val('');
			}
		}
	});
});
</script>
@endsection
