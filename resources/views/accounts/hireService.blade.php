@extends('layouts.app')
@section('content')
  
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
							<form class="">
								{{ csrf_field() }}
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

					  	<div class="form-group col-md-offset-7 col-md-3 nxt-btn">
					  		<a data-toggle="pill" href="#addworkers" class="btn login-btn btn-block btn-lg">Next <i class="fa fa-arrow-circle-o-right pull-right" aria-hidden="true"></i></a>
					  	</div>
					</div>

					<div class="col-md-5 right-side" style="padding: 20px 0 65px 50px;">
						<div class="user-panel">
							<div class="user-section">
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
							<form class="">
								{{ csrf_field() }}
						  		<div class="row">
							  		<div class="form-group col-md-4">
				  		  		  		<label>Curreny</label>
		  		  		  				<select class="form-control">
		  		  		  					<option>AED</option>	
		  		  		  					<option>USD</option>	
		  		  		  					<option>PKR</option>	
		  		  		  				</select>
				  		  	  		</div>
						  		</div>
						  		<div class="row">
				  			  		<div class="form-group col-md-10">
				  				  		<label>What you looking for</label>
				  			    		<select class="form-control">
				  			    			<option>Electrical Service</option>
				  			    			<option>Mechanical Service</option>
				  			    		</select>
				  			  		</div>
				  			  		<div class="form-group col-md-2" style="padding-left: 0;">
				  			  			<label></label><br>
				  			  			<button class="btn currny-btn">AED 20/hr</button>
				  			  		</div>
						  		</div>
						  		<div class="row">
				  		  		  	<div class="form-group col-md-6">
				  		  		  		<label>Please mention Booking time</label>
			  		  		    		<div class="input-group">
						  			  		<input type="number"  id="bookingTime" class="form-control text-center" name="bookingTime" min="0" style="border-right: 0">
						  			  		<span class="input-group-addon" style="border-left: 0;"><i class="fa fa-clock-o"></i></span>
						  				</div>
				  		  		  	</div>
				  		  		  	<div class="form-group col-md-5" style="padding-left: 0; padding-right: 0;">
				  		  		  		<label>How Many person</label>
			  		  		    		<div class="input-group">
			  		  		    			<span class="input-group-addon" style="border-right: 0;"><i class="fa fa-users"></i></span>
						  			  		<input type="number"  id="name" class="form-control" name="name" min="0" style="border-left: 0">
						  				</div>
				  		  		  	</div>
						  		</div>
						  		<div class="row">
				  		  		  	<div class="form-group col-md-6">
				  		  		  		<label>Start Date</label>
			  		  		    		<div class="input-group">
						  			  		<input type="date"  id="bookingTime" class="form-control text-center" name="startDate" style="border-right: 0">
						  			  		<span class="input-group-addon" style="border-left: 0;"><i class="fa fa-calendar"></i></span>
						  				</div>
				  		  		  	</div>
				  		  		  	<div class="form-group col-md-5" style="padding-left: 0;">
				  		  		  		<label>End Date</label>
			  		  		    		<div class="input-group">
						  			  		<input type="date" id="endDate" class="form-control" name="endDate" style="border-right: 0">
			  		  		    			<span class="input-group-addon" style="border-left: 0;"><i class="fa fa-calendar"></i></span>
						  				</div>
				  		  		  	</div>
						  		</div>
							  	<dir class="row" style="padding-left: 0;">
							  		<div class="form-group col-md-6">
							  			<label>Upload Picture or Video(Optional)</label>
							  			<label class="btn btn-file" for="fileBtn">Upload Picture
							  				<input type="file" name="" id="fileBtn"><i class="fa fa-arrow-circle-o-up pull-right" aria-hidden="true" style="padding-top: 4px;"></i>
							  			</label>
							  		</div>
							  	</dir>
							</form>
						</div>
						<div class="row">
							<div class="form-group col-md-5 pull-left">
								<p><strong>Total:</strong> <label class="total-count">AED 60/-</label></p>
							</div>
							<div class="form-group col-md-6 nxt-btn nxt-bttn">
								<a data-toggle="pill" href="#personal-info" class="btn back-btn btn-lg"><i class="fa fa-arrow-circle-o-left pull-left" aria-hidden="true"></i> Back </a>
					  			<a data-toggle="pill" href="#location" class="btn save-btn btn-lg">Next <i class="fa fa-arrow-circle-o-right pull-right" aria-hidden="true"></i></a>
					  		</div>
						</div>	
					</div>
					<div class="col-md-5 right-side" style="padding: 31px 0 40px 50px;">
						<div class="user-panel">
							<div class="user-section">
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
				  			<a href="#" class="btn save-btn btn-lg">Next <i class="fa fa-arrow-circle-o-right pull-right" aria-hidden="true"></i></a>
				  		</div>	
					</div>
					<div class="col-md-5 right-side" style="padding: 10px 0 18px 50px;">
						<div class="user-panel">
							<div class="user-section">
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
@endsection