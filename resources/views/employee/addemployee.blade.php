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
				<div class="d-flex flex-row-fluid flex-center bg-body rounded">
					<form class="py-20 w-100 w-xl-700px px-9" action="{{ url('/admin/saveemployee')}}" method="post">
						<div class="current slide-page" data-kt-stepper-element="content">
							<div class="w-100">
								<div class="pb-10 pb-lg-15">
									<!--begin::Title-->
									<h2 class="fw-bolder d-flex align-items-center text-dark">Basic Info</h2>
								</div>
								<div class="fv-row">
									<div class="row">
										<div class="fv-row mb-10">
											<!--begin::Label-->
											<label class="form-label required">First Name</label>
											<!--end::Label-->
											<!--begin::Input-->
											<input name="firstname" class="form-control form-control-lg form-control-solid" type="text" required />
											@error('firstname')
											<div class="alert alert-danger">{{ $message }}</div>
											@enderror
											@csrf
											<!--end::Input-->
										</div>
										<div class="fv-row mb-10">
											<!--begin::Label-->
											<label class="form-label required">Last Name</label>
											<!--end::Label-->
											<!--begin::Input-->
											<input name="lastname" class="form-control form-control-lg form-control-solid" type="text" /> @error('lastname')
											<div class="alert alert-danger">{{ $message }}</div>
											@enderror
											<!--end::Input-->
										</div>
										<div class="fv-row mb-10">
											<!--begin::Label-->
											<label class="form-label required">Email</label>
											<!--end::Label-->
											<!--begin::Input-->
											<input name="email" class="form-control form-control-lg form-control-solid" type="email" /> @error('email')
											<div class="alert alert-danger">{{ $message }}</div>
											@enderror
											<!--end::Input-->
										</div>
										<div class="fv-row mb-10">
											<!--begin::Label-->
											<label class="form-label required">Phone No</label>
											<!--end::Label-->
											<!--begin::Input-->
											<input name="phonenumber" class="form-control form-control-lg form-control-solid" type="text" /> @error('phonenumber')
											<div class="alert alert-danger">{{ $message }}</div>
											@enderror
											<!--end::Input-->
										</div>
										<div class="fv-row mb-10">
											<!--begin::Label-->
											<label class="form-label required">Alternative Phone</label>
											<!--end::Label-->
											<!--begin::Input-->
											<input name="alternativephone" class="form-control form-control-lg form-control-solid" type="text" /> @error('alternativephone')
											<div class="alert alert-danger">{{ $message }}</div>
											@enderror
											<!--end::Input-->
										</div>
										<div class="fv-row mb-10">
											<!--begin::Label-->
											<label class="form-label required">Country</label>
											<!--end::Label-->
											<!--begin::Input-->
											<select name="selectcountry" class="form-select form-select-lg form-select-solid" data-control="select2" data-placeholder="Select..." data-allow-clear="true" data-hide-search="true">
												<option></option>
												<option>Pakistan</option>
												<option>USA</option>
											</select>
											@error('selectcountry')
											<div class="alert alert-danger">{{ $message }}</div>
											@enderror
											<!--end::Input-->
										</div>
										<div class="fv-row mb-10">
											<!--begin::Label-->
											<label class="form-label required">Cite</label>
											<!--end::Label-->
											<!--begin::Input-->
											<input name="city" class="form-control form-control-lg form-control-solid" type="text" /> @error('city')
											<div class="alert alert-danger">{{ $message }}</div>
											@enderror
											<!--end::Input-->
										</div>
										<div class="fv-row mb-10">
											<!--begin::Label-->
											<label class="form-label required">Zip Code</label>
											<!--end::Label-->
											<!--begin::Input-->
											<input name="zipcode" class="form-control form-control-lg form-control-solid" type="text" /> @error('zipcode')
											<div class="alert alert-danger">{{ $message }}</div>
											@enderror
											<!--end::Input-->
										</div>
										<div class="fv-row mb-10">
											<button type="button" class="btn btn-lg btn-primary firstNext" data-kt-stepper-action="next">Continue
											</button>
										</div>
									</div>
								</div>
							</div>
						</div>
						
					</form>
					
				</div>
				
			</div>
		</div>
	</div>

	@endsection
	<script src="{{ asset('scripts/script.js') }}"></script>
	<script src="{{ asset('newadmin/assets/css/style.bundle.js') }}"></script>
	<script src="{{ asset('newadmin/assets/css/style.bundle.js.map') }}"></script>
	<script src="{{ asset('newadmin/assets/js/scripts.bundle.js') }}"></script>
	<script src="{{ asset('newadmin/assets/js/scripts.bundle.js.map') }}"></script>