@extends('admin.layouts.app')
@section('content')
<div class="main-panel">
<div class="content">
	<div class="container-fluid">
		<div class="row">
				<div class="col-md-12">
					<div class="card">


					<div class="col-md-7  col-md-offset-3">
						<h3>Update worker profile </h3>
						<div class="col-md-9 individual-form">
							<div id="w_error" class="alert alert-danger alert-dismissible" style="display: none;">
							  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							  <span>You haven't change any thing</span>
							</div>
							<div id="worker_success" class="alert alert-success alert-dismissible" style="display: none;">
								<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
								<span>Information Updated successfully</span>
							</div>
							<form class="" action="#" method="" style="padding-top: 20px;">
                				{{csrf_field()}}
							  	<div class="row">
							  		<div class="form-group col-md-6" style="padding-right: 0;">
								  		<label>Name</label>
											<!-- <input type="hidden" name="w_id" id="w_id" value=""> -->
								  		<div class="input-group">
								  			<span class="input-group-addon"><i class="fa fa-user-o"></i></span>
								    		<input type="text" name="w_name" id="w_name" class="form-control worker_input" placeholder="Worker Name" value="{{$user_get->f_name}}">
								  		</div>
							  		</div>
							  	</div>
							  	<div class="form-group">
							  		<label>Valid Mobile</label>
							  		<div class="input-group">
							    		<span class="input-group-addon"><i class="fa fa-mobile"></i></span>
							    		<input type="text" name="w_mobile" id="w_mobile" class="form-control worker_input" placeholder="Mobile" value="{{$user_get->phone}}">
							  		</div>
							  	</div>
							  	<div class="form-group" style="padding-right: 0;" >
							  		<label>Email</label>
							  		<div class="input-group">
							    		<span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
							    		<input type="text" name="email" id="email" class="form-control worker_input" placeholder="Email" value="{{$user_get->email}}">
							  		</div>
							  	</div>
						  		<div class="form-group col-md-4 nxt-btn" style="padding-left: 0;">
						  			<button type="submit" id="wEdit_btn" class="btn login-btn btn-block">Update <i class="fa fa-arrow-circle-o-right pull-right" aria-hidden="true"></i></button>
						  		</div>
							</form>
						</div>

						<div class="form-group col-md-offset-5 col-md-5 nxt-btn">
							<a  href="{{url('/accounts/workerDashboard')}}" class="btn back-btn"><i class="fa fa-arrow-circle-o-left pull-left" aria-hidden="true"></i> Back </a>
				  			<a  href="{{url('/accounts/workerDashboard')}}" class="btn save-btn">Next <i class="fa fa-arrow-circle-o-right pull-right" aria-hidden="true"></i></a>
				  		</div>
					</div>
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
	var email = $('#email').val();
	var dob = $('#dob').val();
	var experience = $('#experience').val();
	var location = $('#locality1').val();
	var w_image = $('#w_image')[0].files[0];
	if (w_name == "" || w_designation =="" || w_mobile=="" || dob=="" || experience=="" || location=="") {
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
	form.append('w_mobile', w_mobile);
	form.append('w_designation', w_designation);
	form.append('w_gender', w_gender);
	form.append('w_email', email);
	form.append('dob',dob);
	form.append('experience',experience);
	form.append('location',location);
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


<script>
function initializeAutocomplete(){
  var input = document.getElementById('locality1');
  // var options = {
  //   types: ['(regions)'],
  //   componentRestrictions: {country: "IN"}
  // };
  var options = {}

  var autocomplete = new google.maps.places.Autocomplete(input,options);

  google.maps.event.addListener(autocomplete, 'place_changed', function() {
    var place = autocomplete.getPlace();
    var lat = place.geometry.location.lat();
    var lng = place.geometry.location.lng();
    // to set city name, using the locality param
    var componentForm = {
      locality1: 'short_name'
      // administrative_area_level_1: 'short_name',
      // country: 'long_name',
      // locality: 'long_name'
    };
    for (var i = 0; i < place.address_components.length; i++) {
      var addressType = place.address_components[i].types[0];
      if (componentForm[addressType]) {
        var val = place.address_components[i][componentForm[addressType]];
        document.getElementById(addressType).value = val;
      }
    }
    // document.getElementById("latitude").value = lat;
    // document.getElementById("longitude").value = lng;

  });
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB1RaWWrKsEf2xeBjiZ5hk1gannqeFxMmw&libraries=places&callback=initializeAutocomplete"
async defer></script>

@endsection
