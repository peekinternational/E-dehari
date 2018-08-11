@extends('layouts.app')
@section('content')
<?php
	$f_name ='';
	$w_id ='';
	$skill ='';
	$phone ='';
	$gender ='';
	$dob ='';
	$experience ='';
	$location ='';
	$email ='';
	$image = '';
	if ($user_worker_info != null) {
		$f_name = $user_worker_info->w_name;
		$w_id = $user_worker_info->info_id;
		$skill = $user_worker_info->skill;
		$phone = $user_worker_info->w_phone;
		$gender = $user_worker_info->gender;
		$dob = $user_worker_info->dob;
		$experience = $user_worker_info->experience;
		$location = $user_worker_info->location;
		$email = $user_worker_info->w_email;
		$image = $user_worker_info->image;
	}else {
		$f_name ='';
		$w_id ='';
		$skill ='';
		$phone ='';
		$gender ='';
		$dob ='';
		$experience ='';
		$location ='';
		$email ='';
		$image = '';
	}
 ?>
<div class="individual-section">
	<div class="container">
		<div class="row">
				<div id="addworkers" class="tab-pane fade in">
					<div class="col-md-7  col-md-offset-3">
						<h3>Update worker profile </h3>
						<div class="col-md-9 individual-form">
							<div id="w_error" class="alert alert-danger alert-dismissible" style="display: none;">
							  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							  <span>You haven't change any thing</span>
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
											<input type="hidden" name="w_id" id="w_id" value="{{$w_id}}">
								  		<div class="input-group">
								  			<span class="input-group-addon"><i class="fa fa-user-o"></i></span>
								    		<input type="text" name="w_name" id="w_name" class="form-control worker_input" placeholder="Worker Name" value="{{$f_name}}">
								  		</div>
							  		</div>
										<div class="form-group col-md-6" style="padding-right: 0;">
								  		<label>Worker Designation</label>
											<div class="input-group">
								    		<span class="input-group-addon"><i class="fa fa-th-large"></i></span>
								    		<select class="form-control" id="w_designation">
													<?php foreach ($user_skill_info as $value): ?>
														<option value="{{$value->skill_name}}" {{ $value->skill_name == $skill ? 'selected="selected"' : '' }}>{{$value->skill_name}}</option>
													<?php endforeach; ?>
													<!-- <option value="Electician"  {{ $skill == 'Electician' ? 'selected="selected"' : '' }}>Electician</option>
								    			<option value="Plumber" {{ $skill == 'Plumber' ? 'selected="selected"' : '' }}>Plumber</option> -->
								    		</select>
								  		</div>
							  		</div>
							  	</div>
							  	<div class="form-group">
							  		<label>Valid Mobile</label>
							  		<div class="input-group">
							    		<span class="input-group-addon"><i class="fa fa-mobile"></i></span>
							    		<input type="text" name="w_mobile" id="w_mobile" class="form-control worker_input" placeholder="Mobile" value="{{$phone}}">
							  		</div>
							  	</div>
							  	<div class="form-group" style="padding-right: 0;" >
							  		<label>Email</label>
							  		<div class="input-group">
							    		<span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
							    		<input type="text" name="email" id="email" class="form-control worker_input" placeholder="Email" value="{{$email}}">
							  		</div>
							  	</div>
									<div class="row">
									<div class="form-group col-md-6">
										<label>Date of Birth(optional)</label>
										<div class="input-group">
											<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
											<input type="date" id="dob" class="form-control" value="{{$dob}}">
										</div>
									</div>
								  	<div class="form-group col-md-4">
								  		<label>Experience</label><br>
											<div class="input-group">
								    		<span class="input-group-addon"><i class="fa fa-flask"></i></span>
												<select class="form-control" id="experience">
													<option value="1 year"  {{ $experience == '1 year' ? 'selected="selected"' : '' }}>1 year</option>
													<option value="2 years" {{ $experience == '2 years' ? 'selected="selected"' : '' }}>2 years</option>
													<option value="3 years" {{ $experience == '3 years' ? 'selected="selected"' : '' }}>3 years</option>
													<option value="5 years" {{ $experience == '5 years' ? 'selected="selected"' : '' }}>5 years</option>
													<option value="10 years" {{ $experience == '10 years' ? 'selected="selected"' : '' }}>10 years</option>
												</select>
								    		<!-- <input type="text" name="experience" id="experience" class="form-control worker_input" placeholder="experience" value="{{$experience}}"> -->
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
											<input type="text" id="locality1" class="form-control" value="{{$location}}">
										</div>
									</div>

						  		<div class="form-group col-md-4 nxt-btn" style="padding-left: 0;">
						  			<button type="submit" id="wEdit_btn" class="btn login-btn btn-block">Update <i class="fa fa-arrow-circle-o-right pull-right" aria-hidden="true"></i></button>
						  		</div>
							</form>
						</div>

						<div class="form-group col-md-offset-5 col-md-5 nxt-btn">
							<a  href="{{url('/accounts/workerDashboard')}}" class="btn back-btn btn-lg"><i class="fa fa-arrow-circle-o-left pull-left" aria-hidden="true"></i> Back </a>
				  			<a  href="{{url('/accounts/workerDashboard')}}" class="btn save-btn btn-lg">Next <i class="fa fa-arrow-circle-o-right pull-right" aria-hidden="true"></i></a>
				  		</div>
					</div>
				</div>

		</div>
	</div>
</div>

<!-- Ajax for Franchise  -->

<script>
$('#wEdit_btn').click(function (e) {
	e.preventDefault();
	// var form_value = $(this).serialize();
	var id = $('#w_id').val();
	var w_name = $('#w_name').val();
	var w_designation = $('#w_designation').val();
	var w_mobile = $('#w_mobile').val();
	var w_gender = $('#w_gender').val();
	var email = $('#email').val();
	var dob = $('#dob').val();
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
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});

	form = new FormData();
	form.append('id', id);
	form.append('w_name', w_name);
	form.append('w_mobile', w_mobile);
	form.append('w_designation', w_designation);
	form.append('w_gender', w_gender);
	form.append('w_email', email);
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

			window.location.href = "{{url('/accounts/workerDashboard')}}"

    }else {
      $("#w_error").show();
      setTimeout(function () {
        $("#w_error").hide();
      },3000);
      return 0;
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
