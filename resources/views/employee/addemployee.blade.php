@extends('layouts/contentLayoutMaster')
@section('content')

<link rel="stylesheet" href="{{ asset('newadmin/assets/css/style.bundle.css') }}">
<link rel="stylesheet" href="{{ asset('newadmin/assets/css/style.bundle.css.map') }}">

<!--end::Toolbar-->
<!--begin::Container-->
<div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container">
	<!--begin::Post-->
	<div class="content flex-row-fluid" id="kt_content" style="margin-left:30px;">
		<!--begin::Stepper-->
		<div class="stepper stepper-pills stepper-column d-flex flex-column flex-xl-row flex-row-fluid" id="kt_create_account_stepper">
			<!--begin::Aside-->
			<div class="display d-flex justify-content-center bg-body rounded justify-content-xl-start flex-row-auto w-100 w-xl-300px w-xxl-400px me-9">
				<!--begin::Wrapper-->
				<div class="px-6 px-lg-10 px-xxl-15 py-20">
					<!--begin::Nav-->
					<div class="stepper-nav">
						<!--begin::Step 1-->
						<div class="stepper-item current" data-kt-stepper-element="nav">
							<!--begin::Line-->
							<div class="stepper-line w-40px"></div>
							<!--end::Line-->
							<!--begin::Icon-->
							<div class="stepper-icon w-40px h-40px">
								<i class="stepper-check fas fa-check"></i>
								<span class="stepper-number">1</span>
							</div>
							<!--end::Icon-->
							<!--begin::Label-->
							<div class="stepper-label">
								<h3 class="stepper-title">Basic Info</h3>
							</div>
							<!--end::Label-->
						</div>
						<!--end::Step 1-->
						<!--begin::Step 2-->
						<div class="stepper-item" data-kt-stepper-element="nav">
							<!--begin::Line-->
							<div class="stepper-line w-40px"></div>
							<!--end::Line-->
							<!--begin::Icon-->
							<div class="stepper-icon w-40px h-40px">
								<i class="stepper-check fas fa-check"></i>
								<span class="stepper-number">2</span>
							</div>
							<!--end::Icon-->
							<!--begin::Label-->
							<div class="stepper-label">
								<h3 class="stepper-title">Positional Information</h3>
							</div>
							<!--end::Label-->
						</div>
						<!--end::Step 2-->
						<!--begin::Step 3-->
						<div class="stepper-item" data-kt-stepper-element="nav">
							<!--begin::Line-->
							<div class="stepper-line w-40px"></div>
							<!--end::Line-->
							<!--begin::Icon-->
							<div class="stepper-icon w-40px h-40px">
								<i class="stepper-check fas fa-check"></i>
								<span class="stepper-number">3</span>
							</div>
							<!--end::Icon-->
							<!--begin::Label-->
							<div class="stepper-label">
								<h3 class="stepper-title">Biographical Info</h3>
							</div>
							<!--end::Label-->
						</div>
						<!--end::Step 3-->
						<!--begin::Step 3-->
						<div class="stepper-item" data-kt-stepper-element="nav">
							<!--begin::Line-->
							<div class="stepper-line w-40px"></div>
							<!--end::Line-->
							<!--begin::Icon-->
							<div class="stepper-icon w-40px h-40px">
								<i class="stepper-check fas fa-check"></i>
								<span class="stepper-number">4</span>
							</div>
							<!--end::Icon-->
							<!--begin::Label-->
							<div class="stepper-label">
								<h3 class="stepper-title">Additional Address</h3>
							</div>
							<!--end::Label-->
						</div>
						<!--end::Step 3-->
						<!--begin::Step 5-->
						<div class="stepper-item" data-kt-stepper-element="nav">
							<!--begin::Line-->
							<div class="stepper-line w-40px"></div>
							<!--end::Line-->
							<!--begin::Icon-->
							<div class="stepper-icon w-40px h-40px">
								<i class="stepper-check fas fa-check"></i>
								<span class="stepper-number">5</span>
							</div>
							<!--end::Icon-->
							<!--begin::Label-->
							<div class="stepper-label">
								<h3 class="stepper-title">Emergency Contact</h3>
							</div>
							<!--end::Label-->
						</div>
						<!--end::Step 5-->
						<div class="stepper-item" data-kt-stepper-element="nav">
							<!--begin::Line-->
							<div class="stepper-line w-40px"></div>
							<!--end::Line-->
							<!--begin::Icon-->
							<div class="stepper-icon w-40px h-40px">
								<i class="stepper-check fas fa-check"></i>
								<span class="stepper-number">6</span>
							</div>
							<!--end::Icon-->
							<!--begin::Label-->
							<div class="stepper-label">
								<h3 class="stepper-title">Login Info</h3>
							</div>
							<!--end::Label-->
						</div>
					</div>
					<!--end::Nav-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--begin::Aside-->
			<!--begin::Content-->
			<div class="d-flex flex-row-fluid flex-center bg-body rounded">
				<!--begin::Form-->
				<form class="py-20 w-100 w-xl-700px px-9" action="{{ url('/admin/saveemployee')}}" method="post">

					<!--begin::Step 1-->
					<div class="current" data-kt-stepper-element="content">
						<!--begin::Wrapper-->
						<div class="w-100">
							<!--begin::Heading-->
							<div class="pb-10 pb-lg-15">
								<!--begin::Title-->
								<h2 class="fw-bolder d-flex align-items-center text-dark">Quick Loan

								</h2>
								<!--end::Title-->
							</div>
							<!--end::Heading-->
							<!--begin::Input group-->
							<div class="fv-row">
								<!--begin::Row-->
								<div class="row">
									<!--begin::Col-->
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
									<!--begin::Input group-->
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
									<!--end::Input group-->
									<!-- <div class="fv-row mb-10">
									
										<label class="form-label required">Date Of Birth</label>
										
										<input name="dob" class="form-control form-control-lg form-control-solid" type="date" />@error('dob')
										<div class="alert alert-danger">{{ $message }}</div>
										@enderror
										
									</div> -->
									<!-- <div class="fv-row mb-10">
									
										<label class="form-label required">Martial Status</label>
										
										<select name="materialstatus" class="form-select form-select-lg form-select-solid" data-control="select2" data-placeholder="Select..." data-allow-clear="true" data-hide-search="true">
											<option></option>
											<option value="Single">Single</option>
											<option value="Married">Married</option>
											<option value="Widowed">Widowed</option>
											<option value="Divorced">Divorced</option>
										</select>
										@error('materialstatus')
										<div class="alert alert-danger">{{ $message }}</div>
										@enderror
									
									</div> -->
									<!-- <div class="fv-row mb-10">
										
										<label class="form-label required">Education</label>
										
										<select name="education" class="form-select form-select-lg form-select-solid" data-control="select2" data-placeholder="Select..." data-allow-clear="true" data-hide-search="true">
											<option></option>
											<option value="Primary">Primary</option>
											<option value="Secondary">Secondary</option>
											<option value="Graduate">Graduate</option>
											<option value="Post-Graduate">Post-Graduate</option>
										</select>
										@error('education')
										<div class="alert alert-danger">{{ $message }}</div>
										@enderror
										
									</div> -->
									<!-- <div class="fv-row mb-10">
										
										<label class="form-label required">Home Address</label>
										
										<input name="homeaddress" class="form-control form-control-lg form-control-solid" type="text" /> @error('homeaddress')
										<div class="alert alert-danger">{{ $message }}</div>
										@enderror
										
									</div> -->
									<!-- <div class="fv-row mb-10">
									
										<label class="form-label required">State You Live In</label>
										
										<input name="state" class="form-control form-control-lg form-control-solid" type="text" /> @error('state')
										<div class="alert alert-danger">{{ $message }}</div>
										@enderror
										
									</div> -->
								</div>
								<!--end::Row-->
							</div>
							<!--end::Input group-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Step 1-->
					<!--begin::Step 2-->
					<div data-kt-stepper-element="content">
						<!--begin::Wrapper-->
						<div class="w-100">
							<!--begin::Heading-->
							<div class="pb-10 pb-lg-15">
								<!--begin::Title-->
								<h2 class="fw-bolder text-dark">Positional Information</h2>
								<!--end::Title-->
							</div>
							<!--end::Heading-->
							<!--begin::Input group-->
							<div class="fv-row mb-10">
								<!--begin::Label-->
								<label class="form-label required">Professional Status</label>
								<!--end::Label-->
								<!--begin::Input-->
								<input name="professionalstatus" class="form-control form-control-lg form-control-solid" type="text" /> @error('professionalstatus')
								<div class="alert alert-danger">{{ $message }}</div>
								@enderror
								<!--end::Input-->
							</div>
							<div class="fv-row mb-10">
								<!--begin::Label-->
								<label class="form-label required">Proffesional Category</label>
								<!--end::Label-->
								<!--begin::Input-->
								<input name="professionalcategory" class="form-control form-control-lg form-control-solid" type="text" /> @error('professionalcategory')
								<div class="alert alert-danger">{{ $message }}</div>
								@enderror
								<!--end::Input-->
							</div>
							<div class="fv-row mb-10">
								<!--begin::Label-->
								<label class="form-label required">Place Of Work</label>
								<!--end::Label-->
								<!--begin::Input-->
								<input name="companyname" class="form-control form-control-lg form-control-solid" type="text" /> @error('companyname')
								<div class="alert alert-danger">{{ $message }}</div>
								@enderror
								<!--end::Input-->
							</div>
							<div class="fv-row mb-10">
								<!--begin::Label-->
								<label class="form-label required">Years Of Work</label>
								<!--end::Label-->
								<!--begin::Input-->
								<input name="yearsofwork" class="form-control form-control-lg form-control-solid" type="text" /> @error('yearsofwork')
								<div class="alert alert-danger">{{ $message }}</div>
								@enderror
								<!--end::Input-->
							</div>
							<div class="fv-row mb-10">
								<!--begin::Label-->
								<label class="form-label required">Monthly Salary</label>
								<!--end::Label-->
								<!--begin::Input-->
								<input name="monthlyincome" class="form-control form-control-lg form-control-solid" type="numerics" /> @error('monthlyincome')
								<div class="alert alert-danger">{{ $message }}</div>
								@enderror
								<!--end::Input-->
							</div>
							<!--end::Input group-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Step 2-->
					<!--begin::Step 3-->
					<div data-kt-stepper-element="content">
						<!--begin::Wrapper-->
						<div class="w-100">
							<!--begin::Heading-->
							<div class="pb-10 pb-lg-12">
								<!--begin::Title-->
								<h2 class="fw-bolder text-dark">Guarantor's Details</h2>
								<!--end::Notice-->
							</div>
							<!--end::Heading-->
							<!--begin::Input group-->
							<div class="fv-row mb-10">
								<!--begin::Label-->
								<label class="form-label required">Guarantor's Name(Employer)</label>
								<!--end::Label-->
								<!--begin::Input-->
								<input name="gurantorname" class="form-control form-control-lg form-control-solid" type="text" /> @error('gurantorname')
								<div class="alert alert-danger">{{ $message }}</div>
								@enderror
								<!--end::Input-->
							</div>
							<div class="fv-row mb-10">
								<!--begin::Label-->
								<label class="form-label required">Guarantor's Current Position</label>
								<!--end::Label-->
								<!--begin::Input-->
								<input name="gurantorposition" class="form-control form-control-lg form-control-solid" type="text" /> @error('gurantorposition')
								<div class="alert alert-danger">{{ $message }}</div>
								@enderror
								<!--end::Input-->
							</div>
							<!--end::Input group-->
							<!--begin::Input group-->
							<div class="fv-row mb-10">
								<!--begin::Label-->
								<label class="form-label required">Relationship</label>
								<!--end::Label-->
								<!--begin::Input-->
								<input name="relation" class="form-control form-control-lg form-control-solid" type="text" /> @error('relation')
								<div class="alert alert-danger">{{ $message }}</div>
								@enderror
								<!--end::Input-->
							</div>
							<!--end::Input group-->
							<!--begin::Input group-->
							<div class="fv-row mb-10">
								<!--begin::Label-->
								<label class="form-label required">Guarantor's Phone Number</label>
								<!--end::Label-->
								<!--begin::Input-->
								<input name="gurantorphone" class="form-control form-control-lg form-control-solid" type="numerics" /> @error('gurantorphone')
								<div class="alert alert-danger">{{ $message }}</div>
								@enderror
								<!--end::Input-->
							</div>
							<div class="fv-row mb-10">
								<!--begin::Label-->
								<label class="form-label required">Guarantor's Email Address</label>
								<!--end::Label-->
								<!--begin::Input-->
								<input name="gurantoremail" class="form-control form-control-lg form-control-solid" type="email" /> @error('gurantoremail')
								<div class="alert alert-danger">{{ $message }}</div>
								@enderror
								<!--end::Input-->
							</div>
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Step 3-->
					<!--begin::Step 3-->
					<div data-kt-stepper-element="content">
						<!--begin::Wrapper-->
						<div class="w-100">
							<!--begin::Heading-->
							<div class="pb-10 pb-lg-12">
								<!--begin::Title-->
								<h2 class="fw-bolder text-dark">Loan Details</h2>
								<!--end::Notice-->
							</div>
							<!--end::Heading-->
							<!--begin::Input group-->
							<div class="fv-row mb-10">
								<!--begin::Label-->
								<label class="form-label required">Loan Amount(₦) ?</label>
								<!--end::Label-->
								<!--begin::Input-->
								<input name="neededmoney" class="form-control form-control-lg form-control-solid" type="number" /> @error('neededmoney')
								<div class="alert alert-danger">{{ $message }}</div>
								@enderror
								<!--end::Input-->
							</div>
							<!--end::Input group-->
							<!--begin::Input group-->
							<div class="fv-row mb-10">
								<!--begin::Label-->
								<label class="form-label required">Purpose Of Loan ?</label>
								<!--end::Label-->
								<!--begin::Input-->
								<select name="loanpurpose" class="form-select form-select-lg form-select-solid" data-control="select2" data-placeholder="Select..." data-allow-clear="true" data-hide-search="true">
									<option></option>
									<option value="Bussiness">Bussiness</option>
									<option value="Familyneeds">Family needs</option>
									<option value="Schoolfees">School fees</option>
									<option value="Payrent">Pay rent</option>
									<option value="Medicalbill">Medical bill</option>
									<option value="Padayloan">Paday loan</option>
									<option value="Others">Others</option>
								</select>
								@error('loanpurpose')
								<div class="alert alert-danger">{{ $message }}</div>
								@enderror
								<!--end::Input-->
							</div>
							<!--end::Input group-->
							<!--begin::Input group-->
							<div class="fv-row mb-10">
								<!--begin::Label-->
								<label class="form-label required">How Will You Payback ?</label>
								<!--end::Label-->
								<!--begin::Input-->
								<input name="duration" class="form-control form-control-lg form-control-solid" type="date" /> @error('duration')
								<div class="alert alert-danger">{{ $message }}</div>
								@enderror
								<!--end::Input-->
							</div>
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Step 3-->
					<!--begin::Step 5-->
					<div data-kt-stepper-element="content">
						<!--begin::Wrapper-->
						<div class="w-100">
							<!--begin::Heading-->
							<div class="pb-8 pb-lg-10">
								<!--begin::Title-->
								<h2 class="fw-bolder text-dark">Term Of Use</h2>
								<!--end::Title-->
								<!--begin::Notice-->
								<div class="text-muted text fw-bold fs-6">If you pay on time...
								</div>
								<!--end::Notice-->
							</div>
							<!--end::Heading-->
							<!--begin::Body-->
							<div class="mb-0" style="margin-left: 20px;">
								<!--begin::Text-->
								<div class="fs-6 text-gray-600 mb-5">
									<i class="fa-solid fa-naira-sign"></i>Higher amounts
									<p style="color: #7e8299!important; font-size: 0.85rem!important; font-family: inherit;">Upto 500,000</p>
								</div>
								<div class="fs-6 text-gray-600 mb-5">
									<i class="fa-regular fa-badge-percent"></i>Discounts
									<p style="color: #7e8299!important; font-size: 0.85rem!important; font-family: inherit;">When you pay early</p>
								</div>
								<div class="fs-6 text-gray-600 mb-5">Instalments
									<p style="color: #7e8299!important; font-size: 0.85rem!important; font-family: inherit;">Spread your payments</p>
								</div>
								<!--end::Text-->
								<!--begin::Alert-->
								<!--end::Alert-->
							</div>
							<!--end::Body-->
							<!--begin::Heading-->
							<div class="pb-8 pb-lg-10">
								<!--begin::Notice-->
								<div class="text-muted text-red fw-bold fs-6">If you pay late...
								</div>
								<!--end::Notice-->
							</div>
							<!--end::Heading-->
							<!--begin::Body-->
							<div class="mb-0" style="margin-left: 20px;">
								<!--begin::Text-->
								<div class="fs-6 text-gray-600 mb-5">Automatic debit
									<p style="color: #7e8299!important; font-size: 0.85rem!important; font-family: inherit;">On your bank account</p>
								</div>
								<div class="fs-6 text-gray-600 mb-5">Late fees
									<p style="color: #7e8299!important; font-size: 0.85rem!important; font-family: inherit;">1.5% per day for 10 days</p>
								</div>
								<div class="fs-6 text-gray-600 mb-5">Credit bureaus
									<p style="color: #7e8299!important; font-size: 0.85rem!important; font-family: inherit;">Defaulters are reported</p>
								</div>
								<!--end::Text-->
								<!--begin::Alert-->
								<!--end::Alert-->
							</div>
							<!--end::Body-->
							<p class="p">Read our Terms of Use and privacy policy<br>
								Loan amounts range from ₦5,000 to ₦500,000 with a repayment period from 14days to 6months at monthly interest rates of 20%(APRs 240%)
								<br>
								<br>
								<div class="d-flex">
                                <input class="checkbox me-5" type="checkbox" name="checkbox">I Agree to the terms and privacy policy
                                </div>
							</p>
							<input type="submit" class="btn btn-lg btn-primary me-3" style="float: right;" value="Submit">
						</div>
						<!--end::Wrapper-->

					</div>
					<!--end::Step 5-->
					<!--begin::Actions-->
					<div class="d-flex flex-stack pt-10" style="float: right;">
						<!--begin::Wrapper-->
						<div>
							<button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="next">Continue
							</button>
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Actions-->
				</form>
				<!--end::Form-->
			</div>
			<!--end::Content-->
		</div>
		<!--end::Stepper-->
	</div>
	<!--end::Post-->
</div>

@endsection

<script src="{{ asset('newadmin/assets/css/style.bundle.js') }}"></script>
<script src="{{ asset('newadmin/assets/css/style.bundle.js.map') }}"></script>
<script src="{{ asset('newadmin/assets/js/scripts.bundle.js') }}"></script>
<script src="{{ asset('newadmin/assets/js/scripts.bundle.js.map') }}"></script>

