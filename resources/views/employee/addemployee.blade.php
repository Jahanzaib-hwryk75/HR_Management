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


      <div class="step" data-target="#biographical-info" role="tab" id="biographical-info-trigger">
        <button type="button" class="step-trigger">
          <span class="bs-stepper-box">3</span>
          <span class="bs-stepper-label">
            <span class="bs-stepper-title">Biographical Info</span>
            <span class="bs-stepper-subtitle">Add Address</span>
          </span>
        </button>
      </div>

      <div class="step" data-target="#additional-address" role="tab" id="additional-address-trigger">
        <button type="button" class="step-trigger">
          <span class="bs-stepper-box">4</span>
          <span class="bs-stepper-label">
            <span class="bs-stepper-title">Additional Address</span>
            <span class="bs-stepper-subtitle">Add Address</span>
          </span>
        </button>
      </div>

      <div class="step" data-target="#emergency-contact" role="tab" id="emergency-contact-trigger">
        <button type="button" class="step-trigger">
          <span class="bs-stepper-box">5</span>
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
        <form action="" method="POST"></form>
        <form>
          <div class="row">
            <div class="mb-1 col-md-6">
              <label class="form-label" for="firstname">First Name</label>
              <input type="text" name="firstname" value="" id="firstname" class="form-control" placeholder="Enter First Name" />
              @error('firstname')
              <div class="text-danger">{{ $message }}</div>
               @enderror
            </div>
            <div class="mb-1 col-md-6">
              <label class="form-label" for="lastname">Last Name</label>
              <input type="text" name="lastname" value="" id="lastname" class="form-control" placeholder="Enter Last Name" />
              @error('lastname')
              <div class="text-danger">{{ $message }}</div>
               @enderror
            </div>
          </div>
          <div class="row">
            <div class="mb-1 col-md-6">
              <label class="form-label" for="email">Email</label>
              <input type="email" name="email" id="email" class="form-control" placeholder="john.doe@email.com" aria-label="john.doe" value="" />
              @error('email')
              <div class="text-danger">{{ $message }}</div>
               @enderror
            </div>
            <div class="mb-1 form-password-toggle col-md-6">
              <label class="form-label" for="phonenumber">Phone Number</label>
              <input type="text" name="phonenumber" value="" id="phonenumber" class="form-control" placeholder="Phone Number" />
              @error('phonenumber')
              <div class="text-danger">{{ $message }}</div>
               @enderror
            </div>
          </div>

          <div class="row">
            <div class="mb-1 col-md-6">
              <label class="form-label" for="alternativephone">Alternative Phone</label>
              <input type="text" name="alternativephone" value="" id="alternativephone" class="form-control" placeholder="Alternative Phone Number" />
              @error('alternativephone')
              <div class="text-danger">{{ $message }}</div>
               @enderror
            </div>
            <div class="mb-1 col-md-6">
              <label for="selectcountry">Select Country</label>
              <select class="form-select" id="selectcountry" name="selectcountry">
                @foreach($user as $user)
                <option value="null">Select Country</option>
                <option>{{$user->couuntryname}}</option>
                @endforeach
              </select>
              @error('selectcountry')
              <div class="text-danger">{{ $message }}</div>
               @enderror
            </div>
          </div>

          <div class="row">
            <div class="mb-1 col-md-6">
              <label class="form-label" for="city">City</label>
              <input type="text" name="city" value="" id="city" class="form-control" placeholder="Enter City" />
              @error('city')
              <div class="text-danger">{{ $message }}</div>
               @enderror
            </div>
            <div class="mb-1 col-md-6">
              <label class="form-label" for="zipcode">Zip Code</label>
              <input type="text" name="zipcode" value="" id="zipcode" class="form-control" placeholder="Zip Code" />
              @error('zipcode')
              <div class="text-danger">{{ $message }}</div>
               @enderror
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
              <label for="division">Division</label>
              <select class="form-select" id="division" name="division">
                <option value="null">Select Division</option>
                <option>Accounts</option>
                <option>Admin</option>
                <option>HR</option>
              </select>
              @error('division')
              <div class="text-danger">{{ $message }}</div>
               @enderror
            </div>
            <div class="mb-1 col-md-6">
              <!-- <label class="form-label" for="last-name">Position</label> -->
              <label for="positionname">Position</label>
              <select class="form-select" id="positionname" name="positionname">
              @foreach($position as $position)  
              <option value="null">Select position</option>
              <option>{{$position->positionname}}</option>
                @endforeach
              </select>
              @error('positionname')
              <div class="text-danger">{{ $message }}</div>
               @enderror
            </div>
          </div>
          <div class="row">
            <div class="mb-1 col-md-6">
              <label class="form-label" for="dutytype">Duty Type</label>
              <select class="select2 w-100" name="dutytype" id="dutytype">
                @foreach($data as $data)
                <option value="null">Select Duty type</option>
                <option>{{$data->dutytime}}</option>
                @endforeach
              </select>
              @error('dutytype')
              <div class="text-danger">{{ $message }}</div>
               @enderror
            </div>
            <div class="mb-1 col-md-6">
              <label for="hiredate">Hire Date</label>
              <input type="date" class="form-control" id="hiredate" name="hiredate" value="" placeholder="Enter date" required />
              @error('hiredate')
              <div class="text-danger">{{ $message }}</div>
               @enderror
            </div>
          </div>

          <div class="row">
            <div class="mb-1 col-md-6">
              <label for="terminationdate">Termination Date</label>
              <input type="date" class="form-control" id="terminationdate" name="terminationdate" value="" placeholder="Enter date" required />
              @error('terminationdate')
              <div class="text-danger">{{ $message }}</div>
               @enderror
            </div>
            <div class="mb-1 col-md-6">
              <label for="terminationreason">Termination Reason</label>
              <input type="text" class="form-control" name="terminationreason" id="terminationreason" value="dasd" placeholder="Termination Reason" required />
              @error('terminationreason')
              <div class="text-danger">{{ $message }}</div>
               @enderror
            </div>
          </div>

          <div class="row">
            <div class="mb-1 col-md-6">
              <label class="form-label" for="voluntarytermination">Voluntary Termination</label>
              <select class="select2 w-100" name="voluntarytermination" id="voluntarytermination">
                <option>Yes</option>
                <option>No</option>
              </select>
              @error('voluntarytermination')
              <div class="text-danger">{{ $message }}</div>
               @enderror
            </div>
            <div class="mb-1 col-md-6">
              <label for="rehiredate">Re Hire Date</label>
              <input type="date" class="form-control" id="rehiredate" name="rehiredate" value="" placeholder="Enter date" required />
              @error('rehiredate')
              <div class="text-danger">{{ $message }}</div>
               @enderror
            </div>
          </div>

          <div class="row">
            <div class="mb-1 col-md-6">
              <label class="form-label" for="ratetype">Rate Type</label>
              <select class="select2 w-100" name="ratetype" id="ratetype">
                <option>Salary</option>
                <option>Hourly</option>
              </select>
              @error('ratetype')
              <div class="text-danger">{{ $message }}</div>
               @enderror
            </div>
            <div class="mb-1 col-md-6">
              <label for="rate">Rate</label>
              <input type="text" class="form-control" id="rate" name="rate" value="" placeholder="Enter Rate" required />
              @error('rate')
              <div class="text-danger">{{ $message }}</div>
               @enderror
            </div>
          </div>

          <div class="row">
            <div class="mb-1 col-md-6">
              <label class="form-label" for="payfrequency">Pay Frequency</label>
              <select class="select2 w-100" name="payfrequency" id="payfrequency">
                <option>Weekly</option>
                <option>Biweekly</option>
                <option>Monthly</option>
                <option>Annual</option>
              </select>
              @error('payfrequency')
              <div class="text-danger">{{ $message }}</div>
               @enderror
            </div>
            <div class="mb-1 col-md-6">
              <label for="payfrequencytext">Pay Frequency Text</label>
              <input type="text" class="form-control" id="payfrequencytext" name="payfrequencytext" value="" placeholder="Enter Pay Frequency Text" required />
              @error('payfrequencytext')
              <div class="text-danger">{{ $message }}</div>
               @enderror
            </div>
          </div>



          <div class="row">
            <div class="mb-1 col-md-6">
              <label class="form-label" for="homedepartment">Home Department</label>
              <input type="text" class="form-control" id="homedepartment" name="homedepartment" value="" placeholder="Enter Home Department" required />
              @error('homedepartment')
              <div class="text-danger">{{ $message }}</div>
               @enderror
            </div>
            <div class="mb-1 col-md-6">
              <label for="homedepartmenttext">Home Department Text</label>
              <input type="text" class="form-control" id="homedepartmenttext" name="homedepartmenttext" value="" placeholder="Enter Home Department Text" required />
              @error('homedepartmenttext')
              <div class="text-danger">{{ $message }}</div>
               @enderror
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
              <label class="form-label" for="dateofbirth">Date of Birth</label>
              <input type="date" class="form-control" name="dateofbirth" id="dateofbirth" value="" placeholder="Enter date" required />
              @error('dateofbirth')
              <div class="text-danger">{{ $message }}</div>
               @enderror
            </div>
            <div class="mb-1 col-md-6">
              <label class="form-label" for="gender">Gender</label>
              <select class="select2 w-100" name="gender" id="gender">
                <option>male</option>
                <option>Femail</option>
                <option>Other</option>
              </select>
              @error('gender')
              <div class="text-danger">{{ $message }}</div>
               @enderror
            </div>
          </div>
          <div class="row">
            <div class="mb-1 col-md-6">
              <label class="form-label" for="maritalstatus">Marital Status</label>
              <select class="select2 w-100" name="maritalstatus" id="maritalstatus">
                <option>Single</option>
                <option>Married</option>
                <option>Divorced</option>
                <option>Widowed</option>
                <option>Other</option>
              </select>
              @error('maritalstatus')
              <div class="text-danger">{{ $message }}</div>
               @enderror
            </div>
            <div class="mb-1 col-md-6">
              <label class="form-label" for="workinstate">Work in State</label>
              <select class="select2 w-100" name="workinstate" id="workinstate">
                <option>Yes</option>
                <option>No</option>
              </select>
              @error('workinstate')
              <div class="text-danger">{{ $message }}</div>
               @enderror
            </div>
          </div>

          <div class="row">
            <div class="mb-1 col-md-6">
              <label class="form-label" for="lineinstate">Line in State</label>
              <select class="select2 w-100" name="lineinstate" id="lineinstate">
                <option>Yes</option>
                <option>No</option>
              </select>
              @error('lineinstate')
              <div class="text-danger">{{ $message }}</div>
               @enderror
            </div>
            <div class="mb-1 col-md-6">
              <label class="form-label" for="citizenship">CitizenShip</label>
              <select class="select2 w-100" name="citizenship" id="citizenship">
                <option>Citizen</option>
                <option>Non-Citizen</option>
              </select>
              @error('citizenship')
              <div class="text-danger">{{ $message }}</div>
               @enderror
            </div>
          </div>

          <div class="row">
            <div class="mb-1 col-md-6">
              <label class="form-label" for="pictureupload">Picture Upload</label>
              <input class="form-control" type="file" id="pictureupload" name="pictureupload" />
              @error('pictureupload')
              <div class="text-danger">{{ $message }}</div>
               @enderror
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
              <label class="form-label" for="homeemail">Home Email</label>
              <input type="email" id="homeemail" name="homeemail" class="form-control" placeholder="Enter Home Email" />
              @error('homeemail')
              <div class="text-danger">{{ $message }}</div>
               @enderror
            </div>
            <div class="mb-1 col-md-6">
              <label class="form-label" for="homephone">Home Phone</label>
              <input type="text" name="homephone" id="homephone" class="form-control" placeholder="Enter Home Phone" />
              @error('homephone')
              <div class="text-danger">{{ $message }}</div>
               @enderror
            </div>
          </div>
          <div class="row">
            <div class="mb-1 col-md-6">
              <label class="form-label" for="businessphone">Business Phone</label>
              <input type="text" id="businessphone" name="businessphone" class="form-control" placeholder="Enter Business Phone" />
              @error('businessphone')
              <div class="text-danger">{{ $message }}</div>
               @enderror
            </div>
            <div class="mb-1 col-md-6">
              <label class="form-label" for="cellphone">Cell Phone</label>
              <input type="text" id="cellphone" name="cellphone" class="form-control" placeholder="Enter Cell Phone" />
              @error('cellphone')
              <div class="text-danger">{{ $message }}</div>
               @enderror
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
              <label class="form-label" for="emergencycontact">Emergency Contact</label>
              <input type="text" id="emergencycontact" name="emergencycontact" class="form-control" placeholder="Enter Emergency Contact" />
              @error('emergencycontact')
              <div class="text-danger">{{ $message }}</div>
               @enderror
            </div>
            <div class="mb-1 col-md-6">
              <label class="form-label" for="emergencyhome">Emergency Home</label>
              <input type="text" id="emergencyhome" name="emergencyhome" class="form-control" placeholder="Enter Emergency Home" />
              @error('emergencyhome')
              <div class="text-danger">{{ $message }}</div>
               @enderror
            </div>
          </div>
          <div class="row">
            <div class="mb-1 col-md-6">
              <label class="form-label" for="emergencycontactrelation">Emergency Contact Relation</label>
              <input type="text" id="emergencycontactrelation" name="emergencycontactrelation" class="form-control" placeholder="Enter Emergency Contact Relation" />
              @error('emergencycontactrelation')
              <div class="text-danger">{{ $message }}</div>
               @enderror
            </div>
            <div class="mb-1 col-md-6">
              <label class="form-label" for="alteremergencycontact">Alter Emergency Contact</label>
              <input type="text" id="alteremergencycontact" name="alteremergencycontact" class="form-control" placeholder="Enter Alter Emergency Contact" />
              @error('alteremergencycontact')
              <div class="text-danger">{{ $message }}</div>
               @enderror
            </div>
          </div>

          <div class="row">
            <div class="mb-1 col-md-6">
              <label class="form-label" for="alteremergencyphone">Alter Emergency Phone</label>
              <input type="text" id="alteremergencyphone" name="alteremergencyphone" class="form-control" placeholder="Enter Alter Emergency Phone" />
              @error('alteremergencyphone')
              <div class="text-danger">{{ $message }}</div>
               @enderror
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
              <label class="form-label" for="emails">Email</label>
              <input type="email" id="emails" name="emails" class="form-control" placeholder="Enter login Email" />
              @error('emails')
              <div class="text-danger">{{ $message }}</div>
               @enderror
            </div>
            <div class="mb-1 col-md-6">
              <label class="form-label" for="password">Password</label>
              <input type="password" name="password" id="password" class="form-control" placeholder="Enter login Password" />
              @error('password')
              <div class="text-danger">{{ $message }}</div>
               @enderror
            </div>
          </div>

        </form>
        </form>

        <div class="d-flex justify-content-between">
          <button class="btn btn-primary btn-prev">
            <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
            <span class="align-middle d-sm-inline-block d-none">Previous</span>
          </button>
          <button class="btn btn-success btn-submit">Submit</button>
        </div>

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