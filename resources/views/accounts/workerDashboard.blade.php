@extends('layouts.app')
@section('content')

<div class="dashboard-section">
	<div class="container">
		<div class="">
			<h3>All work Dashboard <span class="pull-right"><i class="fa fa-user"></i></span></h3>
		</div>
		<div class="row worker-detail">
			@foreach ($userdata as  $value)
				<div class="col-md-2">
					<div class="worker-img">
					<?php if (!empty($value->w_image)): ?>
						<img src="{{ url('img/workers_profile/'.$value->w_image)}}">
							<?php else: ?>
								<img src="{{'../images/worker.jpg'}}">
						<?php endif; ?>
					</div>
					<div class="bottom-btn">
						<p><span>{!! $value->w_name!!}</span>
						<a href="{{url('account/franchise/'.$value->w_id)}}" class="btn btn-xs pull-right">Edit</a></p>
					</div>
				</div>


			@endforeach


			<!-- <img src="{{'../images/worker.jpg'}}"> -->
		</div>
		<div class="row">
			<div class="col-md-3 update-btn">
				<button class="btn btn-md">Add New</button>
			</div>
			<div class="col-md-offset-2 col-md-3 update-btn">
				<button class="btn btn-md save-btn" style="padding: 10px 10px 10px 30px;">Next <i class="fa fa-arrow-circle-o-right pull-right" aria-hidden="true" style="margin-top: 5px;"></i></button>
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