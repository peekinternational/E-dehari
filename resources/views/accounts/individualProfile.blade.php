@extends('layouts.app')
@section('content')
<?php

	$f_name ='';
	$w_id ='';
	$skill ='';
	$phone ='';
	$gender ='';
	$image = '';
	if ($user_worker_info != null) {
		$f_name = $user_worker_info->f_name;
		$w_id = $user_worker_info->w_id;
		$skill = $user_worker_info->skill;
		$phone = $user_worker_info->phone;
		$gender = $user_worker_info->gender;
		$image = $user_worker_info->image;
	}else {
		$f_name ='';
		$w_id ='';
		$skill ='';
		$phone ='';
		$gender ='';
		$image = '';
	}
 ?>
<div class="dashboard-section">
	<div class="container">
		<div class="row">
			<div class="col-md-7">
				<h3 class="profile-title"><strong>Worker</strong></h3>
				<div class="row" style="margin-top: -16px;">
					<div class="col-md-3 view-profile-img">
						<div class="profile-img">
							<img src="{{'/images/profile.jpeg'}}">
							<p class="icon">
								<span class="pull-right"><i class="fa fa-check-circle" aria-hidden="true"></i></span>
							</p>
						</div>
						<br>
						<button class="btn btn-block hire-btn"><i class="fa fa-search pull-left"></i> Hire Now</button>
					</div>
					<div class="col-md-9" style="border-right: 1px solid #FF6D0B;">
						<h4 class="text-left" style="margin-top: 5px;"><strong>{{$f_name}}</strong></h4>
						<p><i class="fa fa-user"></i>&nbsp; 15 june 1998</p>
						<p><i class="fa fa-th-large"></i>&nbsp; Developer</p>
						<p><i class="fa fa-flask"></i>&nbsp; Experience: 2 Years</p>
						<p><i class="fa fa-user-circle-o"></i>&nbsp; Hired: 0, No Answer: 0</p>
						<p><i class="fa fa-venus-double"></i>&nbsp; Male</p>
						<p><i class="fa fa-map-marker"></i>&nbsp; Rawalpindi Pakistan</p>
					</div>
				</div>
			</div>
			<div class="col-md-2 verifications">
				<h4 class="text-center"><strong>Verfications</strong></h4>
				<p style="padding-top: 25px;"><i class="fa fa-envelope"></i> &nbsp;<span><strong>Email</strong></span><span><i class="fa fa-check-circle pull-right" style="color: green;"></i></span></p>
				<p><i class="fa fa-phone"></i> &nbsp;<span><i class="fa fa-times-circle pull-right" style="color: red;"></i></span></p>
				<p><i class="fa fa-id-card"></i> &nbsp;<span><i class="fa fa-check-circle pull-right" style="color: green;"></i></span></p>
			</div>
		</div>
		<div class="row reveiw-section">
			<div class="col-md-12">
				<h5><i class="fa fa-thumbs-up"></i>&nbsp;  Reveiws (0)</h5>
				<span>There is no review for Zeeshan</span>
			</div>
			<div class="col-md-12">
				<h5><strong><i class="fa fa-file-text" aria-hidden="true"></i>&nbsp;  <a href="">Report this user</a></strong></h5>
			</div>
		</div>
	</div>
</div>
@endsection
