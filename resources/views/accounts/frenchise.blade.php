@extends('layouts.app')
@section('content')
  
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
							<form class="">
							  	<div class="form-group">
							  		<label>Full Name</label>
							  		<div class="input-group">
							  	  		<span class="input-group-addon"><i class="fa fa-user-o"></i></span>
							  	  		<input type="text"  id="name" class="form-control" name="name">
							  		</div>
							  	</div>
							  	<div class="form-group">
							  		<label>Valid Mobile</label>
							  		<div class="input-group">
							    		<span class="input-group-addon"><i class="fa fa-mobile"></i></span>
							    		<input type="text" id="mobile" class="form-control">
							  		</div>
							  	</div>
							  	<div class="form-group">
							  		<label>Email Address(optional)</label>
							  		<div class="input-group">
							    		<span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
							    		<input type="text" id="nationality" class="form-control">
							  		</div>
							  	</div>
							  	<div class="row">
							  		<div class="form-group col-md-3" style="padding-right: 0;">
								  		<label>Gender</label>
								  		<div class="input-group">
								    		<span class="input-group-addon"><i class="fa fa-venus"></i></span>
								    		<input type="text" id="gender" class="form-control">
								  		</div>
							  		</div>
								  	<div class="form-group col-md-9">
								  		<label>Date of Birth(optional)</label>
								  		<div class="input-group">
								    		<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
								    		<input type="text" id="dob" class="form-control">
								  		</div>
								  	</div>
							  	</div>
							</form>
						</div>

					  	<div class="form-group col-md-offset-6 col-md-3 nxt-btn">
					  		<a data-toggle="pill" href="#addworkers" class="btn login-btn btn-block btn-lg">Next <i class="fa fa-arrow-circle-o-right pull-right" aria-hidden="true"></i></a>
					  	</div>
					</div>

					<div class="col-md-5 right-side" style="padding: 37px 0 65px 50px;">
						<div class="user-panel">
								<span class="user-bg"><i class="fa fa-user"></i></span>
							<div class="user-section">
								<div class="arrow-up"></div>
								<div class="user-info">
									<div class="user-img">
										<img src="{{'../images/user.jpg'}}">
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
							<form class="" style="padding-top: 20px;">
							  	<div class="row">
							  		<div class="form-group col-md-6" style="padding-right: 0;">
								  		<label>Worker Name</label>
								  		<div class="input-group">
								  			<span class="input-group-addon"><i class="fa fa-user-o"></i></span>
								    		<input type="text" id="WorkerName" class="form-control" placeholder="Worker Name">
								  		</div>
							  		</div>
								  	<div class="form-group col-md-6">
								  		<label>Worker Designation</label>
								  		<div class="input-group">
								    		<span class="input-group-addon"><i class="fa fa-user-o"></i></span>
								    		<input type="text" id="designation" class="form-control" placeholder="Worker Designation">
								  		</div>
								  	</div>
							  	</div>
							  	<div class="form-group">
							  		<label>Valid Mobile</label>
							  		<div class="input-group">
							    		<span class="input-group-addon"><i class="fa fa-mobile"></i></span>
							    		<input type="text" id="mobile" class="form-control" placeholder="Mobile">
							  		</div>
							  	</div>
							  	<div class="row">
							  		<div class="form-group col-md-4" style="padding-right: 0;">
								  		<label>Gender</label>
								  		<div class="input-group">
								    		<span class="input-group-addon"><i class="fa fa-venus"></i></span>
								    		<input type="text" id="gender" class="form-control">
								  		</div>
							  		</div>
								  	<div class="form-group col-md-4">
								  		<label>Worker Picture</label><br>
								  		<label class="btn btn-file" for="fileBtn">Upload Picture
								  			<input type="file" name="" id="fileBtn">
								  		</label>
								  	</div>
							  	</div>

						  		<div class="form-group col-md-4 nxt-btn" style="padding-left: 0;">
						  			<button class="btn login-btn btn-block">Add New <i class="fa fa-arrow-circle-o-right pull-right" aria-hidden="true"></i></button>
						  		</div>
							</form>
						</div>
						<div class="form-group col-md-offset-6 col-md-3 nxt-btn">
				  			<a data-toggle="pill" href="#location" class="btn login-btn btn-block btn-lg">Next <i class="fa fa-arrow-circle-o-right pull-right" aria-hidden="true"></i></a>
				  		</div>	
					</div>
					<div class="col-md-5 right-side" style="padding: 31px 0 40px 50px;">
						<div class="user-panel">
								<span class="user-bg"><i class="fa fa-user"></i></span>
							<div class="user-section">
								<div class="arrow-up"></div>
								<div class="user-info">
									<div class="user-img">
										<img src="{{'../images/user.jpg'}}">
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
							  	  	<select class="form-control">
							  	  		<option>Electrical Service</option>
							  	  		<option>Car Service</option>
							  	  	</select>
							  	</div>
				  		  	  	<div class="row">
				  		  		  	<div class="form-group col-md-5">
				  		  		  		<label>How much we will charge</label>
			  		  		    		<input type="text" id="chargeRate" class="form-control" placeholder="Charge Rate">
				  		  		  	</div>
				  		  		  	<div class="form-group col-md-4" style="padding-left: 0;">
				  		  		  		<label>Hours/Days</label>
			  		  		    		<input type="text" id="days" class="form-control" placeholder="Hours/Days">
				  		  		  	</div>
				  		  	  		<div class="form-group col-md-3" style="padding-left: 0;">
				  		  		  		<label>Rate</label>
		  		  		  				<select class="form-control">
		  		  		  					<option>AED</option>	
		  		  		  					<option>USD</option>	
		  		  		  					<option>PKR</option>	
		  		  		  				</select>
				  		  	  		</div>
				  		  	  	</div>
				  		  	  	<div class="form-group col-md-4 nxt-btn" style="padding-left: 0;">
						  			<button class="btn login-btn btn-block">Add New </button>
						  		</div>
							</form>
						</div>
						<div class="form-group col-md-offset-7 col-md-3 nxt-btn frnchs-nxtbtn">
				  			<a href="#" class="btn save-btn btn-lg btn-block">Next <i class="fa fa-arrow-circle-o-right pull-right" aria-hidden="true"></i></a>
				  		</div>	
					</div>
					<div class="col-md-5 right-side" style="padding: 31px 0 18px 50px;">
						<div class="user-panel">
								<span class="user-bg"><i class="fa fa-user"></i></span>
							<div class="user-section">
								<div class="arrow-up"></div>
								<div class="user-info">
									<div class="user-img">
										<img src="{{'../images/user.jpg'}}">
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
@endsection