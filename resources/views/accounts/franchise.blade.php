@extends('layouts.app')
@section('content')
<?php
	$dob = '';
	$image = '';
	if ($user_get_info != null) {
		$dob = $user_get_info->dob;
		$image = $user_get->image;
	}else {
		$dob= '';
		$image = '';
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
							<div id="franchise_error" class="alert alert-danger alert-dismissible" style="display: none;">
							  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							  <span>Please fill all the fields</span>
							</div>
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
							    		<input type="date" id="dob" class="form-control" name="dob" value="{{$user_get->dob}}">
							  		</div>
							  	</div>
									<div class="form-group col-md-offset-8 col-md-3 nxt-btn">
							  		<button type="submit" id="franchise_info" data-toggle="pill" class="btn login-btn btn-block btn-lg">Next <i class="fa fa-arrow-circle-o-right pull-right" aria-hidden="true"></i></button>
							  	</div>
							</form>
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
							<div id="w_error" class="alert alert-danger alert-dismissible" style="display: none;">
							  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							  <span>Please fill all the fields</span>
							</div>
							<div id="worker_success" class="alert alert-success alert-dismissible" style="display: none;">
								<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
								<span>New Worker Added Successfully</span>
							</div>
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
										<div class="form-group col-md-6" style="padding-right: 0;">
								  		<label>Worker Designation</label>
											<div class="input-group">
								    		<span class="input-group-addon"><i class="fa fa-th-large"></i></span>
								    		<select class="form-control" id="w_designation">
													<?php foreach ($user_skill_info as $value): ?>
														<option value="{{$value->skill_name}}">{{$value->skill_name}}</option>
													<?php endforeach; ?>
					    			      <!-- <option value="Electician">Electician</option>
								    			<option value="Plumber">Plumber</option> -->
								    		</select>
								  		</div>
							  		</div>
							  	</div>
							  	<div class="form-group">
							  		<label>Valid Mobile</label>
							  		<div class="input-group">
							    		<span class="input-group-addon"><i class="fa fa-mobile"></i></span>
							    		<input type="text" name="w_mobile" id="w_mobile" class="form-control worker_input" placeholder="Mobile">
							  		</div>
										<!-- Image Loader -->
										<div id="loaderIcon" class="loaderIcon_franchise" style="display: none;"><img src="{{ asset('images/Spinner.gif')}}" alt="">
										</div>
										<!-- Image Loader Ends -->
							  	</div>
							  	<div class="form-group" style="padding-right: 0;" >
							  		<label>Email</label>
							  		<div class="input-group">
							    		<span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
							    		<input type="email" name="w_email" id="w_email" class="form-control worker_input" placeholder="Email">
							  		</div>
							  	</div>
									<div class="row">
									<div class="form-group col-md-6">
										<label>Date of Birth(optional)</label>
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
											<input type="date" id="dob_w" class="form-control worker_input">
										</div>
									</div>
								  	<div class="form-group col-md-4">
								  		<label>Experience</label><br>
											<div class="input-group">
								    		<span class="input-group-addon"><i class="fa fa-flask"></i></span>
								    		<input type="text" name="experience" id="experience" class="form-control worker_input" placeholder="experience">
								  		</div>
								  	</div>
							  	</div>
									<div class="row">
							  		<div class="form-group col-md-4" style="padding-right: 0;">
								  		<label>Gender</label>
											<div class="input-group">
								    		<span class="input-group-addon"><i class="fa fa-venus"></i></span>
								    		<select class="form-control" id="w_gender">
					    			      <option value="Male">Male</option>
								    			<option value="Female">Female</option>
								    		</select>
								  		</div>
							  		</div>
								  	<div class="form-group col-md-4">
								  		<label>Worker Picture</label><br>
								  		<label class="btn btn-file" for="w_image">Upload Picture
								  			<input type="file" name="w_image" id="w_image">
								  		</label>
								  	</div>
							  	</div>
									<div class="form-group" style="padding-right: 0;">
										<label>Location</label>
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
											<input type="text" id="locality1" class="form-control worker_input">
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
							<div id="s_error" class="alert alert-danger alert-dismissible" style="display: none;">
							  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							  <span>Please fill all the fields</span>
							</div>
							<div id="service_success" class="alert alert-success alert-dismissible" style="display: none;">
								<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
								<span>New Service Added Successfully</span>
							</div>
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
				  			<a href="{{url('/accounts/workerDashboard')}}" class="btn save-btn btn-lg">Next <i class="fa fa-arrow-circle-o-right pull-right" aria-hidden="true"></i></a>
				  		</div>

					</div>

				</div>
				<div class="col-md-5 right-side" style="padding: 31px 0 42px 50px;">
					<div class="user-panel">
							<span class="user-bg"><i class="fa fa-user"></i></span>
						<div class="user-section">
							<div class="arrow-up"></div>
							<div class="user-info">
								<?php
								$re=0;
									/*count whole resume record is percentage */
									if($user_get->f_name != ''){
									$re += 19.6666;
									}
									if($user_get->email != ''){
									$re += 19.6666;
									// echo $re;
									}
									if($user_get->phone != ''){
									$re += 19.6666;
									// echo $re;
									}
									if($dob != ''){
									$re += 19.6666;
									// echo $re;
									}

									if($image != ''){
									$re += 19.6666;
									// echo $re;
									}

									$width = round($re);
									?>
								<div class="c100 p<?php echo $width; ?>">
									<span class="user-img">
										<?php if (!empty($image)): ?>
											<img src="{{url('img/individual_profile/'.$image)}}" class="" alt="{{$image}}">
											<?php else: ?>
												<img src="{{url('/images/userIcon.png')}}" class="">
										<?php endif; ?>
										<!-- <img src="{{'../images/userIcon.png'}}"> -->
									</span>
																<div class="slice">
																		<div class="bar"></div>
																		<div class="fill"></div>
																</div>
														</div>
								<h4 class="text-muted" style="padding-top: 17px;">Profile <span class="text-color"><?php echo $width; ?>%</span> Complete</h4>
								<ul class="user-menu">
									<li><a href="{{url('/accounts/workerDashboard')}}"><i class="fa fa-cog"></i>Account Settings</a></li>
									<li><a href=""><i class="fa fa-lock"></i>Change Password</a></li>
									<li><a href="{{url('logout')}}"><i class="fa fa-power-off"></i>Logout</a></li>
								</ul>
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
var url = window.location.href;
    // alert(url);
    var id = url.substring(url.lastIndexOf('?') + 1);
		if (id == 'worker') {
			$('#personal-info').removeClass('active');
			$('#addworkers').addClass('active');
		}
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
	if (name == "" || phone =="" || dob=="") {
    $("#franchise_error").show();

    setTimeout(function () {
      $("#franchise_error").hide();
      $('#Professional').addClass('active');
    },3000);
    return 0;
  }

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
	var w_email = $('#w_email').val();
	var dob = $('#dob_w').val();
	var experience = $('#experience').val();
	var location = $('#locality1').val();
	var w_image = $('#w_image')[0].files[0];
	if (w_name == "" || w_designation =="" || w_mobile=="" || dob=="" || experience=="" || location=="") {
		$("#w_error").show();
		setTimeout(function () {
			$("#w_error").hide();
		},3000);
		return 0;
	}
	if (w_image != "") {
    $('#loaderIcon').show();
  }
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});

	form = new FormData();
	form.append('w_name', w_name);
	form.append('w_mobile', w_mobile);
	form.append('w_designation', w_designation);
	form.append('w_gender', w_gender);
	form.append('w_email', w_email);
	form.append('dob',dob);
	form.append('experience',experience);
	form.append('location',location);
	form.append('w_image',w_image);

	$.ajax({
		type: 'post',
		data: form,
		cache: false,
		contentType: false,
		processData: false,
		url: "{{url('add_worker')}}",
		success: function (response) {
			console.log(response);
			if (response == "1") {
				$('#loaderIcon').hide();
			$('.worker_input').val('');
				$("#worker_success").show();
				setTimeout(function () {
		      $("#worker_success").hide();
		    },3000);

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
	if (amount == "" || wages =="") {
		$("#s_error").show();
		setTimeout(function () {
			$("#s_error").hide();
		},3000);
		return 0;
	}
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
		url: "{{url('add_service')}}",
		success: function (response) {
			console.log(response);
			if (response == "1") {
			$('.service_input').val('');
			$("#service_success").show();
			setTimeout(function () {
				$("#service_success").hide();
			},3000);
			}
		}
	});
});
</script>

<script>
function initializeAutocomplete(){
  var input = document.getElementById('locality1');
  // var options = {
  //   types: ['(regions)'],
  //   componentRestrictions: {country: "IN"}
  // };
  var options = {}

  var autocomplete = new google.maps.places.Autocomplete(input,options);

  google.maps.event.addListener(autocomplete, 'place_changed', function() {
    var place = autocomplete.getPlace();
    var lat = place.geometry.location.lat();
    var lng = place.geometry.location.lng();
    // to set city name, using the locality param
    var componentForm = {
      locality1: 'short_name'
      // administrative_area_level_1: 'short_name',
      // country: 'long_name',
      // locality: 'long_name'
    };
    for (var i = 0; i < place.address_components.length; i++) {
      var addressType = place.address_components[i].types[0];
      if (componentForm[addressType]) {
        var val = place.address_components[i][componentForm[addressType]];
        document.getElementById(addressType).value = val;
      }
    }
    // document.getElementById("latitude").value = lat;
    // document.getElementById("longitude").value = lng;

  });
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB1RaWWrKsEf2xeBjiZ5hk1gannqeFxMmw&libraries=places&callback=initializeAutocomplete"
async defer></script>
@endsection
