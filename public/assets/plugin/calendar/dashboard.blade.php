@extends('front_site.master-layout')
@section('content')
	<section class="dashboard-content container my-4">
		@if($user->email_verified_at == null)
			<div class='container mt-3'>
				<div class="alert alert-warning alert-dismissible fade show" role="alert">
					<p style='text-align:center;'><strong>Warning!</strong> Kindly check your inbox to verify your email.</p>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			</div>
		@else

			@if($user->userable->student_cv == null)
			<div class='container mt-3'>
				<div class="alert alert-warning alert-dismissible fade show" role="alert">
					<p style='text-align:center;'><strong>Warning!</strong> Kindly upload your CV.</p>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			</div>
			@endif

		@endif

		@if($user->is_active == 0)
			<div class='container mt-3'>
				<div class="alert alert-success" role="alert">
					<h4 class="alert-heading">Hello!</h4>
					<p>You have successfully created an account as a Student. Your account request is under verification, you
						will be able to perform other functionalities after account approval.
						<br>
						Thank You
						{{$user->first_name .' '. $user->last_name}}
				</div>
			</div>
			<nav class="mb-3">

				<a href="{{route('student-edit-profile')}}" class="item d-flex flex-column align-items-center text-center">
					<img class="mb-2" src="{{$ASSET}}/front-site/img/my_acc_b.png" alt="">
					<img class="mb-2 yellow" src="{{$ASSET}}/front-site/img/my_acc_y.png" alt="">
					<span>my account</span>
				</a>
			</nav>
		@else


			<nav class="mb-3">
				<a href="{{route('student-dashboard')}}" class="item d-flex flex-column align-items-center text-center active">
					<img class="mb-2" src="{{$ASSET}}/front-site/img/dashboard_b.png" alt="">
					<img class="mb-2 yellow" src="{{$ASSET}}/front-site/img/dashboard_y.png" alt="">
					<span>dashboard</span>
				</a>
				<!-- <a href="#" class="item d-flex flex-column align-items-center text-center">
					<img class="mb-2" src="{{$ASSET}}/front-site/img/students_b.png" alt="">
					<img class="mb-2 yellow" src="{{$ASSET}}/front-site/img/students_y.png" alt="">
					<span>students</span>
				</a> -->
				<a href="{{route('student-get-appointments')}}" class="item d-flex flex-column align-items-center text-center">
					<img class="mb-2" src="{{$ASSET}}/front-site/img/appointments_b.png" alt="">
					<img class="mb-2 yellow" src="{{$ASSET}}/front-site/img/appointments_y.png" alt="">
					<span>appointments</span>
				</a>
				<a href="{{route('student-get-workplaces')}}" class="item d-flex flex-column align-items-center text-center">
					<img class="mb-2" src="{{$ASSET}}/front-site/img/ind_cons_b.png" alt="">
					<img class="mb-2 yellow" src="{{$ASSET}}/front-site/img/ind_cons_y.png" alt="">
					<span>Industries</span>
				</a>
				<a href="{{route('student-get-job')}}" class="item d-flex flex-column align-items-center text-center">
					<img class="mb-2" src="{{$ASSET}}/front-site/img/job_b.png" alt="">
					<img class="mb-2 yellow" src="{{$ASSET}}/front-site/img/job_y.png" alt="">
					<span>Job</span>
				</a>
				<a href="{{route('student-get-reviews')}}" class="item d-flex flex-column align-items-center  text-center">
					<img class="mb-2" src="{{$ASSET}}/front-site/img/mou_b.png"  alt="">
					<img class="mb-2 yellow" src="{{$ASSET}}/front-site/img/mou_y.png" alt="">
					<span>Reviews</span>
				</a>
				<a href="#" class="item d-flex flex-column align-items-center text-center">
					<img class="mb-2" src="{{$ASSET}}/front-site/img/gallary_b.png" alt="">
					<img class="mb-2 yellow" src="{{$ASSET}}/front-site/img/gallary_y.png" alt="">
					<span>Gallery</span>
				</a>
				<a href="{{route('student-my-schedule')}}" class="item d-flex flex-column align-items-center text-center">
					<img class="mb-2" src="{{$ASSET}}/front-site/img/compliance_b.png" alt="">
					<img class="mb-2 yellow" src="{{$ASSET}}/front-site/img/compliance_y.png" alt="">
					<span>my schedule</span>
				</a>
				<a href="{{route('student-upload-cv')}}" class="item d-flex flex-column align-items-center text-center">
					<img class="mb-2" src="{{$ASSET}}/front-site/img/cv_b.png" alt="">
					<img class="mb-2 yellow" src="{{$ASSET}}/front-site/img/cv_y.png" alt="">
					<span>Upload CV</span>
				</a>
				<a href="{{route('student-edit-profile')}}" class="item d-flex flex-column align-items-center text-center">
					<img class="mb-2" src="{{$ASSET}}/front-site/img/my_acc_b.png" alt="">
					<img class="mb-2 yellow" src="{{$ASSET}}/front-site/img/my_acc_y.png" alt="">
					<span>my account</span>
				</a>
				<a href="{{route('student-settings')}}" class="item d-flex flex-column align-items-center text-center">
					<img class="mb-2" src="{{$ASSET}}/front-site/img/setting_b.png" alt="">
					<img class="mb-2 yellow" src="{{$ASSET}}/front-site/img/setting_y.png" alt="">
					<span>Settings</span>
				</a>
			</nav>
		@endif

		<div class="dashboard-bg-and-profile-pic">
		@if($user->userable->expiry_date)
		<p class="text-right text-warning mb-1 font-weight-bold">Expiring in {{remaining_days()}} days</p>
		@endif	
			<div class="bg">
			
				<div class="pic-and-name">
					<img src="{{ ($user->profile_pic == null)? $ASSET.'/front-site/img/man.svg' : url($user->profile_pic)}} "
						alt="" class="shadow-sm">
					<span class="name dark">{{$user->first_name .' '. $user->last_name}}</span>
				</div>
			</div>
		</div>
		<div class="boxes">

			<div class="box p-3 shadow rounded font-weight-bold">
				<span><i class="fas fa-address-card mr-1"></i>{{$user->userable->student_id}}</span>
				<span><i class="fas fa-university mr-1"></i>{{$user->userable->rto->rto_name}}</span>
				<span><i class="fas fa-phone-alt mr-1"></i>{{$user->phone_no}}</span>
				<span><i class="fas fa-map-marker-alt mr-1"></i>{{$user->userable->address}}</span>
			</div>

			<div class="box p-3 shadow rounded font-weight-bold bg-dark">

				<span><i class="fas fa-user mr-1"></i>{{ $user->userable->emergency_person }}</span>
				<span><i class="fas fa-phone-alt mr-1"></i>{{$user->userable->emergency_phone}}</span>

				<span><i class="fas fa-envelope mr-1"></i>{{$user->email}}</span>
			</div>
			<div class="box p-3 shadow rounded font-weight-bold">
				@foreach($user->userable->courses as $value)
					<span><i class="fas fa-book-open mr-1"></i>{{$value->course_title}}</span>
					<span><i class="fas fa-hashtag mr-1"></i>{{$value->course_code}}</span>
				@endforeach
			</div>
		</div>
	</section>
@endsection