@extends('layouts.app')
@section('content')
<?php

	$w_name ='';
	$w_id ='';
	$w_designation ='';
	$w_mobile ='';
	$w_gender ='';
	$w_image = '';
	if ($user_worker_info != null) {
		$w_name = $user_worker_info->w_name;
		$w_id = $user_worker_info->w_id;
		$w_designation = $user_worker_info->w_designation;
		$w_mobile = $user_worker_info->w_mobile;
		$w_gender = $user_worker_info->w_gender;
		$w_image = $user_worker_info->w_image;
	}else {
		$w_id ='';
		$w_name ='';
		$w_designation ='';
		$w_mobile ='';
		$w_gender ='';
		$w_image = '';
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
								    		<input type="text" name="w_name" id="w_name" class="form-control worker_input" placeholder="Worker Name" value="{{$w_name}}">
								  		</div>
							  		</div>
								  	<div class="form-group col-md-6">
								  		<label>Worker Designation</label>
								  		<div class="input-group">
								    		<span class="input-group-addon"><i class="fa fa-user-o"></i></span>
								    		<input type="text" name="w_designation" id="w_designation" class="form-control worker_input" placeholder="Worker Designation" value="{{$w_designation}}">
								  		</div>
								  	</div>
							  	</div>
							  	<div class="form-group">
							  		<label>Valid Mobile</label>
							  		<div class="input-group">
							    		<span class="input-group-addon"><i class="fa fa-mobile"></i></span>
							    		<input type="text" name="w_mobile" id="w_mobile" class="form-control worker_input" placeholder="Mobile" value="{{$w_mobile}}">
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
	var w_image = $('#w_image')[0].files[0];
	if (w_name == "" || w_designation =="" || w_mobile=="") {
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
@endsection
