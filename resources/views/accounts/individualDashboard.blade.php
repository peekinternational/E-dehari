@extends('layouts.app')
@section('content')

<div class="sub-header">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<h3>Welcome to E-dehari</h3>
				<h4 class="text-left" id="name">Zeeshan Masood <i class="fa fa-edit" id="edit"></i></h4>
				<div id="editName" style="display: none;">
					<input type="text" name="">
					<input type="submit" name="" value="Save" id="saveBtn">
				</div>
				<p>Id: 2018-05-001</p>
			</div>
			<div class="col-md-4 profile-complete">
				<h5>Profile Completion 70%</h5>
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
				<div class="edution-detail">
					<div class="title">
						<span>Email: </span>
					</div>
					<div class="description">
						<span id="email-des"><strong>zee@gamil.com</strong></span>
						<input type="text" name="" id="edit-mailbox" class="form-control" style="display: none;">
						&nbsp;<span> <i class="fa fa-edit" id="edit-email"></i></span>
					</div>
				</div>
				<div class="edution-detail">
					<div class="title">
						<span>Education: </span>
					</div>
					<div class="description">
						<span id="education-des">Lorem Ipsum is simply dummy text of the printing and type setting industry. </span>
						<input type="text" name="" class="form-control" id="edit-edubox" style="display: none;">
					</div> 
					<div class="edit-icon">
						<span> <i class="fa fa-edit" id="edit-education"></i></span>
					</div>
				</div>
				<div class="edution-detail">
					<div class="title">
						<span>Experienced: </span>
					</div>
					<div class="description">
						<span id="expernce-des">Lorem Ipsum is simply dummy text of the printing and type setting industry. </span>
						<input type="text" name="" id="edit-expbox" class="form-control" style="display: none;">
					</div> 
					<div class="edit-icon">
						<span> <i class="fa fa-edit" id="edit-experience"></i></span>
					</div>
				</div>
				<div class="edution-detail">
					<div class="title">
						<span>Skills: </span>
					</div>
					<div class="description">
						<span id="skills-des">Lorem Ipsum is simply dummy text of the printing and type setting industry. </span>
						<input type="text" name="" id="edit-skillbox" class="form-control" style="display: none;">
					</div> 
					<div class="edit-icon">
						<span> <i class="fa fa-edit" id="edit-skills"></i></span>
					</div>
				</div>
				<div class="edution-detail">
					<div class="title">
						<span>Availabilty: </span>
					</div>
					<div class="description">
						<span id="avail-des">Yes </span>
						<input type="text" name="" class="form-control" id="edit-availbox" style="display: none;">
						&nbsp;<span> <i class="fa fa-edit" id="edit-avail"></i></span>
					</div> 
				</div>
				<div class="edution-detail">
					<div class="title">
						<span>Hours: </span>
					</div>
					<div class="description">
						<span id="hours-des">9am to 6pm </span>
						<input type="text" name="" id="edit-hourbox" class="form-control" style="display: none;">
						&nbsp;<span> <i class="fa fa-edit" id="edit-hours"></i></span>
					</div> 
				</div>
				<div class="edution-detail">
					<div class="title">
						<span>Rates: </span>
					</div>
					<div class="description">
						<span id="rate-des">500 per Day</span>
						<input type="text" name="" id="edit-ratebox" class="form-control" style="display: none;">
						&nbsp;<span> <i class="fa fa-edit" id="edit-rate"></i></span>
					</div>
				</div>
				<div class="edution-detail">
					<div class="title">
						<span>Location: </span>
					</div>
					<div class="description">
						<span id="location-des">Rawalpindi, Punkab, Pakistan</span>
						<input type="" name="" class="form-control" id="edit-loctbox" style="display: none;">
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
						<span id="address-des">United Plaza Shamsabad Rawapindi</span>
						<input type="text" name="" id="edit-addrsbox" class="form-control" style="display: none;">
					</div> 
					<div class="edit-icon">
						<span> <i class="fa fa-edit" id="edit-address"></i></span>
					</div>
				</div>
			</div>
			<div class="col-md-offset-2 col-md-2" style="text-align: -webkit-right; padding-right: 0;">
				<div class="profile-img">
					<img src="{{'/images/profile.jpeg'}}">
					<p class="icon">
						<label for="edit-Img">
							<input type="file" name="" id="edit-Img">
							Edit <i class="fa fa-edit"></i>
						</label> 
						<span class="pull-right"><i class="fa fa-check-circle" aria-hidden="true"></i></span>
					</p>
				</div>
				<p class="text-center"><strong>Change Avatar</strong></p>
			</div>
			<div class="col-md-12 update-btn">
				<button class="btn btn-md">Update</button>
			</div>		
		</div>
	</div>
</div>
<script>
	$(document).ready(function(){
        $("#edit").click(function(){
        	$("#editName").css({'display':'block'});
        	$("#name").css({'display':'none'});
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
        	$("#edit-ratebox").css({'display':'block'});
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

@endsection