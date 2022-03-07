@extends('layouts/contentLayoutMaster')
@section('content')

<link rel="stylesheet" href="{{ asset('newadmin/assets/css/style.bundle.css') }}">
<link rel="stylesheet" href="{{ asset('newadmin/assets/css/style.bundle.css.map') }}">
<div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container">
	<!--begin::Post-->
	<div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container">
		<div class="content flex-row-fluid" id="kt_content" style="margin-left:30px;">
			<div class="stepper stepper-pills stepper-column d-flex flex-column flex-xl-row flex-row-fluid" id="kt_create_account_stepper">
				<div class="display d-flex justify-content-center bg-body rounded justify-content-xl-start flex-row-auto w-100 w-xl-300px w-xxl-400px me-9">
					<div class="px-6 px-lg-10 px-xxl-15 py-20">
						<div class="stepper-nav">
							<div class="stepper-item current" data-kt-stepper-element="nav">
								<div class="stepper-line w-40px"></div>
								<div class="stepper-icon w-40px h-40px">
									<i class="stepper-check fas fa-check"></i>
									<span class="stepper-number">1</span>
								</div>
								<div class="stepper-label">
									<h3 class="stepper-title">Basic Info</h3>
								</div>
							</div>
							<div class="stepper-item" data-kt-stepper-element="nav">
								<div class="stepper-line w-40px"></div>
								<div class="stepper-icon w-40px h-40px">
									<i class="stepper-check fas fa-check"></i>
									<span class="stepper-number">2</span>
								</div>
								<div class="stepper-label">
									<h3 class="stepper-title">Positional Information</h3>
								</div>
							</div>
							<div class="stepper-item" data-kt-stepper-element="nav">
								<div class="stepper-line w-40px"></div>
								<div class="stepper-icon w-40px h-40px">
									<i class="stepper-check fas fa-check"></i>
									<span class="stepper-number">3</span>
								</div>
								<div class="stepper-label">
									<h3 class="stepper-title">Biographical Info</h3>
								</div>
							</div>
							<div class="stepper-item" data-kt-stepper-element="nav">
								<div class="stepper-line w-40px"></div>
								<div class="stepper-icon w-40px h-40px">
									<i class="stepper-check fas fa-check"></i>
									<span class="stepper-number">4</span>
								</div>
								<div class="stepper-label">
									<h3 class="stepper-title">Additional Address</h3>
								</div>
							</div>
							<div class="stepper-item" data-kt-stepper-element="nav">
								<div class="stepper-line w-40px"></div>
								<div class="stepper-icon w-40px h-40px">
									<i class="stepper-check fas fa-check"></i>
									<span class="stepper-number">5</span>
								</div>
								<div class="stepper-label">
									<h3 class="stepper-title">Emergency Contact</h3>
								</div>
							</div>
							<div class="stepper-item" data-kt-stepper-element="nav">
								<div class="stepper-line w-40px"></div>
								<div class="stepper-icon w-40px h-40px">
									<i class="stepper-check fas fa-check"></i>
									<span class="stepper-number">6</span>
								</div>
								<div class="stepper-label">
									<h3 class="stepper-title">Login Info</h3>
								</div>
							</div>

						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>

	@endsection

	<script src="{{ asset('newadmin/assets/css/style.bundle.js') }}"></script>
	<script src="{{ asset('newadmin/assets/css/style.bundle.js.map') }}"></script>
	<script src="{{ asset('newadmin/assets/js/scripts.bundle.js') }}"></script>
	<script src="{{ asset('newadmin/assets/js/scripts.bundle.js.map') }}"></script>