
@extends('layouts/contentLayoutMaster')

@section('title', 'Form Wizard')

@section('vendor-style')
  <!-- vendor css files -->
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/wizard/bs-stepper.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/select/select2.min.css')) }}">
@endsection

@section('page-style')
  <!-- Page css files -->
  <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/form-validation.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/form-wizard.css')) }}">
@endsection

@section('content')
<!-- Horizontal Wizard -->
<section class="horizontal-wizard">
  <div class="bs-stepper horizontal-wizard-example">
    <div class="bs-stepper-header" role="tablist">
      <div class="step" data-target="#basic-info" role="tab" id="basic-info-trigger">
        <button type="button" class="step-trigger">
          <span class="bs-stepper-box">1</span>
          <span class="bs-stepper-label">
            <span class="bs-stepper-title">Basic Info</span>
            <span class="bs-stepper-subtitle">Setup Account Details</span>
          </span>
        </button>
      </div>
      <div class="line">
        <i data-feather="chevron-right" class="font-medium-2"></i>
      </div>
      <div class="step" data-target="#personal-info" role="tab" id="personal-info-trigger">
        <button type="button" class="step-trigger">
          <span class="bs-stepper-box">2</span>
          <span class="bs-stepper-label">
            <span class="bs-stepper-title">Personal Info</span>
            <span class="bs-stepper-subtitle">Add Personal Info</span>
          </span>
        </button>
      </div>
      <div class="line">
        <i data-feather="chevron-right" class="font-medium-2"></i>
      </div>
      <div class="step" data-target="#class-step" role="tab" id="class-step-trigger">
        <button type="button" class="step-trigger">
          <span class="bs-stepper-box">3</span>
          <span class="bs-stepper-label">
            <span class="bs-stepper-title">Class</span>
            <span class="bs-stepper-subtitle">Add Address</span>
          </span>
        </button>
      </div>

      <div class="step" data-target="#biographical-info" role="tab" id="biographical-info-trigger">
        <button type="button" class="step-trigger">
          <span class="bs-stepper-box">4</span>
          <span class="bs-stepper-label">
            <span class="bs-stepper-title">Biographical Info</span>
            <span class="bs-stepper-subtitle">Add Address</span>
          </span>
        </button>
      </div>

      <div class="step" data-target="#additional-address" role="tab" id="additional-address-trigger">
        <button type="button" class="step-trigger">
          <span class="bs-stepper-box">5</span>
          <span class="bs-stepper-label">
            <span class="bs-stepper-title">Additional Address</span>
            <span class="bs-stepper-subtitle">Add Address</span>
          </span>
        </button>
      </div>

      <div class="step" data-target="#emergency-contact" role="tab" id="emergency-contact-trigger">
        <button type="button" class="step-trigger">
          <span class="bs-stepper-box">6</span>
          <span class="bs-stepper-label">
            <span class="bs-stepper-title">Emergency Contact</span>
            <span class="bs-stepper-subtitle">Add Address</span>
          </span>
        </button>
      </div>

      <div class="step" data-target="#login-info" role="tab" id="login-info-trigger">
        <button type="button" class="step-trigger">
          <span class="bs-stepper-box">6</span>
          <span class="bs-stepper-label">
            <span class="bs-stepper-title">Login Info</span>
            <span class="bs-stepper-subtitle">Add Address</span>
          </span>
        </button>
      </div>

      <div class="line">
        <i data-feather="chevron-right" class="font-medium-2"></i>
      </div>
     
    </div>
    <div class="bs-stepper-content">
      <div id="basic-info" class="content" role="tabpanel" aria-labelledby="basic-info-trigger">
        <div class="content-header">
          <h5 class="mb-0">Account Details</h5>
          <small class="text-muted">Enter Your Account Details.</small>
        </div>
        <form>
          <div class="row">
            <div class="mb-1 col-md-6">
              <label class="form-label" for="username">First Name</label>
              <input type="text" name="firstname" value="Rizwan" id="firstname" class="form-control" placeholder="johndoe" />
            </div>
            <div class="mb-1 col-md-6">
              <label class="form-label" for="username">Last Name</label>
              <input type="text" name="lastname" value="Rizwan" id="lastname" class="form-control" placeholder="johndoe" />
            </div>
          </div>
          <div class="row">
          <div class="mb-1 col-md-6">
              <label class="form-label" for="email">Email</label>
              <input
                type="email"
                name="email"
                id="email"
                class="form-control"
                placeholder="john.doe@email.com"
                aria-label="john.doe"
                value="rykrizwan32@gmail.com"
              />
            </div>
            <div class="mb-1 form-password-toggle col-md-6">
              <label class="form-label" for="confirm-password">Phone Number</label>
              <input type="text" name="phonenumber" value="Rizwan" id="phonenumber" class="form-control" placeholder="johndoe" />
            </div>
          </div>

          <div class="row">
            <div class="mb-1 col-md-6">
              <label class="form-label" for="username">Alternative Phone</label>
              <input type="text" name="alternativephone" value="03036153706" id="alternativephone" class="form-control" placeholder="johndoe" />
            </div>
            <div class="mb-1 col-md-6">
            <label for="">Select Leave Type</label>
                    <select class="form-select" id="basicSelect" name="type">
                    <option></option>
                      <option>Sick Leave</option>
                      <option>Marriage Leave</option>
                      <option>Earned Leave</option>
                    </select> 
            </div>
          </div>

          <div class="row">
            <div class="mb-1 col-md-6">
              <label class="form-label" for="username">City</label>
              <input type="text" name="city" value="ryk" id="city" class="form-control" placeholder="johndoe" />
            </div>
            <div class="mb-1 col-md-6">
              <label class="form-label" for="username">Zip Code</label>
              <input type="text" name="zipcode" value="64200" id="zipcode" class="form-control" placeholder="johndoe" />
            </div>
          </div>

        </form>
        <div class="d-flex justify-content-between">
          <button class="btn btn-outline-secondary btn-prev" disabled>
            <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
            <span class="align-middle d-sm-inline-block d-none">Previous</span>
          </button>
          <button class="btn btn-primary btn-next">
            <span class="align-middle d-sm-inline-block d-none">Next</span>
            <i data-feather="arrow-right" class="align-middle ms-sm-25 ms-0"></i>
          </button>
        </div>
      </div>
      <div id="personal-info" class="content" role="tabpanel" aria-labelledby="personal-info-trigger">
        <div class="content-header">
          <h5 class="mb-0">Personal Info</h5>
          <small>Enter Your Personal Info.</small>
        </div>
        <form>
          <div class="row">
            <div class="mb-1 col-md-6">
            <label for="">Division</label>
                    <select class="form-select" id="basicSelect" name="division">
                    <option></option>
                      <option>Account</option>
                      <option>Admin</option>
                      <option>Recuritment</option>
                    </select> 
            </div>
            <div class="mb-1 col-md-6">
              <label class="form-label" for="last-name">Position</label>
              <label for="">Division</label>
                    <select class="form-select" id="basicSelect" name="position">
                    <option></option>
                      <option>Account</option>
                      <option>Admin</option>
                      <option>Recuritment</option>
                    </select> 
            </div>
          </div>
          <div class="row">
            <div class="mb-1 col-md-6">
              <label class="form-label" for="country">Duty Type</label>
              <select class="select2 w-100" name="country" id="dutytype">
                <option label=" "></option>
                <option>UK</option>
                <option>USA</option>
                <option>Spain</option>
                <option>France</option>
                <option>Italy</option>
                <option>Australia</option>
              </select>
            </div>
            <div class="mb-1 col-md-6">
            <label for="">Hire Date</label>
                    <input type="date" class="form-control" name="hiredate" value="" placeholder="Enter date" required />
            </div>
          </div>

          <div class="row">
            <div class="mb-1 col-md-6">
            <label for="">Termination Date</label>
                    <input type="date" class="form-control" name="terminationdate" value="" placeholder="Enter date" required />
            </div>
            <div class="mb-1 col-md-6">
            <label for="">Termination Reason</label>
                    <input type="text" class="form-control" name="terminationreason" id="terminationreason" value="dasd" placeholder="Enter date" required />
            </div>
          </div>

          <div class="row">
            <div class="mb-1 col-md-6">
              <label class="form-label" for="voluntarytermination">Voluntary Termination</label>
              <select class="select2 w-100" name="voluntarytermination" id="voluntarytermination">
                <option label=" "></option>
                <option>UK</option>
                <option>USA</option>
                <option>Spain</option>
                <option>France</option>
                <option>Italy</option>
                <option>Australia</option>
              </select>
            </div>
            <div class="mb-1 col-md-6">
            <label for="">Re Hire Date</label>
                    <input type="date" class="form-control" name="rehiredate" value="" placeholder="Enter date" required />
            </div>
          </div>

          <div class="row">
            <div class="mb-1 col-md-6">
              <label class="form-label" for="ratetype">Rate Type</label>
              <select class="select2 w-100" name="ratetype" id="ratetype">
                <option label=" "></option>
                <option>UK</option>
                <option>USA</option>
                <option>Spain</option>
                <option>France</option>
                <option>Italy</option>
                <option>Australia</option>
              </select>
            </div>
            <div class="mb-1 col-md-6">
            <label for="">Rate</label>
                    <input type="text" class="form-control" name="rate" value="" placeholder="Enter date" required />
            </div>
          </div>

          <div class="row">
            <div class="mb-1 col-md-6">
              <label class="form-label" for="payfrequency">Pay Frequency</label>
              <select class="select2 w-100" name="payfrequency" id="payfrequency">
                <option label=" "></option>
                <option>UK</option>
                <option>USA</option>
                <option>Spain</option>
                <option>France</option>
                <option>Italy</option>
                <option>Australia</option>
              </select>
            </div>
            <div class="mb-1 col-md-6">
            <label for="">Pay Frequency Text</label>
                    <input type="text" class="form-control" name="payfrequencytext" value="" placeholder="Enter date" required />
            </div>
          </div>

          <div class="row">
            <div class="mb-1 col-md-6">
              <label class="form-label" for="hourlyrate2">Hourly Rate 2</label>
              <input type="text" class="form-control" name="hourlyrate2" value="" placeholder="Enter date" required />
            </div>
            <div class="mb-1 col-md-6">
            <label for="hourlyrate3">Hourly Rate 3</label>
                    <input type="text" class="form-control" name="hourlyrate3" value="" placeholder="Enter date" required />
            </div>
          </div>

          <div class="row">
            <div class="mb-1 col-md-6">
              <label class="form-label" for="homedepartment">Home Department</label>
              <input type="text" class="form-control" name="homedepartment" value="" placeholder="Enter date" required />
            </div>
            <div class="mb-1 col-md-6">
            <label for="homedepartmenttext">Home Department Text</label>
                    <input type="text" class="form-control" name="homedepartmenttext" value="" placeholder="Enter date" required />
            </div>
          </div>


        </form>
        <div class="d-flex justify-content-between">
          <button class="btn btn-primary btn-prev">
            <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
            <span class="align-middle d-sm-inline-block d-none">Previous</span>
          </button>
          <button class="btn btn-primary btn-next">
            <span class="align-middle d-sm-inline-block d-none">Next</span>
            <i data-feather="arrow-right" class="align-middle ms-sm-25 ms-0"></i>
          </button>
        </div>
      </div>
      <div id="class-step" class="content" role="tabpanel" aria-labelledby="class-step-trigger">
        <div class="content-header">
          <h5 class="mb-0">Class</h5>
          <small>Enter Your Address.</small>
        </div>
        <form>
          <div class="row">
            <div class="mb-1 col-md-6">
              <label class="form-label" for="address">Class Code</label>
              <input
                type="text"
                id="classcode"
                name="classcode"
                class="form-control"
                placeholder="98  Borough bridge Road, Birmingham"
              />
            </div>
            <div class="mb-1 col-md-6">
              <label class="form-label" for="classdescription">Class Description</label>
              <input type="text" name="classdescription" id="classdescription" class="form-control" placeholder="Borough bridge" />
            </div>
          </div>
          <div class="row">
            <div class="mb-1 col-md-6">
              <label class="form-label" for="classaccrualdate">Class Accrual date</label>
              <input type="date" class="form-control" name="classaccrualdate" id="classaccrualdate" value="" placeholder="Enter date" required />
            </div>
            <div class="mb-1 col-md-6">
            <label class="form-label" for="classstatus">Class status</label>
              <select class="select2 w-100" name="classstatus" id="classstatus">
                <option label=" "></option>
                <option>UK</option>
                <option>USA</option>
                <option>Spain</option>
                <option>France</option>
                <option>Italy</option>
                <option>Australia</option>
              </select>
            </div>
          </div>
        </form>
        <div class="d-flex justify-content-between">
          <button class="btn btn-primary btn-prev">
            <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
            <span class="align-middle d-sm-inline-block d-none">Previous</span>
          </button>
          <button class="btn btn-primary btn-next">
            <span class="align-middle d-sm-inline-block d-none">Next</span>
            <i data-feather="arrow-right" class="align-middle ms-sm-25 ms-0"></i>
          </button>
        </div>
      </div>

      <div id="biographical-info" class="content" role="tabpanel" aria-labelledby="biographical-info-trigger">
        <div class="content-header">
          <h5 class="mb-0">Biographical-Info</h5>
          <small>Enter Your Address.</small>
        </div>
        <form>
          <div class="row">
            <div class="mb-1 col-md-6">
              <label class="form-label" for="address">Address</label>
              <input
                type="text"
                id="address"
                name="address"
                class="form-control"
                placeholder="98  Borough bridge Road, Birmingham"
              />
            </div>
            <div class="mb-1 col-md-6">
              <label class="form-label" for="landmark">Landmark</label>
              <input type="text" name="landmark" id="landmark" class="form-control" placeholder="Borough bridge" />
            </div>
          </div>
          <div class="row">
            <div class="mb-1 col-md-6">
              <label class="form-label" for="pincode1">Pincode</label>
              <input type="text" id="pincode1" class="form-control" placeholder="658921" />
            </div>
            <div class="mb-1 col-md-6">
              <label class="form-label" for="city1">City</label>
              <input type="text" id="city1" class="form-control" placeholder="Birmingham" />
            </div>
          </div>
        </form>
        <div class="d-flex justify-content-between">
          <button class="btn btn-primary btn-prev">
            <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
            <span class="align-middle d-sm-inline-block d-none">Previous</span>
          </button>
          <button class="btn btn-primary btn-next">
            <span class="align-middle d-sm-inline-block d-none">Next</span>
            <i data-feather="arrow-right" class="align-middle ms-sm-25 ms-0"></i>
          </button>
        </div>
      </div>

      <div id="additional-address" class="content" role="tabpanel" aria-labelledby="additional-address-trigger">
        <div class="content-header">
          <h5 class="mb-0">Additional-Address</h5>
          <small>Enter Your Address.</small>
        </div>
        <form>
          <div class="row">
            <div class="mb-1 col-md-6">
              <label class="form-label" for="address">Address</label>
              <input
                type="text"
                id="address"
                name="address"
                class="form-control"
                placeholder="98  Borough bridge Road, Birmingham"
              />
            </div>
            <div class="mb-1 col-md-6">
              <label class="form-label" for="landmark">Landmark</label>
              <input type="text" name="landmark" id="landmark" class="form-control" placeholder="Borough bridge" />
            </div>
          </div>
          <div class="row">
            <div class="mb-1 col-md-6">
              <label class="form-label" for="pincode1">Pincode</label>
              <input type="text" id="pincode1" class="form-control" placeholder="658921" />
            </div>
            <div class="mb-1 col-md-6">
              <label class="form-label" for="city1">City</label>
              <input type="text" id="city1" class="form-control" placeholder="Birmingham" />
            </div>
          </div>
        </form>
        <div class="d-flex justify-content-between">
          <button class="btn btn-primary btn-prev">
            <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
            <span class="align-middle d-sm-inline-block d-none">Previous</span>
          </button>
          <button class="btn btn-primary btn-next">
            <span class="align-middle d-sm-inline-block d-none">Next</span>
            <i data-feather="arrow-right" class="align-middle ms-sm-25 ms-0"></i>
          </button>
        </div>
      </div>

      <div id="emergency-contact" class="content" role="tabpanel" aria-labelledby="emergency-contact-trigger">
        <div class="content-header">
          <h5 class="mb-0">Emergency Contact</h5>
          <small>Enter Your Address.</small>
        </div>
        <form>
          <div class="row">
            <div class="mb-1 col-md-6">
              <label class="form-label" for="address">Address</label>
              <input
                type="text"
                id="address"
                name="address"
                class="form-control"
                placeholder="98  Borough bridge Road, Birmingham"
              />
            </div>
            <div class="mb-1 col-md-6">
              <label class="form-label" for="landmark">Landmark</label>
              <input type="text" name="landmark" id="landmark" class="form-control" placeholder="Borough bridge" />
            </div>
          </div>
          <div class="row">
            <div class="mb-1 col-md-6">
              <label class="form-label" for="pincode1">Pincode</label>
              <input type="text" id="pincode1" class="form-control" placeholder="658921" />
            </div>
            <div class="mb-1 col-md-6">
              <label class="form-label" for="city1">City</label>
              <input type="text" id="city1" class="form-control" placeholder="Birmingham" />
            </div>
          </div>
        </form>
        <div class="d-flex justify-content-between">
          <button class="btn btn-primary btn-prev">
            <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
            <span class="align-middle d-sm-inline-block d-none">Previous</span>
          </button>
          <button class="btn btn-primary btn-next">
            <span class="align-middle d-sm-inline-block d-none">Next</span>
            <i data-feather="arrow-right" class="align-middle ms-sm-25 ms-0"></i>
          </button>
        </div>
      </div>

      <div id="login-info" class="content" role="tabpanel" aria-labelledby="login-info-trigger">
        <div class="content-header">
          <h5 class="mb-0">Login Info</h5>
          <small>Enter Your Address.</small>
        </div>
        <form>
          <div class="row">
            <div class="mb-1 col-md-6">
              <label class="form-label" for="address">Address</label>
              <input
                type="text"
                id="address"
                name="address"
                class="form-control"
                placeholder="98  Borough bridge Road, Birmingham"
              />
            </div>
            <div class="mb-1 col-md-6">
              <label class="form-label" for="landmark">Landmark</label>
              <input type="text" name="landmark" id="landmark" class="form-control" placeholder="Borough bridge" />
            </div>
          </div>
          <div class="row">
            <div class="mb-1 col-md-6">
              <label class="form-label" for="pincode1">Pincode</label>
              <input type="text" id="pincode1" class="form-control" placeholder="658921" />
            </div>
            <div class="mb-1 col-md-6">
              <label class="form-label" for="city1">City</label>
              <input type="text" id="city1" class="form-control" placeholder="Birmingham" />
            </div>
          </div>
        </form>

        <div class="d-flex justify-content-between">
          <button class="btn btn-primary btn-prev">
            <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
            <span class="align-middle d-sm-inline-block d-none">Previous</span>
          </button>
          <button class="btn btn-success btn-submit">Submit</button>
        </div>
        <!-- <div class="d-flex justify-content-between">
          <button class="btn btn-primary btn-prev">
            <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
            <span class="align-middle d-sm-inline-block d-none">Previous</span>
          </button>
          <button class="btn btn-primary btn-next">
            <span class="align-middle d-sm-inline-block d-none">Next</span>
            <i data-feather="arrow-right" class="align-middle ms-sm-25 ms-0"></i>
          </button>
        </div> -->
      </div>

    
    </div>
  </div>
</section>
<!-- /Horizontal Wizard -->


@endsection

@section('vendor-script')
  <!-- vendor files -->
  <script src="{{ asset(mix('vendors/js/forms/wizard/bs-stepper.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/forms/select/select2.full.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/forms/validation/jquery.validate.min.js')) }}"></script>
@endsection
@section('page-script')
  <!-- Page js files -->
  <script src="{{ asset(mix('js/scripts/forms/form-wizard.js')) }}"></script>
@endsection
