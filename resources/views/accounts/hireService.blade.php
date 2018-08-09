@extends('layouts.app')
@section('content')
<?php
  $gender = '';
  $dob = '';
  $location = '';
  $address = '';
  $currency_type = '';
	$amount = '';
  $service_category = '';
  $time = '';
  $end_time = '';
  $people = '';
  $start_date = '';
  $end_date = '';
  $image = '';
	$total = '';
	if ($user_get_info != null) {
		$gender = $user_get_info->gender;
		$dob = $user_get_info->dob;
    $location = $user_get_info->location;
    $address = $user_get_info->address;
		$currency_type = $user_get_info->currency_type;
		$amount = $user_get_info->amount;
		$service_category = $user_get_info->service_category;
		$time = $user_get_info->time;
    $end_time = $user_get_info->end_time;
		$people = $user_get_info->people;
		$start_date = $user_get_info->start_date;
		$end_date = $user_get_info->end_date;
		$image = $user_get_info->image;
		$total = $user_get_info->total;

	}else {
		$gender = '';
	  $dob = '';
    $location = '';
    $address = '';
		$currency_type = '';
		$amount = '';
	  $service_category = '';
	  $time = '';
    $end_time = '';
	  $people = '';
	  $start_date = '';
	  $end_date = '';
	  $image = '';
		$total = '';
	}
 ?>
<div class="individual-section" style="background-image: url('../images/login-bg.png');">
	<div class="container">
		<div class="row hireService-section">

			<div class="tab-content">
				<div id="personal-info" class="tab-pane fade in active">
					<h3><strong>Booking Form</strong></h3>
					<h4>
						<span class="span-circle" style="background: #FF6D0B;">1</span>
						<span class="des-title">Personal Details</span>
						<span class="span-circle">2</span>
						<span class="des-title">Service Details</span>
						<span class="span-circle">3</span>
						<span class="des-title">Payment</span>
					</h4>
					<div class="col-md-offset-1 col-md-6 left-side">

						<div class="col-md-10 individual-form" style="padding-right: 0;">
              <div id="Individual_error" class="alert alert-danger alert-dismissible" style="display: none;">
							  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							  <span>Please fill all the fields</span>
							</div>
              <form class="">
							  	<div class="form-group">
							  		<label>Full Name</label>
							  		<div class="input-group">
							  	  		<span class="input-group-addon"><i class="fa fa-user-o"></i></span>
							  	  		<input type="text"  id="name" class="form-control" name="name" value="{{$user_get->f_name}}">
							  		</div>
							  	</div>
							  	<div class="form-group">
							  		<label>Mobile Number</label>
							  		<div class="input-group">
							  	  		<span class="input-group-addon"><i class="fa fa-mobile"></i></span>
							  	  		<input type="text"  id="phone" class="form-control" name="phone" value="{{$user_get->phone}}">
							  		</div>
							  	</div>
							  	<div class="form-group">
							  		<label>Email Address(optional)</label>
							  		<div class="input-group">
							    		<span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
							    		<input type="email" id="email" class="form-control" value="{{$user_get->email}}">
							  		</div>
							  	</div>
							  	<div class="row">
							  		<div class="form-group col-md-4" style="padding-right: 0;">
								  		<label>Gender</label>
								  		<div class="input-group">
								    		<span class="input-group-addon"><i class="fa fa-venus"></i></span>
								    		<select class="form-control" id="gender">
					    			      <option value="Male"  {{ $gender == 'Male' ? 'selected="selected"' : '' }}>Male</option>
								    			<option value="Female" {{ $gender == 'Female' ? 'selected="selected"' : '' }}>Female</option>
								    		</select>
								  		</div>
							  		</div>
								  	<div class="form-group col-md-8">
								  		<label>Date of Birth(optional)</label>
								  		<div class="input-group">
								    		<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
								    		<input type="date" id="dob" class="form-control" value="{{$dob}}">
								  		</div>
								  	</div>
							  	</div>

							  		<div class="form-group" style="padding-right: 0;">
								  		<label>Location</label>
								  		<div class="input-group">
								    		<span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
								    		<input type="text" id="locality1" class="form-control" value="{{$location}}">
								  		</div>
							  		</div>
								  	<div class="form-group">
								  		<label>Address</label>
								  		<div class="input-group">
								    		<span class="input-group-addon"><i class="fa fa-address-card"></i></span>
								    		<input type="text" id="address" class="form-control" value="{{$address}}">
								  		</div>
								  	</div>

							</form>
						</div>

					  	<div class="form-group col-md-offset-7 col-md-3 nxt-btn">
					  		<button type="submit" id="serviceUser_info" data-toggle="pill" class="btn login-btn btn-block btn-lg">Next <i class="fa fa-arrow-circle-o-right pull-right" aria-hidden="true"></i></button>
					  	</div>
					</div>
				</div>
				<div id="addworkers" class="tab-pane fade in">
					<h3>Help people to find the right person </h3>
					<h4>
						<span class="span-circle" style="background: #FF6D0B;">1</span>
						<span class="des-title">Personal details</span>
						<span class="span-circle" style="background: #FF6D0B;">2</span>
						<span class="des-title">Service Details</span>
						<span class="span-circle">3</span>
						<span class="des-title">Payment</span>
					</h4>
					<div class="col-md-offset-1 col-md-6 left-side">

						<div class="col-md-11 individual-form">
							<div id="User_detail_error" class="alert alert-danger alert-dismissible" style="display: none;">
							  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							  <span>Please fill all the fields</span>
							</div>
							<form class="">
								{{ csrf_field() }}
						  		<div class="row">
							  		<div class="form-group col-md-4">
				  		  		  		<label>Curreny</label>
		  		  		  				<select class="form-control" id="currency_type" onchange="get_val();">
														<option selected>Select Currency</option>
														<option value="AED" {{ $currency_type == 'AED' ? 'selected="selected"' : '' }}>AED</option>
								  					<option value="USD" {{ $currency_type == 'USD' ? 'selected="selected"' : '' }}>USD</option>
								  					<option value="PKR" {{ $currency_type == 'PKR' ? 'selected="selected"' : '' }}>PKR</option>

														<!-- <option value="AED">AED</option> -->
					  			    			<!-- <option value="USD">USD</option> -->
					  			    			<!-- <option value="PKR">PKR</option> -->

		  		  		  				</select>
				  		  	  		</div>
							  		<div class="form-group col-md-4">
				  		  		  		<label>Amount/Hour</label>
                          <div class="input-group">
                          <input type="text"  id="amount" class="form-control text-center" onchange="get_val();" name="amount" style="border-right: 0" value="{{$amount}}">
                          <span class="input-group-addon" style="border-left: 0;"><i class="fa fa-money" style="font-size:20px"></i></span>
                      </div>
				  		  	  		</div>
						  		</div>
						  		<div class="row">
				  			  		<div class="form-group col-md-10">
				  				  		<label>What you looking for</label>
				  			    		<select class="form-control" id="service_category">
													<option value="Electrical Service" {{ $service_category == 'Electrical Service' ? 'selected="selected"' : '' }}>Electrical Service</option>
													<option value="Mechanical Service" {{ $service_category == 'Mechanical Service' ? 'selected="selected"' : '' }}>Mechanical Service</option>
				  			    			<!-- <option>Electrical Service</option> -->
				  			    			<!-- <option>Mechanical Service</option> -->
				  			    		</select>
				  			  		</div>
				  			  		<div class="form-group col-md-2" style="padding-left: 0;">
				  			  			<label></label><br>
				  			  			<button type="submit" class="btn currny-btn" id="btn_amount" value="">AED 20/hr</button>
				  			  		</div>
						  		</div>
						  		<div class="row">
				  		  		  	<div class="form-group col-md-6">
				  		  		  		<label>Starting Time</label>
			  		  		    		<div class="input-group">
						  			  		<input type="time"  id="time" class="form-control text-center" name="time" min="0" style="border-right: 0" value="{{$time}}">
						  			  		<span class="input-group-addon" style="border-left: 0;"><i class="fa fa-clock-o"></i></span>
						  				</div>
				  		  		  	</div>
                        <div class="form-group col-md-6">
				  		  		  		<label>Ending Time</label>
			  		  		    		<div class="input-group">
						  			  		<input type="time"  id="end_time" class="form-control text-center" name="end_time" min="0" style="border-right: 0" value="{{$end_time}}">
						  			  		<span class="input-group-addon" style="border-left: 0;"><i class="fa fa-clock-o"></i></span>
						  				</div>
				  		  		  	</div>
						  		</div>

						  		<div class="row">
				  		  		  	<div class="form-group col-md-6">
				  		  		  		<label>Start Date</label>
			  		  		    		<div class="input-group">
						  			  		<input type="date"  id="start_date" class="form-control text-center" name="start_date" style="border-right: 0" value="{{$start_date}}">
						  			  		<span class="input-group-addon" style="border-left: 0;"><i class="fa fa-calendar"></i></span>
						  				</div>
				  		  		  	</div>
				  		  		  	<div class="form-group col-md-5" style="padding-left: 0;">
				  		  		  		<label>End Date</label>
			  		  		    		<div class="input-group">
						  			  		<input type="date" id="end_date" class="form-control" name="end_date" style="border-right: 0" value="{{$end_date}}">
			  		  		    			<span class="input-group-addon" style="border-left: 0;"><i class="fa fa-calendar"></i></span>
						  				</div>
				  		  		  	</div>
                        <!-- Image Loader -->
                        <div id="loaderIcon" class="loaderIcon_serviceUser" style="display: none;"><img src="{{ asset('images/Spinner.gif')}}" alt="">
                        </div>
                        <!-- Image Loader Ends -->
						  		</div>
							  	<dir class="row" style="padding-left: 0;">
                    <div class="form-group col-md-5" style="padding-left: 0; padding-right: 0;">
                      <label>How Many person</label>
                      <div class="input-group">
                        <span class="input-group-addon" style="border-right: 0;"><i class="fa fa-users"></i></span>
                      <input type="number"  id="people" class="form-control" name="people" onchange="get_val();" min="0" style="border-left: 0" value="{{$people}}">
                  </div>
                    </div>
							  		<div class="form-group col-md-6">
							  			<label>Upload Picture or Video(Optional)</label>
							  			<label class="btn btn-file" for="w_image">Upload Picture
							  				<input type="file" name="" id="w_image"><i class="fa fa-arrow-circle-o-up pull-right" aria-hidden="true" style="padding-top: 4px;"></i>
							  			</label>
							  		</div>
							  	</dir>
							</form>
						</div>
						<div class="row">
							<div class="form-group col-md-5 pull-left">
								<p><strong>Total:</strong> <input type="submit" class="total-count" id="total_show" value="{{$total}}" /></p>
							</div>
							<div class="form-group col-md-6 nxt-btn nxt-bttn">
								<a data-toggle="pill" href="#personal-info" class="btn back-btn btn-lg"><i class="fa fa-arrow-circle-o-left pull-left" aria-hidden="true"></i> Back </a>
					  			<a data-toggle="pill"  id="serviceUser_detail" class="btn save-btn btn-lg">Next <i class="fa fa-arrow-circle-o-right pull-right" aria-hidden="true"></i></a>
					  		</div>
						</div>
					</div>

				</div>
				<div id="location" class="tab-pane fade in">
					<h3>Help people to find the right person </h3>
						<h4>
							<span class="span-circle" style="background: #FF6D0B;">1</span>
							<span class="des-title">Personal details</span>
							<span class="span-circle" style="background: #FF6D0B;">2</span>
							<span class="des-title">Service Details</span>
							<span class="span-circle" style="background: #FF6D0B;">3</span>
							<span class="des-title">Payment</span>
						</h4>
					<div class="col-md-offset-1 col-md-6 left-side" style="padding-bottom: 00px;">

						<div class="col-md-11 individual-form" style="padding: 50px 0;">
							<h3 style="text-align: right;"><strong>Payment Option</strong></h3>
						</div>
						<div class="form-group col-md-offset-6 col-md-6 nxt-btn frnchs-nxtbtn">
							<a data-toggle="pill" href="#addworkers" class="btn back-btn btn-lg"><i class="fa fa-arrow-circle-o-left pull-left" aria-hidden="true"></i> Back </a>
				  			<a href="{{url('/accounts/userDashboard')}}" class="btn save-btn btn-lg">Next <i class="fa fa-arrow-circle-o-right pull-right" aria-hidden="true"></i></a>
				  		</div>
					</div>
				</div>
			</div>
			<div class="col-md-5 right-side" style="padding: 31px 0 40px 50px;">
				<div class="user-panel">
					<div class="user-section">
						<div class="user-info">
							<?php
							$re=0;
								/*count whole resume record is percentage */
								if($user_get->f_name != ''){
								$re += 10;
								}
								if($user_get->email != ''){
								$re += 10;
								// echo $re;
								}
								if($user_get->phone != ''){
								$re += 10;
								// echo $re;
								}
								if($dob != ''){
								$re += 10;
								// echo $re;
								}
								if($amount != ''){
								$re += 10;
								// echo $re;
								}
								if($time != ''){
								$re += 10;
								// echo $re;
								}
								if($people != ''){
								$re += 10;
								// echo $re;
								}
								if($start_date != ''){
								$re += 10;
								// echo $re;
								}
								if($end_date != ''){
								$re += 10;
								// echo $re;
								}

								if($image != ''){
								$re += 10;
								// echo $re;
								}

								$width = round($re);
								?>
							<div class="c100 p<?php echo $width; ?>">
								<span class="user-img">
									<?php if (!empty($image)): ?>
										<img src="{{url('img/serviceUser_profile/'.$image)}}" class="" alt="{{$image}}">
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
								<li><a href="{{url('/accounts/userDashboard')}}"><i class="fa fa-cog"></i>Account Settings</a></li>
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

<script>
	var get_val =  function () {
		var curr_val = $("#currency_type").val();
		var amount_val =	$('#amount').val();
		var people = $('#people').val();
		var total_amount = amount_val * people;
		$('#btn_amount').html(curr_val+" "+amount_val+"/hr");
		if (total_amount == 0) {
			$('#total_show').html(curr_val+" "+amount_val+"/-");
		}else {

			$('#total_show').val(curr_val+" "+total_amount+"/-");
		}
	}
</script>

<script>
$('#serviceUser_info').click(function (e) {
	e.preventDefault();
	// var form_value = $(this).serialize();
	var name = $('#name').val();
	var phone = $('#phone').val();
	var email = $('#email').val();
	var dob = $('#dob').val();
	var gender = $('#gender').val();
	var location = $('#locality1').val();
	var address = $('#address').val();
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
	form.append('gender', gender);
	form.append('location', location);
	form.append('address', address);
  if (name == "" || phone=="" || location=="" || address=="") {
    $("#Individual_error").show();

    setTimeout(function () {
      $("#Individual_error").hide();
      $('#personal-info').addClass('active');
    },3000);
    return 0;
  }

	$.ajax({
		type: 'post',
		data: form,
		cache: false,
		contentType: false,
		processData: false,
		url: "{{ url('serviceUser_personal_info') }}",
		success: function (response) {
			console.log(response);
			if (response == "successfully") {
				$('#personal-info').removeClass('active');
				$('#addworkers').addClass('active');
				if (currency_type !="" && amount !="") {
					var currency_data = '<?php echo json_encode($currency_type); ?>';
					var amount_data = '<?php echo json_encode($amount); ?>';
					var js_obj_data = JSON.parse(currency_data );
					var js_obj_data1 = JSON.parse(amount_data );
					// alert(js_obj_data1);
					$('#btn_amount').html(js_obj_data+" "+js_obj_data1+"/hr");
				}


			}
		}
	});
});
</script>



<script>
$('#serviceUser_detail').click(function (e) {
	e.preventDefault();
	// var form_value = $(this).serialize();
	var currency_type = $('#currency_type').val();
	var amount = $('#amount').val();
	var service_category = $('#service_category').val();
	var time = $('#time').val();
	var end_time = $('#end_time').val();
	var people = $('#people').val();
	var start_date = $('#start_date').val();
	var end_date = $('#end_date').val();
	var image = $('#w_image')[0].files[0];
	var total = $('#total_show').val();

	// console.log();
	// alert(total);
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});

	form = new FormData();
	form.append('currency_type', currency_type);
	form.append('amount', amount);
	form.append('service_category', service_category);
	form.append('time', time);
	form.append('end_time', end_time);
	form.append('people', people);
	form.append('start_date', start_date);
	form.append('end_date', end_date);
	form.append('image', image);
	form.append('total', total);
  if (amount == "" || time=="" || end_time=="" || people=="" || start_date=="" || end_date=="") {
    $("#User_detail_error").show();

    setTimeout(function () {
      $("#User_detail_error").hide();
      $('#addworkers').addClass('active');

    },3000);
    return 0;
  }
  if (image != "") {
    $('#loaderIcon').show();
  }

	$.ajax({
		type: 'post',
		data: form,
		cache: false,
		contentType: false,
		processData: false,
		url: "{{ url('serviceUser_detail_info') }}",
		success: function (response) {
			console.log(response);
			if (response == "successfully") {
        $('#loaderIcon').hide();
				$('#addworkers').removeClass('active');
				$('#location').addClass('active');

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
