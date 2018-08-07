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
<div class="sub-header">
	<div class="container">
		<div class="row">
			<div class="col-md-4 welcome-title">
				<h3>Welcome to E-dehari</h3>
			</div>
			<div class="col-md-offset-4 col-md-4 profile-complete" style="padding: 15px;">
				<!-- <h4 class="text-right" id="name">{{$user_get->f_name}} <i class="fa fa-edit" id="edit"></i></h4> -->
				<h4 class="text-right" id="show_name">{{$user_get->f_name}}  &nbsp;<i class="fa fa-edit" id="edit"></i></h4>
				<div id="editName" style="display: none; margin-right: 0px;">
					<input type="text" name="" id="f_name" value="{{$user_get->f_name}}">
				</div>
				<p class="text-right">Id: 2018-05-001</p>
			</div>
		</div>
	</div>
</div>

<div class="dashboard-section">
	<div class="container">
		<div class="row dashboard-tabs">
		<div class="col-md-offset-4 col-md-4">
			<ul class="nav nav-pills">
				<li class="active"><a data-toggle="pill" href="#individual">Profile Details </a></li>
				<li><a data-toggle="pill" href="#franchise">Current Jobs</a></li>
				<li><a data-toggle="pill" href="#company">Completed Jobs</a></li>
			</ul>
		</div>
			<div class="col-md-8">
				<div id="serviceUser_error" class="alert alert-danger alert-dismissible" style="display: none;">
					<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					<span>Please fill all the fields</span>
				</div>
				<div id="serviceUser_success" class="alert alert-success alert-dismissible" style="display: none;">
					<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					<span>Information Successfully Updated</span>
				</div>
				<div class="edution-detail">
					<div class="title">
						<span>Email: </span>
					</div>
					<div class="description">
						<span id="email-des"><strong>{{$user_get->email}}</strong></span>
						<input type="text" name="" id="edit-mailbox" class="form-control" style="display: none;" value="{{$user_get->email}}">
						&nbsp;<span> <i class="fa fa-edit" id="edit-email"></i></span>
					</div>
				</div>
				<div class="edution-detail">
					<div class="title">
						<span>Hours: </span>
					</div>
					<div class="description">

						<span id="hours-des"><?php echo date("g:i a",strtotime($time)); ?> to <?php echo date("g:i a",strtotime($end_time)); ?> </span>
						<div class="row">
							<div class="col-md-6">
								<input type="time" name="" id="edit-hourbox" class="form-control" style="display: none;" value="{{$time}}">
							</div>
							<div class="col-md-5">
								<input type="time" name="" id="edit-hourbox2" class="form-control" style="display: none;" value="{{$end_time}}">
							</div>
							&nbsp; &nbsp;<span> <i class="fa fa-edit" id="edit-hours"></i></span>
						</div>
					</div>
				</div>
				<div class="edution-detail">
					<div class="title">
						<span>Days: </span>

					</div>
					<div class="description">
						<span id="rate-des"></span>
						<div class="row">
						<div class="col-md-5">
							<input type="date" name="" id="edit-ratebox" class="form-control" style="display: none;" value="{{$start_date}}">
						</div>
						<div class="col-md-6">
							<input type="date" name="" id="edit-ratebox2" class="form-control" style="display: none;" value="{{$end_date}}">
						</div>
						&nbsp; &nbsp; <span> <i class="fa fa-edit" id="edit-rate"></i></span>
						</div>
					</div>
				</div>
				<div class="edution-detail">
					<div class="title">
						<span>Location: </span>
					</div>
					<div class="description">
						<span id="location-des">{{$location}}</span>
						<input type="" name="" class="form-control" id="edit-loctbox" style="display: none;" value="{{$location}}">
					</div>
					<div class="edit-icon">
						<span> <i class="fa fa-edit" id="edit-location"></i></span>
					</div>
				</div>
				<div class="edution-detail">
					<div class="title">
						<span>Address: </span>
					</div>
					<div class="description">
						<span id="address-des">{{$address}}</span>
						<input type="text" name="" id="edit-addrsbox" class="form-control" style="display: none;" value="{{$address}}">
					</div>
					<div class="edit-icon">
						<span> <i class="fa fa-edit" id="edit-address"></i></span>
					</div>
				</div>
			</div>
			<div class="col-md-offset-2 col-md-2" style="text-align: -webkit-right; padding-right: 0;">
				<div class="profile-img">
					<?php if (!empty($image)): ?>
						<img src="{{url('img/serviceUser_profile/'.$image)}}" class="eo-c-logo" alt="{{$image}}">
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
				<button class="btn btn-md" id="user_update_btn">Update</button>
			</div>
		</div>
	</div>
</div>
<script>

	$(document).ready(function(){
		var start =  $('#edit-ratebox').val();
		var strt_d = new Date(start);

		var end = $('#edit-ratebox2').val();
		var end_d = new Date(end);
		// alert(end_d);
		var diff = new Date(end_d - strt_d);
		// alert(diff);
		var days = diff/1000/60/60/24;
		// alert(days);
		$('#rate-des').html(days +" "+ 'days');

        $("#edit").click(function(){
        	$("#editName").css({'display':'block'});
        	$("#name").css({'display':'none'});
        });

        $("#saveBtn").click(function(){
        	$("#editName").css({'display':'none'});
        	$("#name").css({'display':'block'});
        });

        $("#edit-email").click(function(){
        	$("#email-des").css({'display':'none'});
        	$("#edit-mailbox").css({'display':'block'});
        });
        $("#edit-hours").click(function(){
        	$("#hours-des").css({'display':'none'});
        	$("#edit-hourbox").css({'display':'block'});
        	$("#edit-hourbox2").css({'display':'block'});
        });

        $("#edit-rate").click(function(){
        	$("#rate-des").css({'display':'none'});
        	$("#edit-ratebox").css({'display':'block'});
        	$("#edit-ratebox2").css({'display':'block'});
        });

        $("#edit-location").click(function(){
        	$("#location-des").css({'display':'none'});
        	$("#edit-loctbox").css({'display':'block'});
        });

        $("#edit-address").click(function(){
        	$("#address-des").css({'display':'none'});
        	$("#edit-addrsbox").css({'display':'block'});
        });
    });
</script>

<script>
$('#user_update_btn').click(function (e) {
	e.preventDefault();
	// var form_value = $(this).serialize();
	var name = $('#f_name').val();
	var email = $('#edit-mailbox').val();
	var time = $('#edit-hourbox').val();
	var end_time = $('#edit-hourbox2').val();
	var start_date = $('#edit-ratebox').val();
	var end_date = $('#edit-ratebox2').val();
	var location = $('#edit-loctbox').val();
	var address = $('#edit-addrsbox').val();
	// console.log(email, dob);
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});

	form = new FormData();
	form.append('name', name);
	form.append('email', email);
	form.append('time', time);
	form.append('end_time', end_time);
	form.append('start_date', start_date);
	form.append('end_date', end_date);
	form.append('location', location);
	form.append('address', address);
  if (email == "" || time =="" || end_time=="" || start_date=="" || end_date=="" || location=="" || address=="") {
    $("#serviceUser_error").show();

    setTimeout(function () {
      $("#serviceUser_error").hide();
    },3000);
    return 0;
  }

	$.ajax({
		type: 'post',
		data: form,
		cache: false,
		contentType: false,
		processData: false,
		url: "{{ url('srvUser_dashboard_info') }}",
		success: function (response) {
			console.log(response);
			$("#f_name").css({'display':'none'});
			$("#show_name").css({'display':'block'});
			$("#show_name").html(name+   ' &nbsp;<i class="fa fa-edit" id="edit"></i>');
			if (response == "successfully") {
				$("#serviceUser_success").show();
				setTimeout(function () {
		      $("#serviceUser_success").hide();
		    },3000);
				var start =  $('#edit-ratebox').val();
				var strt_d = new Date(start);

				var end = $('#edit-ratebox2').val();
				var end_d = new Date(end);
				// alert(end_d);
				var diff = new Date(end_d - strt_d);
				// alert(diff);
				var days = diff/1000/60/60/24;
				// alert(days);
				$('#rate-des').css({'display':'block'});
				$("#edit-ratebox").hide();
				$("#edit-ratebox2").hide();
				$('#rate-des').html(days +" "+ 'days');

			}
		}
	});
});
</script>


<script>
$(document).on('change','#edit-Img',function(e){
	e.preventDefault();
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
		url: "{{ url('SrvUser_dashboard_img') }}",
		success: function (response) {
			console.log(response);
			if (response) {
				$('.eo-c-logo').attr('src','<?= url('img/serviceUser_profile')?>/'+response);
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

@endsection
