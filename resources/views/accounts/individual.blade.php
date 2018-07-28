@extends('layouts.app')
@section('content')
  
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
							<form class="">
							  	<div class="form-group">
							  		<label>Full Name</label>
							  		<div class="input-group">
							  	  		<span class="input-group-addon"><i class="fa fa-user-o"></i></span>
							  	  		<input type="text"  id="name" class="form-control" name="name">
							  		</div>
							  	</div>
							  	<div class="form-group">
							  		<label>Nationality</label>
							  		<div class="input-group">
							    		<span class="input-group-addon"><i class="fa fa-mobile"></i></span>
							    		<input type="text" id="nationality" class="form-control">
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
					  		<a data-toggle="pill" href="#professional" class="btn login-btn btn-block btn-lg">Next <i class="fa fa-arrow-circle-o-right pull-right" aria-hidden="true"></i></a>
					  	</div>
					</div>

					<div class="col-md-5 right-side">
						<div class="user-panel">
								<span class="user-bg"><i class="fa fa-user"></i></span>
							<div class="user-section">
								<div class="arrow-up"></div>
								<div class="user-info">
									<div class="user-img">
										<img src="{{'images/user.jpg'}}">
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
							<form class="">
							  	<div class="form-group">
							  		<label>Skills</label>
							  	  	<select class="form-control">
							  	  		<option>Accountancy</option>
							  	  		<option>Entrepreneurship</option>
							  	  	</select>
							  	</div>
							  	<div class="form-group">
							  		<label>Education</label>
							  		<div class="form-group">
							    		<input type="text" id="education" class="form-control" placeholder="please enter your education">
							  		</div>
							  	</div>
							  	<div class="form-group">
							  		<label>Experience-500 character left</label>
							  		<div class="form-group">
							  			<textarea id="experience" class="form-control"></textarea>
							  		</div>
							  	</div>
						  		<div class="form-group">
							  		<label>Availability</label>
							    		<input type="text" id="gender" class="form-control" placeholder="Please enter your available time of work">
						  		</div>
							  	<div class="row">
							  		<div class="form-group col-md-6" style="padding-right: 0;">
								  		<label>Rate</label>
								  		<div class="input-group">
								  			<span class="input-group-addon">
								  				<select class="rate-selection">
								  					<option>AED</option>	
								  					<option>USD</option>	
								  				</select>
								  			</span>
								    		<input type="text" id="gender" class="form-control">
								  		</div>
							  		</div>
								  	<div class="form-group col-md-6">
								  		<label></label>
								  		<div class="input-group" style="margin-top: 5px;">
								    		<span class="input-group-addon"><i class="fa fa-clock-o"></i></span>
								    		<input type="text" id="dob" class="form-control" placeholder="Per Hour">
								  		</div>
								  	</div>
							  	</div>

							  	<p>This is your estimating charging rate. You can always negitiate a different rate depending on the job.</p>
							</form>
						</div>
						<div class="form-group col-md-offset-6 col-md-3 nxt-btn">
				  			<a data-toggle="pill" href="#location" class="btn login-btn btn-block btn-lg">Next <i class="fa fa-arrow-circle-o-right pull-right" aria-hidden="true"></i></a>
				  		</div>	
					</div>
					<div class="col-md-5 right-side" style="padding: 50px 0 186px 50px;">
						<div class="user-panel">
								<span class="user-bg"><i class="fa fa-user"></i></span>
							<div class="user-section">
								<div class="arrow-up"></div>
								<div class="user-info">
									<div class="user-img">
										<img src="{{'images/user.jpg'}}">
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
							<form class="">
							  	<div class="form-group">
							  		<label>Full Name</label>
							  		<div style="display: -webkit-box;">
						  				<div class="input-group" style="width: 65%;">
						  			  		<input type="text"  id="name" class="form-control" name="name" style="border-right: 0">
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
						<div class="form-group col-md-offset-4 col-md-5 nxt-btn">
							<a href="#" class="btn finish-btn btn-lg">Finish <i class="fa fa-arrow-circle-o-right pull-right" aria-hidden="true"></i></a>
				  			<a href="#" class="btn save-btn btn-lg">Save <i class="fa fa-floppy-o pull-right" aria-hidden="true"></i></a>
				  		</div>	
					</div>
					<div class="col-md-5 right-side" style="padding: 52px 0 218px 50px;">
						<div class="user-panel">
								<span class="user-bg"><i class="fa fa-user"></i></span>
							<div class="user-section">
								<div class="arrow-up"></div>
								<div class="user-info">
									<div class="user-img">
										<img src="{{'images/user.jpg'}}">
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