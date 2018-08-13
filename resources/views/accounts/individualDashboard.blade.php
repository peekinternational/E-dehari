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
  $image = '';
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
		$image = $user_get_info->image;

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
    $image = '';
	}

	$re=0;
		/*count whole resume record is percentage */
		if($user_get->f_name != ''){
		$re += 8.444;
		}
		if($user_get->email != ''){
		$re += 8.444;
		// echo $re;
		}
		if($user_get->phone != ''){
		$re += 8.444;
		// echo $re;
		}
		if($dob != ''){
		$re += 8.444;
		// echo $re;
		}
		if($nationality != ''){
		$re += 8.333;
		// echo $re;
		}
		if($skill != ''){
		$re += 8.333;
		// echo $re;
		}
		if($education != ''){
		$re += 8.333;
		// echo $re;
		}
		if($experience != ''){
		$re += 8.333;
		// echo $re;
		}
		if($availability != ''){
		$re += 8.333;
		// echo $re;
		}
		if($amount != ''){
		$re += 8.333;
		// echo $re;
		}
		if($wages != ''){
		$re += 8.333;
		// echo $re;
		}
		if($location != ''){
		$re += 8.333;
		// echo $re;
		}
		if($image != ''){
		$re += 8.333;
		// echo $re;
		}

		$width = round($re);
		?>
<div class="sub-header">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<h3>Welcome to E-dehari</h3>
				<h4 class="text-left" id="show_name">{{$user_get->f_name}}  &nbsp;<i class="fa fa-edit" id="edit"></i></h4>
				<div id="editName" style="display: none;">
					<input type="text" name="" id="f_name" value="{{$user_get->f_name}}">
					<!-- <input type="submit" name="" value="Save" id="saveBtn"> -->
				</div>
				<p>Id: 2018-05-001</p>
			</div>
			<div class="col-md-4 profile-complete">
				<h5>Profile Completion <?php echo $width; ?>%</h5>
			</div>
			<div class="col-md-4 profile-complete">
				<button class="btn bg-black-btn"><i class="fa fa-edit"></i> Complete your verifications</button>
			</div>
		</div>
	</div>
</div>

<div class="dashboard-section">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div id="Individual_error" class="alert alert-danger alert-dismissible" style="display: none;">
					<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					<span>Please fill all the fields</span>
				</div>
				<div id="Individual_success" class="alert alert-success alert-dismissible" style="display: none;">
					<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					<span>Information Successfully Updated</span>
				</div>
				<div class="edution-detail">
					<div class="title">
						<span>Email: </span>
					</div>
					<div class="description">
						<span id="email-des"><strong>{{$user_get->email}}</strong></span>
						<input type="text" name="email" id="edit-mailbox" class="form-control" style="display: none;" value="{{$user_get->email}}">
					</div>
					&nbsp;<span> <i class="fa fa-edit" id="edit-email"></i></span>
				</div>
				<!-- <div class="edution-detail">
					<div class="title">
						<span>Phone: </span>
					</div>
					<div class="description">
						<span id="phone-des"><strong>{{$user_get->phone}}</strong></span>
						<input type="text" name="phone" id="edit-phonebox" class="form-control" style="display: none;" value="{{$user_get->phone}}">
					</div>
					&nbsp;<span> <i class="fa fa-edit" id="edit-phonebox"></i></span>
				</div> -->
				<div class="edution-detail">
					<div class="title">
						<span>Education: </span>
					</div>
					<div class="description">
						<span id="education-des">{{$education}}</span>
						<input type="text" name="" class="form-control" id="edit-edubox" style="display: none;" value="{{$education}}">
					</div>
					<div class="edit-icon">
						&nbsp;<span> <i class="fa fa-edit" id="edit-education"></i></span>
					</div>
				</div>
				<div class="edution-detail">
					<div class="title">
						<span>Experienced: </span>
					</div>
					<div class="description">
						<span id="expernce-des">{{$experience}}</span>
						<select class="form-control" style="display: none;" id="edit-expbox">
							<option value="1 year"  {{ $experience == '1 year' ? 'selected="selected"' : '' }}>1 year</option>
							<option value="2 years" {{ $experience == '2 years' ? 'selected="selected"' : '' }}>2 years</option>
							<option value="3 years" {{ $experience == '3 years' ? 'selected="selected"' : '' }}>3 years</option>
							<option value="5 years" {{ $experience == '5 years' ? 'selected="selected"' : '' }}>5 years</option>
							<option value="10 years" {{ $experience == '10 years' ? 'selected="selected"' : '' }}>10 years</option>
						</select>
						<!-- <input type="text" name="" id="edit-expbox" class="form-control" style="display: none;" value="{{$experience}}"> -->
					</div>
					<div class="edit-icon">
						&nbsp;<span> <i class="fa fa-edit" id="edit-experience"></i></span>
					</div>
					<!-- Image Loader -->
					<div id="loaderIcon" class="loaderIcon" style="display: none;"><img src="{{ asset('images/Spinner.gif')}}" alt="">
					</div>
					<!-- Image Loader Ends -->
				</div>
				<div class="edution-detail">
					<div class="title">
						<span>Skills: </span>
					</div>
					<div class="description">
						<span id="skills-des">{{$skill}}</span>
						<input type="text" name="" id="edit-skillbox" class="form-control" style="display: none;" value="{{$skill}}">
					</div>
					<div class="edit-icon">
						&nbsp;<span> <i class="fa fa-edit" id="edit-skills"></i></span>
					</div>
				</div>
				<div class="edution-detail">
					<div class="title">
						<span>Availabilty: </span>
					</div>
					<div class="description">
						<span id="avail-des">{{$availability}}</span>
						<input type="text" name="" class="form-control" id="edit-availbox" style="display: none;" value="{{$availability}}">
					</div>
						&nbsp;<span> <i class="fa fa-edit" id="edit-avail"></i></span>
				</div>
				<div class="edution-detail">
					<div class="title">
						<span>Rates: </span>
					</div>
					<div class="description">
						<span id="rate-des">{{$amount}} {{$currency_type}} For {{$wages}}</span>
						<div class="row">
							<div class="col-md-4">
						<input type="text" name="" id="edit-amount" class="form-control" style="display: none;" value="{{$amount}}">
						</div>
						<div class="col-md-4">
								<select class="rate-selection form-control" id="edit-currency_type" style="display: none;">
									<option value="AED" {{ $currency_type == 'AED' ? 'selected="selected"' : '' }}>AED</option>
									<option value="USD" {{ $currency_type == 'USD' ? 'selected="selected"' : '' }}>USD</option>
									<option value="PKR" {{ $currency_type == 'PKR' ? 'selected="selected"' : '' }}>PKR</option>
								</select>
							</div>
							<div class="col-md-4">
						<input type="text" name="" id="edit-wages" class="form-control" style="display: none;" value="{{$wages}}">
						</div>
						</div>
					</div>
					&nbsp;<span> <i class="fa fa-edit" id="edit-rate"></i></span>
				</div>
				<div class="edution-detail">
					<div class="title">
						<span>Location: </span>
					</div>
					<div class="description">
						<span id="location-des">{{$location}}</span>
						<input type="text" name="" class="form-control" id="locality1" style="display: none;" value="{{$location}}">
					</div>
					<div class="edit-icon">
						&nbsp;<span> <i class="fa fa-edit" id="edit-location"></i></span>
					</div>
				</div>
			</div>
			<div class="col-md-offset-2 col-md-2" style="text-align: -webkit-right; padding-right: 0;">
				<div class="profile-img">
					<?php if (!empty($image)): ?>
						<img src="{{url('img/Individual_Profile/'.$image)}}" class="eo-c-logo" alt="{{$image}}">
						<?php else: ?>
							<img src="{{url('/images/profile.jpeg')}}" class="eo-c-logo">
					<?php endif; ?>
					<p class="icon">
						<label for="edit-Img" class="label label-success">
							<input type="file" name="" id="edit-Img" class="change_profile">
							Edit <i class="fa fa-edit"></i>
						</label>
						<span class="pull-right"><i class="fa fa-check-circle" aria-hidden="true"></i></span>
					</p>
				</div>
				<p class="text-center"><strong>Change Avatar</strong></p>
			</div>
			<div class="col-md-12 update-btn">
				<button type="submit" id="ind_update_btn" class="btn btn-md">Update</button>
			</div>
		</div>
	</div>
</div>
<script>
	$(document).ready(function(){
        $("#edit").click(function(){
        	$("#editName").css({'display':'block'});
        	$("#show_name").css({'display':'none'});
					$("#f_name").css({'display':'block'});
        });

        $("#saveBtn").click(function(){
        	$("#editName").css({'display':'none'});
        	$("#name").css({'display':'block'});
        });

        $("#edit-education").click(function(){
        	$("#education-des").css({'display':'none'});
        	$("#edit-edubox").css({'display':'block'});
        });

        $("#edit-email").click(function(){
        	$("#email-des").css({'display':'none'});
        	$("#edit-mailbox").css({'display':'block'});
        });

        $("#edit-experience").click(function(){
        	$("#expernce-des").css({'display':'none'});
        	$("#edit-expbox").css({'display':'block'});
        });

        $("#edit-skills").click(function(){
        	$("#skills-des").css({'display':'none'});
        	$("#edit-skillbox").css({'display':'block'});
        });

        $("#edit-avail").click(function(){
        	$("#avail-des").css({'display':'none'});
        	$("#edit-availbox").css({'display':'block'});
        });

        $("#edit-hours").click(function(){
        	$("#hours-des").css({'display':'none'});
        	$("#edit-hourbox").css({'display':'block'});
        });

        $("#edit-rate").click(function(){
        	$("#rate-des").css({'display':'none'});
        	$("#edit-amount").css({'display':'block'});
        	$("#edit-currency_type").css({'display':'block'});
        	$("#edit-wages").css({'display':'block'});
        });

        $("#edit-location").click(function(){
        	$("#location-des").css({'display':'none'});
        	$("#locality1").css({'display':'block'});
        });

        $("#edit-address").click(function(){
        	$("#address-des").css({'display':'none'});
        	$("#edit-addrsbox").css({'display':'block'});
        });
    });
</script>

<script>
$('#ind_update_btn').click(function (e) {
	e.preventDefault();
	// var form_value = $(this).serialize();
	var name = $('#f_name').val();
	var email = $('#edit-mailbox').val();
	var education = $('#edit-edubox').val();
	var experience = $('#edit-expbox').val();
	var skill = $('#edit-skillbox').val();
	var availability = $('#edit-availbox').val();
	var amount = $('#edit-amount').val();
	var currency_type = $('#edit-currency_type').val();
	var wages = $('#edit-wages').val();
	var location = $('#locality1').val();
	// console.log(email, dob);
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});

	form = new FormData();
	form.append('name', name);
	form.append('email', email);
	form.append('education', education);
	form.append('experience', experience);
	form.append('skill', skill);
	form.append('availability', availability);
	form.append('amount', amount);
	form.append('currency_type', currency_type);
	form.append('wages', wages);
	form.append('location', location);
  if (email == "" || education =="" || experience=="" || skill=="" || availability=="" || amount=="" || wages=="" || location=="") {
    $("#Individual_error").show();

    setTimeout(function () {
      $("#Individual_error").hide();
    },3000);
    return 0;
  }

	$.ajax({
		type: 'post',
		data: form,
		cache: false,
		contentType: false,
		processData: false,
		url: "{{ url('Ind_dashboard_info') }}",
		success: function (response) {
			console.log(response);
			$("#f_name").css({'display':'none'});
			$("#show_name").css({'display':'block'});
			$("#show_name").html(name+   ' &nbsp;<i class="fa fa-edit" id="edit"></i>');
			if (response == "successfully") {
				$("#Individual_success").show();
				setTimeout(function () {
		      $("#Individual_success").hide();
		    },3000);

			}
		}
	});
});
</script>


<script>
$(document).on('change','#edit-Img',function(e){
	e.preventDefault();
	$('#loaderIcon').show();
	if ($('#edit-Img').val()) {
var image = $('.change_profile')[0].files[0];

	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});

	form = new FormData();
	form.append('image', image);


	$.ajax({
		type: 'post',
		data: form,
		cache: false,
		contentType: false,
		processData: false,
		url: "{{ url('Ind_dashboard_img') }}",
		success: function (response) {
			console.log(response);
			if (response) {
				$('#loaderIcon').hide();
				$('.eo-c-logo').attr('src','<?= url('img/Individual_Profile')?>/'+response);
				$("#Individual_success").show();
				setTimeout(function () {
		      $("#Individual_success").hide();
		    },3000);

			}
		}
	});
}
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
