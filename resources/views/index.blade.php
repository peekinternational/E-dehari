@extends('layouts.app')
@section('content')
<div class="container-fluid" style="padding: 0;">
	<div class="banner-image">
		<div class="col-md-offset-2 col-md-4 serch-box">
			<h3>Find the <span style="color:orange">right person</span></h3>
			<div class="serch-section">
				<form class="" action="{{url('search')}}" method="post">
					{{csrf_field()}}
				<input type="search" name="skill"  class="form-control">
				<button type="submit" class="btn serch-btn">Search<i class="fa fa-arrow-circle-o-right pull-right" aria-hidden="true"></i></button>
				</form>
			</div>
		</div>
	</div>
</div>

<div class="features">
	<div class="container">
		<div class="row center-xs center-sm center-md center-lg">
			<div class ="col-xs-12 col-sm-4 col-md-4 col-lg-4">
				<p class="feature1">
					<span><img src="{{('images/search.png')}}"></span>
					<span>Start by searching for what do you need</span>
				</p>
			</div>
			<div class ="col-xs-12 col-sm-4 col-md-4 col-lg-4 text-center">
				<p class="feature1">
					<span><img src="{{('images/list.png')}}"></span>
					<span>Choose from a list of avaible workers </span></p>
				</div>
				<div class ="col-xs-12 col-sm-4 col-md-4 col-lg-4 text-center" style="border: 0;">
					<p class="feature1">
						<span><img src="{{('images/relations.png')}}"></span>
						<span>And Finally,become a work yourself!</span>
					</p>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<!-- <div class="row">
			<h3 class="text-center"><strong>Service Categories</strong></h3>
			<div class="slider-1 col-md-12 col-xs-10">
				<div id="1" class="carousel slide" data-ride="carousel">

					<div class="carousel-inner">
      @foreach($user_skill_info->chunk(3) as $key => $chunk)
						<div id="c{{$key}}" class="item active{{$key}}">

							<div class="row mobile-slider1">
								 @foreach ($chunk as $value)

								<div class="col-sm-4 col-xs-4">
									<div class="col-item box-shadow">
										<div class="photo">
											<img src="{{('images/skill_images/'.$value->skill_image)}}" class="img-responsive" alt="a" />
											<a href="{{url('/accounts/skill_search/'.$value->skill_name)}}"> <span class="service-heading">{{$value->skill_name}}</span></a>
										</div>
									</div>
								</div>
									 @endforeach

							</div>

						</div>
          @endforeach


					</div>
					<div class="slider-controls">
						<a class="left fa fa-chevron-left btn" href="#1"
						data-slide="prev"></a>
						<a class="right fa fa-chevron-right btn" href="#1"
						data-slide="next"></a>
					</div>
				</div>
			</div>
		</div> -->
		<div class="row">
			<h3 class="text-center"><strong>Service Categories</strong></h3>
			@foreach($user_skill_info->chunk(3) as $key => $chunk)
						<div id="c{{$key}}" class="item active{{$key}}">

							<div class="row mobile-slider1">
								 @foreach ($chunk as $value)

								<div class="col-sm-4 col-xs-4">
									<div class="col-item box-shadow">
										<div class="photo">
											<img src="{{('images/skill_images/'.$value->skill_image)}}" class="img-responsive" alt="a" />
											<a href="{{url('/accounts/skill_search/'.$value->skill_name)}}"> <span class="service-heading">{{$value->skill_name}}</span></a>
										</div>
									</div>
								</div>
									 @endforeach
							</div>
							<br>
						</div>
          @endforeach

		</div>
		<div class="row">
			<h3 class="text-center"><strong>Work Categories</strong></h3>
			<div class="slider-1 col-md-12 col-xs-12">


				<div id="2" class="carousel slide" data-ride="carousel">
					<!-- Wrapper for slides -->
					<div class="carousel-inner">
						<div class="item active">
							<div class="row mobile-slider1">
								<div class="col-sm-4 col-xs-4">
									<div class="col-item box-shadow">
										<div class="photo">
											<img src="{{('images/electrical.png')}}" class="img-responsive" alt="a" />
											<span class="service-heading">Electrical Services</span>
										</div>
									</div>
								</div>
								<div class="col-sm-4 col-xs-4">
									<div class="col-item">
										<div class="photo">
											<img src="{{('images/plumber.png')}}" class="img-responsive" alt="a" />
											<span class="service-heading">Plumbing Services</span>
										</div>
									</div>
								</div>
								<div class="col-sm-4 col-xs-4">
									<div class="col-item">
										<div class="photo">
											<img src="{{('images/dryClean.png')}}" class="img-responsive" alt="a" />
											<span class="service-heading">Dry Clean Services</span>
										</div>
									</div>
								</div>
							</div>
						</div>


						<div class="item">
							<div class="row mobile-slider2">
								<div class="col-sm-4 col-xs-4">
									<div class="col-item">
										<div class="photo">
											<img src="{{('images/electrical.png')}}" class="img-responsive" alt="a" />
											<span class="service-heading">Electrical Services</span>
										</div>
									</div>
								</div>
								<div class="col-sm-4 col-xs-4">
									<div class="col-item">
										<div class="photo">
											<img src="{{('images/plumber.png')}}" class="img-responsive" alt="a" />
											<span class="service-heading">Plumbing Services</span>
										</div>
									</div>
								</div>
								<div class="col-sm-4 col-xs-4">
									<div class="col-item">
										<div class="photo">
											<img src="{{('images/dryClean.png')}}" class="img-responsive" alt="a" />
											<span class="service-heading">Dry Clean Services</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="slider-controls">
						<a class="left fa fa-chevron-left btn" href="#2"
						data-slide="prev"></a>
						<a class="right fa fa-chevron-right btn" href="#2"
						data-slide="next"></a>
					</div>
				</div>
			</div>
		</div>
		<div class="row" style="padding-bottom: 44px;">
			<h3 class="text-center"><strong>Work Market</strong></h3>
			<div class="slider-1 col-md-12 col-xs-10">
				<div id="3" class="carousel slide" data-ride="carousel">
					<!-- Wrapper for slides -->
					<div class="carousel-inner">
						<div class="item active">
							<div class="row mobile-slider1">
								<div class="col-sm-4 col-xs-4">
									<div class="col-item box-shadow">
										<div class="photo">
											<img src="{{('images/electrical.png')}}" class="img-responsive" alt="a" />
											<span class="service-heading">Electrical Services</span>
										</div>
									</div>
								</div>
								<div class="col-sm-4 col-xs-4">
									<div class="col-item">
										<div class="photo">
											<img src="{{('images/plumber.png')}}" class="img-responsive" alt="a" />
											<span class="service-heading">Plumbing Services</span>
										</div>
									</div>
								</div>
								<div class="col-sm-4 col-xs-4">
									<div class="col-item">
										<div class="photo">
											<img src="{{('images/dryClean.png')}}" class="img-responsive" alt="a" />
											<span class="service-heading">Dry Clean Services</span>
										</div>
									</div>
								</div>
							</div>
						</div>


						<div class="item">
							<div class="row mobile-slider2">
								<div class="col-sm-4 col-xs-4">
									<div class="col-item">
										<div class="photo">
											<img src="{{('images/electrical.png')}}" class="img-responsive" alt="a" />
											<span class="service-heading">Electrical Services</span>
										</div>
									</div>
								</div>
								<div class="col-sm-4 col-xs-4">
									<div class="col-item">
										<div class="photo">
											<img src="{{('images/plumber.png')}}" class="img-responsive" alt="a" />
											<span class="service-heading">Plumbing Services</span>
										</div>
									</div>
								</div>
								<div class="col-sm-4 col-xs-4">
									<div class="col-item">
										<div class="photo">
											<img src="{{('images/dryClean.png')}}" class="img-responsive" alt="a" />
											<span class="service-heading">Dry Clean Services</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="slider-controls">
						<a class="left fa fa-chevron-left btn" href="#3"
						data-slide="prev"></a>
						<a class="right fa fa-chevron-right btn" href="#3"
						data-slide="next"></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<script>
$(document).ready(function(){

        if($("#c0").hasClass("active0")){
        $("#c0").addClass("active");

        }

});
</script>
@endsection
