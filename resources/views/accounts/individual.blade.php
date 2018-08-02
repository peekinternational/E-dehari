@extends('layouts.app')
@section('content')
<?php
	$dob = '';
  $nationality = '';
  $gender = '';
  $skill = '';
  $education = '';
  $experience = '';
  $availability = '';
  $currency_type = '';
  $amount = '';
  $wages = '';
  $location = '';
	if ($user_get_info != null) {
		$dob = $user_get_info->dob;
		$nationality = $user_get_info->nationality;
		$gender = $user_get_info->gender;
		$skill = $user_get_info->skill;
		$education = $user_get_info->education;
		$experience = $user_get_info->experience;
		$availability = $user_get_info->availability;
		$currency_type = $user_get_info->currency_type;
		$amount = $user_get_info->amount;
		$wages = $user_get_info->wages;
		$location = $user_get_info->location;

	}else {
		$dob= '';
    $nationality = '';
    $gender = '';
    $skill = '';
    $education = '';
    $experience = '';
    $availability = '';
    $currency_type = '';
    $amount = '';
    $wages = '';
    $location = '';
	}
 ?>
<div class="individual-section">
	<div class="container">
		<div class="row">

			<div class="tab-content">
				<div id="personal-info" class="tab-pane fade in active">
					<div class="col-md-7 left-side">
						<h3>Individual Work</h3>
						<h4>
							<span class="span-circle" style="background: #FF6D0B;">1</span>
							<span class="des-title">Personal details</span>
							<span class="span-circle">2</span>
							<span class="des-title">Professional experience</span>
							<span class="span-circle">3</span>
							<span class="des-title">Location</span>
						</h4>
						<div class="col-md-8 individual-form">
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
							  		<label>Nationality</label>
							  		<div class="input-group">
							    		<span class="input-group-addon"><i class="fa fa-globe"></i></span>
							    		<input type="text" id="nationality" class="form-control" value="{{$nationality}}">
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
							</form>
						</div>

					  	<div class="form-group col-md-offset-6 col-md-3 nxt-btn">
					  		<button type="submit" id="individual_info" data-toggle="pill"  class="btn login-btn btn-block btn-lg">Next <i class="fa fa-arrow-circle-o-right pull-right" aria-hidden="true"></i></button>
					  	</div>
					</div>

					<div class="col-md-5 right-side">
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
				<div id="professional" class="tab-pane fade in">
					<div class="col-md-7 left-side">
						<h3>Lets other know what you can do <br>
						Services on offer, field experience, and charging rate</h3>
						<h4>
							<span class="span-circle" style="background: #FF6D0B;">1</span>
							<span class="des-title">Personal details</span>
							<span class="span-circle" style="background: #FF6D0B;">2</span>
							<span class="des-title">Professional experience</span>
							<span class="span-circle">3</span>
							<span class="des-title">Location</span>
						</h4>
						<div class="col-md-9 individual-form">
              <div id="professional_error" class="alert alert-danger alert-dismissible" style="display: none;">
							  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							  <span>Please fill all the fields</span>
							</div>
							<form class="">
							  	<div class="form-group">
							  		<label>Skills</label>
							  	  	<select class="form-control" id="skill">
							  	  		<option value="Accountancy" {{ $skill == 'Accountancy' ? 'selected="selected"' : '' }}>Accountancy</option>
							  	  		<option value="Entrepreneurship" {{ $skill == 'Entrepreneurship' ? 'selected="selected"' : '' }}>Entrepreneurship</option>
							  	  	</select>
							  	</div>
							  	<div class="form-group">
							  		<label>Education</label>
							  		<div class="form-group">
							    		<input type="text" id="education" class="form-control" placeholder="please enter your education" value="{{$education}}">
							  		</div>
							  	</div>
							  	<div class="form-group">
							  		<label>Experience-500 character left</label>
							  		<div class="form-group">
							  			<textarea id="experience" class="form-control">{{$experience}}</textarea>
							  		</div>
							  	</div>
						  		<div class="form-group">
							  		<label>Availability</label>
							    		<input type="text" id="availability" class="form-control" placeholder="Please enter your available time of work" value="{{$availability}}">
						  		</div>
							  	<div class="row">
							  		<div class="form-group col-md-6" style="padding-right: 0;">
								  		<label>Rate</label>
								  		<div class="input-group">
								  			<span class="input-group-addon">
								  				<select class="rate-selection" id="currency_type">
								  					<option value="AED" {{ $currency_type == 'AED' ? 'selected="selected"' : '' }}>AED</option>
								  					<option value="USD" {{ $currency_type == 'USD' ? 'selected="selected"' : '' }}>USD</option>
								  					<option value="PKR" {{ $currency_type == 'PKR' ? 'selected="selected"' : '' }}>PKR</option>
								  				</select>
								  			</span>
								    		<input type="text" id="amount" class="form-control" value="{{$amount}}">
								  		</div>
							  		</div>
								  	<div class="form-group col-md-6">
								  		<label></label>
								  		<div class="input-group" style="margin-top: 5px;">
								    		<span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
								    		<input type="text" id="wages" class="form-control" placeholder="Per Hour" value="{{$wages}}">
								  		</div>
								  	</div>
							  	</div>

							  	<p>This is your estimating charging rate. You can always negitiate a different rate depending on the job.</p>
							</form>
						</div>
						<div class="form-group col-md-offset-5 col-md-5 nxt-btn" style="padding-left: 0;">
							<a data-toggle="pill" href="#personal-info" class="btn back-btn btn-lg"><i class="fa fa-arrow-circle-o-left pull-left" aria-hidden="true"></i> Back </a>
				  			<button type="submit" id="professional_info" data-toggle="pill" class="btn save-btn btn-lg" style="padding: 10px 3px 10px 30px;">Next <i class="fa fa-arrow-circle-o-right pull-right" aria-hidden="true"></i></a>
				  		</div>
					</div>
					<div class="col-md-5 right-side" style="padding: 57px 0 224px 50px;">
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
					<div class="col-md-7 left-side" style="padding-bottom: 50px;">
						<h3>Where are you located <br>
						Present,Pernament, and preferred working locations
						</h3>
						<h4>
							<span class="span-circle" style="background: #FF6D0B;">1</span>
							<span class="des-title">Personal details</span>
							<span class="span-circle" style="background: #FF6D0B;">2</span>
							<span class="des-title">Professional experience</span>
							<span class="span-circle" style="background: #FF6D0B;">3</span>
							<span class="des-title">Location</span>
						</h4>
						<div class="col-md-9 individual-form">
              <div id="location_error" class="alert alert-danger alert-dismissible" style="display: none;">
							  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							  <span>Please fill the location field</span>
							</div>
							<form class="">
							  	<div class="form-group">
							  		<label>Location</label>
							  		<div style="display: -webkit-box;">
						  				<div class="input-group" style="width: 65%;">
						  			  		<input type="text" class="form-control" name="location_input" style="border-right: 0" id="location_input" value="{{$location}}">
						  			  		<span class="input-group-addon" style="border-left: 0;"><i class="fa fa-search"></i></span>

						  				</div>
						  				<button class="btn map-btn"><i class="fa fa-map-marker"></i></button>
							  		</div>
							  	</div>
							  	<p>You can add upto three different locations. You must define a preferred location for work.Search result are Prioritized on preferred locations.</p>
							  	<div class="main">
					  				<iframe width="90%" height="250" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265&amp;output=embed"></iframe><br><small><a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265" style="font-family: 'Open Sans', sans-serif;color:#555555;text-shadow:0 1px 0 #ffffff; text-align:left;font-size:12px;padding: 5px;">View Larger Map</a></small>
					  			</div>
							</form>
						</div>
						<div class="form-group col-md-offset-5 col-md-7 nxt-btn">
							<a data-toggle="pill" href="#professional" class="btn back-btn btn-lg"><i class="fa fa-arrow-circle-o-left pull-left" aria-hidden="true"></i> Back </a>
							<!-- <a href="#" class="btn finish-btn btn-lg">Finish <i class="fa fa-arrow-circle-o-right pull-right" aria-hidden="true"></i></a> -->
				  			<button type="submit" id="location_info"  class="btn save-btn btn-lg">Save <i class="fa fa-floppy-o pull-right" aria-hidden="true"></i></button>
				  		</div>
					</div>
					<div class="col-md-5 right-side" style="padding: 62px 0 251px 50px;">
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

<script>
$('#individual_info').click(function (e) {
	e.preventDefault();
	// var form_value = $(this).serialize();
	var name = $('#name').val();
	var nationality = $('#nationality').val();
	var phone = $('#phone').val();
	var email = $('#email').val();
	var dob = $('#dob').val();
	var gender = $('#gender').val();
	console.log(email, dob);
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});

	form = new FormData();
	form.append('name', name);
	form.append('nationality', nationality);
	form.append('phone', phone);
	form.append('email', email);
	form.append('dob', dob);
	form.append('gender', gender);
  if (name == "" || nationality =="" || phone=="") {
    $("#Individual_error").show();

    setTimeout(function () {
      $("#Individual_error").hide();
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
		url: "{{ url('Ind_personal_info') }}",
		success: function (response) {
			console.log(response);
			if (response == "successfully") {
				$('#personal-info').removeClass('active');
				$('#professional').addClass('active');
			}
		}
	});
});
</script>


<script>
$('#professional_info').click(function (e) {
	e.preventDefault();
	// var form_value = $(this).serialize();
	var skill = $('#skill').val();
	var education = $('#education').val();
	var experience = $('#experience').val();
	var availability = $('#availability').val();
	var currency_type = $('#currency_type').val();
	var amount = $('#amount').val();
	var wages = $('#wages').val();
  if (education == "" || experience =="" || availability=="" || amount=="" || wages=="") {
		$("#professional_error").show();

		setTimeout(function () {
			$("#professional_error").hide();
      $('#location').addClass('active');
		},3000);
		return 0;
	}
	console.log(email, dob);
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});

	form = new FormData();
	form.append('skill', skill);
	form.append('education', education);
	form.append('experience', experience);
	form.append('availability', availability);
	form.append('currency_type', currency_type);
	form.append('amount', amount);
	form.append('wages', wages);

	$.ajax({
		type: 'post',
		data: form,
		cache: false,
		contentType: false,
		processData: false,
		url: "{{ url('Ind_professional_info') }}",
		success: function (response) {
			console.log(response);
			if (response == "successfully") {
				$('#professional').removeClass('active');
				$('#location').addClass('active');
			}
		}
	});
});
</script>



<script>
$('#location_info').click(function (e) {
	e.preventDefault();
	// var form_value = $(this).serialize();
	var location = $('#location_input').val();
  // alert(location);
  if (location == "") {
		$("#location_error").show();

		setTimeout(function () {
			$("#location_error").hide();
		},3000);
		return 0;
	}
  window.location.href ="/";
  
	console.log(email, dob);
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});

	form = new FormData();
	form.append('location', location);

	$.ajax({
		type: 'post',
		data: form,
		cache: false,
		contentType: false,
		processData: false,
		url: "{{ url('Ind_location_info') }}",
		success: function (response) {
			console.log(response);
			if (response == "successfully") {
				// window.location.href = "/";
			}
		}
	});
});
</script>
@endsection
