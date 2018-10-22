@extends('layouts.app')
@section('content')

<div class="dashboard-section">
	<div class="container">
		<div class="">
			<?php
			$key='';
			$message='';
			if ($keyword !=''){
				$key = $keyword;
			}
			else {
				$key= $sk;
			}
			if (count($userdata) == 0) {
				// $message='';
				$message='No Record Found';
			}
// echo $userdata; die;
		?>

			<h3>Your search result "{{$key}}" <span class="pull-right"><i class="fa fa-user"></i></span></h3>
		</div>
		<div class="row worker-detail">
			<h3>{{$message}}</h3>
			@foreach ($userdata as  $value)
			<?php $image ='';
				if ($value->image ) {
					$image = url('img/Individual_Profile/'.$value->image);
				}else {
					$image = url('images/worker.jpg');
				}
			 ?>
				<div class="col-md-2">
					<div class="worker-img">

						<a href="{{url('/accounts/individualProfile/'.$value->info_id)}}"><img src="{{$image}}"></a>
					</div>
					<div class="bottom-btn">
						<p><span>{!! $value->w_name!!}</span>
						<a href="{{url('/accounts/individualProfile/'.$value->info_id)}}" class="btn btn-xs pull-right">View</a></p>
					</div>
				</div>
			@endforeach
		</div>

		<div class="row">
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
