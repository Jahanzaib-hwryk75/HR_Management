@extends('layouts/contentLayoutMaster')
@section('content')
<form class="" action="{{ url('/admin/saveemployee')}}" method="POST" enctype="multipart/form-data">
@csrf
	<div class="row">
		<h4 class="card-title">Basic Info</h4>
		<div class="col-md-6 col-12">
			<div role="group" class="form-group" id="__BVID__1886"><label for="username" class="d-block" id="__BVID__1886__BV_label_">First Name</label>
				<div><input type="text" id="firstname" name="firstname" type="text" class="form-control" required>
				</div>
			</div>
		</div>
		<div class="col-md-6 col-12">
			<div role="group" class="form-group" id="__BVID__1888"><label for="full-name" class="d-block" id="__BVID__1888__BV_label_">Last Name</label>
				<div><input type="text" name="lastname" id="lastname" type="text" class="form-control" required>
				</div>
			</div>
		</div>
		<!-- <div class="col-md-4 col-12">
			<div role="group" class="form-group" id="__BVID__1890"><label for="email" class="d-block" id="__BVID__1890__BV_label_">Email Address</label>
				<div><input id="email" type="email" class="form-control">
				</div>
			</div>
		</div> -->
	</div>
	<div class="row">
		<div class="col-md-4 col-12">
			<div role="group" class="form-group" id="__BVID__1890"><label for="email" class="d-block" id="__BVID__1890__BV_label_">Email Address</label>
				<div><input name="email" id="email" type="email" class="form-control" required>
				</div>
			</div>
		</div>
		<div class="col-md-4 col-12">
			<div role="group" class="form-group" id="__BVID__1886"><label for="username" class="d-block" id="__BVID__1886__BV_label_">Phone No</label>
				<div><input id="phonenumber" name="phonenumber" type="text" class="form-control" required>
				</div>
			</div>
		</div>
		<div class="col-md-4 col-12">
			<div role="group" class="form-group" id="__BVID__1888"><label for="full-name" class="d-block" id="__BVID__1888__BV_label_">Alternative Phone</label>
				<div><input id="alternativephone" name="alternativephone" type="text" class="form-control" required>
				</div>
			</div>
		</div>
		<!-- <div class="col-md-4 col-12">
			<div role="group" class="form-group" id="__BVID__1890"><label for="email" class="d-block" id="__BVID__1890__BV_label_">Country</label>
				<div><input id="email" type="email" class="form-control">
				</div>
			</div>
		</div> -->
	</div>
	<div class="row">
		<div class="col-md-4 col-12">
			<div role="group" class="form-group" id="__BVID__1890"><label for="email" class="d-block" id="__BVID__1890__BV_label_">Country</label>
				<div> <select class="form-select" id="selectcountry" name="selectcountry" required>
                    <option value="null">Select Country</option>
					@foreach($user as $user)
                      <option>{{$user->couuntryname}}</option>
					  @endforeach
                      
                    </select> 
				</div>
			</div>
		</div>
		<div class="col-md-4 col-12">
			<div role="group" class="form-group" id="__BVID__1886"><label for="username" class="d-block" id="__BVID__1886__BV_label_">City</label>
				<div><input id="city" name="city" type="text" class="form-control" required>
				</div>
			</div>
		</div>
		<!-- <div class="col-md-4 col-12">
			<div role="group" class="form-group" id="__BVID__1888"><label for="full-name" class="d-block" id="__BVID__1888__BV_label_">Name</label>
				<div><input id="full-name" type="text" class="form-control">
				</div>
			</div>
		</div> -->
		<div class="col-md-4 col-12">
			<div role="group" class="form-group" id="__BVID__1890"><label for="email" class="d-block" id="__BVID__1890__BV_label_">Zip Code</label>
				<div><input id="zipcode" type="text" name="zipcode" class="form-control" required>
				</div>
			</div>
		</div>
	</div>


	<div class="row">
		<h4 class="card-title my-2">Positional Information</h4>
		<div class="col-md-4 col-12">
			<div role="group" class="form-group" id="__BVID__1886"><label for="username" class="d-block" id="__BVID__1886__BV_label_">Division</label>
				<div><select class="form-select" id="division" name="division" required>
                    <option value="null">Select Division</option>
                      <option>Account</option>
                      <option>Admin</option>
                      <option></option>
                    </select> 
				</div>
			</div>
		</div>
		<div class="col-md-4 col-12">
			<div role="group" class="form-group" id="__BVID__1888"><label for="full-name" class="d-block" id="__BVID__1888__BV_label_">Position</label>
				<div><select class="form-select" id="positionname" name="positionname" required>
                    <option value="null">Select Position</option>
					@foreach($position as $position )
                      <option>{{$position->positionname}}</option>
					  @endforeach
                      
                    </select> 
				</div>
			</div>
		</div>
		<div class="col-md-4 col-12">
			<div role="group" class="form-group" id="__BVID__1890"><label for="dutytype" class="d-block" id="__BVID__1890__BV_label_">Duty Type</label>
				<div><select class="form-select" id="dutytype" name="dutytype" required>
                    <option value="null">Select Duty Type</option>
					@foreach($data as $data)
                      <option>{{$data->dutytime}}</option>
                      @endforeach
                    </select> 
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 col-12">
			<div role="group" class="form-group" id="__BVID__1886"><label for="hiredate" class="d-block" id="__BVID__1886__BV_label_">Hire Date</label>
				<div><input id="hiredate" name="hiredate" type="date" class="form-control" required>
				</div>
			</div>
		</div>
		<div class="col-md-4 col-12">
			<div role="group" class="form-group" id="__BVID__1888"><label for="fterminationdate" class="d-block" id="__BVID__1888__BV_label_">Termination Date</label>
				<div><input id="terminationdate" name="terminationdate" type="date" class="form-control" required>
				</div>
			</div>
		</div>
		<div class="col-md-4 col-12">
			<div role="group" class="form-group" id="__BVID__1888"><label for="rehiredate" class="d-block" id="__BVID__1888__BV_label_">Re Hire Date</label>
				<div><input id="rehiredate" name="rehiredate" type="date" class="form-control" required>
				</div>
			</div>
		</div>
		<!-- <div class="col-md-4 col-12">
			<div role="group" class="form-group" id="__BVID__1890"><label for="email" class="d-block" id="__BVID__1890__BV_label_">Termination Reason</label>
				<div><input id="email" type="email" class="form-control">
				</div>
			</div>
		</div> -->
	</div>
	<div class="row">
		<div class="col-md-4 col-12">
			<div role="group" class="form-group" id="__BVID__1886"><label for="voluntarytermination" class="d-block" id="__BVID__1886__BV_label_">Voluntary Termination</label>
				<div><input id="voluntarytermination" name="voluntarytermination" type="text" class="form-control" required>
				</div>
			</div>
		</div>
		<div class="col-md-4 col-12">
			<div role="group" class="form-group" id="__BVID__1890"><label for="terminationreason" class="d-block" id="__BVID__1890__BV_label_">Termination Reason</label>
				<div><input id="terminationreason" name="terminationreason" type="text" class="form-control" required>
				</div>
			</div>
		</div>
		<!-- <div class="col-md-4 col-12">
			<div role="group" class="form-group" id="__BVID__1888"><label for="full-name" class="d-block" id="__BVID__1888__BV_label_">Re Hire Date</label>
				<div><input id="full-name" type="text" class="form-control">
				</div>
			</div>
		</div> -->
		<div class="col-md-4 col-12">
			<div role="group" class="form-group" id="__BVID__1890"><label for="ratetype" class="d-block" id="__BVID__1890__BV_label_">Rate Type</label>
				<div><input id="ratetype" name="ratetype" type="text" class="form-control" required>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 col-12">
			<div role="group" class="form-group" id="__BVID__1886"><label for="rate" class="d-block" id="__BVID__1886__BV_label_">Rate</label>
				<div><input id="rate" name="rate" type="text" class="form-control" required>
				</div>
			</div>
		</div>
		<div class="col-md-4 col-12">
			<div role="group" class="form-group" id="__BVID__1888"><label for="payfrequency" class="d-block" id="__BVID__1888__BV_label_">Pay Frequency</label>
				<div><input id="payfrequency" name="payfrequency" type="text" class="form-control" required>
				</div>
			</div>
		</div>
		<div class="col-md-4 col-12">
			<div role="group" class="form-group" id="__BVID__1890"><label for="payfrequencytext" class="d-block" id="__BVID__1890__BV_label_">Pay Frequency Text</label>
				<div><input id="payfrequencytext" name="payfrequencytext" type="text" class="form-control" required>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 col-12">
			<div role="group" class="form-group" id="__BVID__1886"><label for="homedepartment" class="d-block" id="__BVID__1886__BV_label_">Home Department</label>
				<div><input id="homedepartment" name="homedepartment" type="text" class="form-control" required>
				</div>
			</div>
		</div>
		<div class="col-md-4 col-12">
			<div role="group" class="form-group" id="__BVID__1888"><label for="homedepartmenttext" class="d-block" id="__BVID__1888__BV_label_">Department Text</label>
				<div><input id="homedepartmenttext" name="homedepartmenttext" type="text" class="form-control" required>
				</div>
			</div>
		</div>
		<!-- <div class="col-md-4 col-12">
			<div role="group" class="form-group" id="__BVID__1890"><label for="email" class="d-block" id="__BVID__1890__BV_label_">Date of Birth*</label>
				<div><input id="email" type="email" class="form-control">
				</div>
			</div>
		</div> -->
	</div>
	<div class="row">
		<h4 class="card-title my-2">Biographical Info</h4>
		<div class="col-md-4 col-12">
			<div role="group" class="form-group" id="__BVID__1890"><label for="dateofbirth" class="d-block" id="__BVID__1890__BV_label_">Date of Birth*</label>
				<div><input id="dateofbirth" name="dateofbirth" type="date" class="form-control" required>
				</div>
			</div>
		</div>
		<div class="col-md-4 col-12">
			<div role="group" class="form-group" id="__BVID__1886"><label for="gender" class="d-block" id="__BVID__1886__BV_label_">Gender</label>
				<div><select class="form-select" id="gender" name="gender" required>
                    <option></option>
                      <option>Male</option>
                      <option>Female</option>
                   
                    </select> 
				</div>
			</div>
		</div>
		<div class="col-md-4 col-12">
			<div role="group" class="form-group" id="__BVID__1888"><label for="maritalstatus" class="d-block" id="__BVID__1888__BV_label_">Marital Status</label>
				<div><select class="form-select" id="maritalstatus" name="maritalstatus" required>
                    <option></option>
                      <option>Single</option>
                      <option>Married</option>
                    </select> 
				</div>
			</div>
		</div>
		<!-- <div class="col-md-4 col-12">
			<div role="group" class="form-group" id="__BVID__1890"><label for="email" class="d-block" id="__BVID__1890__BV_label_">Work in State</label>
				<div><input id="email" type="email" class="form-control">
				</div>
			</div>
		</div> -->
	</div>
	<div class="row">
		<div class="col-md-4 col-12">
			<div role="group" class="form-group" id="__BVID__1890"><label for="workinstate" class="d-block" id="__BVID__1890__BV_label_">Work in State</label>
				<div><select class="form-select" id="workinstate" name="workinstate" required>
                    <option></option>
                      <option>Yes</option>
                      <option>No</option>
                    </select>
				</div>
			</div>
		</div>
		<div class="col-md-4 col-12">
			<div role="group" class="form-group" id="__BVID__1886"><label for="lineinstate" class="d-block" id="__BVID__1886__BV_label_">
					Live in State</label>
				<div><select class="form-select" id="lineinstate" name="lineinstate" required>
                    <option></option>
                      <option>Yes</option>
                      <option>No</option>
                    </select>
				</div>
			</div>
		</div>
		<div class="col-md-4 col-12">
			<div role="group" class="form-group" id="__BVID__1888"><label for="citizenship" class="d-block" id="__BVID__1888__BV_label_">Citizenship</label>
				<div><select class="form-select" id="citizenship" name="citizenship" required>
                    <option></option>
                      <option>Citizen Ship</option>
                      <option>Non Citizen Ship</option>
                    </select>
				</div>
			</div>
		</div>
		<div class="col-md-4 col-12">
			<div role="group" class="form-group" id="__BVID__1890"><label for="pictureupload" class="d-block" id="__BVID__1890__BV_label_">
					Photograph</label>
				<div><input id="pictureupload" name="pictureupload" type="file" class="form-control" required>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<h4 class="card-title my-2">Additional Address</h4>
		<div class="col-md-4 col-12">
			<div role="group" class="form-group" id="__BVID__1886"><label for="homeemail" class="d-block" id="__BVID__1886__BV_label_">Home Email</label>
				<div><input id="homeemail" name="homeemail" type="email" class="form-control" required>
				</div>
			</div>
		</div>
		<div class="col-md-4 col-12">
			<div role="group" class="form-group" id="__BVID__1888"><label for="homephone" class="d-block" id="__BVID__1888__BV_label_">Home Phone</label>
				<div><input id="homephone" name="homephone" type="text" class="form-control" required>
				</div>
			</div>
		</div>
		<div class="col-md-4 col-12">
			<div role="group" class="form-group" id="__BVID__1890"><label for="businessphone" class="d-block" id="__BVID__1890__BV_label_">Business Phone</label>
				<div><input id="businessphone" name="businessphone" type="text" class="form-control" required>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 col-12">
			<div role="group" class="form-group" id="__BVID__1886"><label for="cellphone" class="d-block" id="__BVID__1886__BV_label_">Cell Phone</label>
				<div><input id="cellphone" name="cellphone" type="text" class="form-control" required>
				</div>
			</div>
		</div>
		<!-- <div class="col-md-4 col-12">
			<div role="group" class="form-group" id="__BVID__1888"><label for="full-name" class="d-block" id="__BVID__1888__BV_label_">Emergency Contact</label>
				<div><input id="full-name" type="text" class="form-control">
				</div>
			</div>
		</div>
		<div class="col-md-4 col-12">
			<div role="group" class="form-group" id="__BVID__1890"><label for="email" class="d-block" id="__BVID__1890__BV_label_">Emergency Home Phone</label>
				<div><input id="email" type="email" class="form-control">
				</div>
			</div>
		</div> -->
	</div>
	<div class="row">
		<h4 class="card-title my-2">Emergency Contact</h4>
		<div class="col-md-4 col-12">
			<div role="group" class="form-group" id="__BVID__1886"><label for="emergencycontactrelation" class="d-block" id="__BVID__1886__BV_label_">Emergency Contact Relation</label>
				<div><input id="emergencycontactrelation" name="emergencycontactrelation" type="text" class="form-control" required>
				</div>
			</div>
		</div>
		<div class="col-md-4 col-12">
			<div role="group" class="form-group" id="__BVID__1888"><label for="emergencycontact" class="d-block" id="__BVID__1888__BV_label_">Alter Emergency Contact</label>
				<div><input id="emergencycontact" name="emergencycontact" type="text" class="form-control" required>
				</div>
			</div>
		</div>
		<div class="col-md-4 col-12">
			<div role="group" class="form-group" id="__BVID__1890"><label for="emergencyhome" class="d-block" id="__BVID__1890__BV_label_">Alt Emergency Home Phone</label>
				<div><input id="emergencyhome" name="emergencyhome" type="text" class="form-control" required>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 col-12">
			<div role="group" class="form-group" id="__BVID__1888"><label for="alteremergencycontact" class="d-block" id="__BVID__1888__BV_label_">Emergency Contact</label>
				<div><input id="alteremergencycontact" name="alteremergencycontact" type="text" class="form-control" required>
				</div>
			</div>
		</div>
		<div class="col-md-4 col-12">
			<div role="group" class="form-group" id="__BVID__1890"><label for="alteremergencyphone" class="d-block" id="__BVID__1890__BV_label_">Emergency Home Phone</label>
				<div><input id="alteremergencyphone" name="alteremergencyphone" type="text" class="form-control" required>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<h4 class="card-title my-2">Login Info</h4>
		<div class="col-md-4 col-12">
			<div role="group" class="form-group" id="__BVID__1886"><label for="emails" class="d-block" id="__BVID__1886__BV_label_">User Email</label>
				<div><input id="emails" name="emails" type="email" class="form-control" required>
				</div>
			</div>
		</div>
		<div class="col-md-4 col-12">
			<div role="group" class="form-group" id="__BVID__1888"><label for="password" class="d-block" id="__BVID__1888__BV_label_">Password</label>
				<div><input id="password" name="password" type="password" class="form-control" required>
				</div>
			</div>
		</div>

	</div>
	<div class="col-sm-8 offset-sm-5 my-2">
		<button type="submit" class="btn btn-primary me-1">Submit</button>
	</div>


	</div>
</form>
@endsection