@extends('layouts.app')
@section('content')
  
<div class="individual-section">
	<div class="container">
		<div class="row"> 
				
			<div class="tab-content">
				<div id="personal-info" class="tab-pane fade in active">
					<div class="col-md-7 left-side">
						<h3>Work Market</h3>
						<h4>
							<span class="span-circle" style="background: #FF6D0B;">1</span>
							<span class="des-title">Personal details</span>
							<span class="span-circle">2</span>
							<span class="des-title">Post Work in Market</span>
						</h4>
						<div class="col-md-9 individual-form">
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
					  		<a data-toggle="pill" href="#postWork" class="btn login-btn btn-block btn-lg">Next <i class="fa fa-arrow-circle-o-right pull-right" aria-hidden="true"></i></a>
					  	</div>
					</div>

					<div class="col-md-5 right-side" style="padding: 37px 0 85px 50px;">
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
				<div id="postWork" class="tab-pane fade">
					<div class="col-md-7 left-side">
						<h3>Work Market </h3>
						<h4>
							<span class="span-circle" style="background: #FF6D0B;">1</span>
							<span class="des-title">Personal details</span>
							<span class="span-circle" style="background: #FF6D0B;">2</span>
							<span class="des-title">Post Work in Market</span>
						</h4>
						<div class="col-md-9 individual-form">
							<form class="" style="padding-top: 20px;">
								 {{ csrf_field() }}
						  		<div class="form-group" style="padding-right: 0;">
							  		<label>Category Name</label>
						    		<input type="text" id="WorkerName" class="form-control" placeholder="Category Name">
						  		</div>
							  	<div class="form-group">
							  		<label>Describe in Details</label>
						    		<textarea class="form-control" rows="8" id="comment" style="height: auto;"></textarea>
							  	</div>
							</form>
						</div>
						<div class="form-group col-md-offset-5 col-md-6 nxt-btn">
							<a data-toggle="pill" href="#personal-info" class="btn back-btn btn-lg"><i class="fa fa-arrow-circle-o-left pull-left" aria-hidden="true"></i> Back </a>
							<a data-toggle="pill" href="#" class="btn save-btn btn-lg">Post <i class="fa fa-arrow-circle-o-right pull-right" aria-hidden="true"></i></a>
				  		</div>	
					</div>
					<div class="col-md-5 right-side" style="padding: 35px 0 62px 50px;">
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
			</div>
		</div>
	</div>
</div>
@endsection