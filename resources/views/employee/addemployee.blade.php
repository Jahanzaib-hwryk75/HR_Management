@extends('layouts/contentLayoutMaster')
@section('content')
<form class="">

	<div class="row">
		<h4 class="card-title">Basic Info</h4>
		<div class="col-md-6 col-12">
			<div role="group" class="form-group" id="__BVID__1886"><label for="username" class="d-block" id="__BVID__1886__BV_label_">First Name</label>
				<div><input type="text" id="firstname" name="firstname" type="text" class="form-control">
				</div>
			</div>
		</div>
		<div class="col-md-6 col-12">
			<div role="group" class="form-group" id="__BVID__1888"><label for="full-name" class="d-block" id="__BVID__1888__BV_label_">Last Name</label>
				<div><input type="text" name="lastname" id="lastname" type="text" class="form-control">
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
				<div><input name="email" id="email" type="email" class="form-control">
				</div>
			</div>
		</div>
		<div class="col-md-4 col-12">
			<div role="group" class="form-group" id="__BVID__1886"><label for="username" class="d-block" id="__BVID__1886__BV_label_">Phone No</label>
				<div><input id="phonenumber" name="phonenumber" type="text" class="form-control">
				</div>
			</div>
		</div>
		<div class="col-md-4 col-12">
			<div role="group" class="form-group" id="__BVID__1888"><label for="full-name" class="d-block" id="__BVID__1888__BV_label_">Alternative Phone</label>
				<div><input id="alternativephone" name="alternativephone" type="text" class="form-control">
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
				<div> <select class="form-select" id="selectcountry" name="selectcountry">
                    <option></option>
                      <option></option>
                      <option></option>
                      <option></option>
                    </select> 
				</div>
			</div>
		</div>
		<div class="col-md-4 col-12">
			<div role="group" class="form-group" id="__BVID__1886"><label for="username" class="d-block" id="__BVID__1886__BV_label_">City</label>
				<div><input id="city" name="city" type="text" class="form-control">
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
				<div><input id="zipcode" type="text" name="zipcode" class="form-control">
				</div>
			</div>
		</div>
	</div>


	<div class="row">
		<h4 class="card-title my-2">Positional Information</h4>
		<div class="col-md-4 col-12">
			<div role="group" class="form-group" id="__BVID__1886"><label for="username" class="d-block" id="__BVID__1886__BV_label_">Division</label>
				<div><select class="form-select" id="division" name="division">
                    <option></option>
                      <option></option>
                      <option></option>
                      <option></option>
                    </select> 
				</div>
			</div>
		</div>
		<div class="col-md-4 col-12">
			<div role="group" class="form-group" id="__BVID__1888"><label for="full-name" class="d-block" id="__BVID__1888__BV_label_">Position</label>
				<div><select class="form-select" id="positionname" name="positionname">
                    <option></option>
                      <option></option>
                      <option></option>
                      <option></option>
                    </select> 
				</div>
			</div>
		</div>
		<div class="col-md-4 col-12">
			<div role="group" class="form-group" id="__BVID__1890"><label for="dutytype" class="d-block" id="__BVID__1890__BV_label_">Duty Type</label>
				<div><select class="form-select" id="dutytype" name="dutytype">
                    <option></option>
                      <option></option>
                      <option></option>
                      <option></option>
                    </select> 
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 col-12">
			<div role="group" class="form-group" id="__BVID__1886"><label for="hiredate" class="d-block" id="__BVID__1886__BV_label_">Hire Date</label>
				<div><input id="hiredate" name="hiredate" type="date" class="form-control">
				</div>
			</div>
		</div>
		<div class="col-md-4 col-12">
			<div role="group" class="form-group" id="__BVID__1888"><label for="fterminationdate" class="d-block" id="__BVID__1888__BV_label_">Termination Date</label>
				<div><input id="terminationdate" name="terminationdate" type="date" class="form-control">
				</div>
			</div>
		</div>
		<div class="col-md-4 col-12">
			<div role="group" class="form-group" id="__BVID__1888"><label for="rehiredate" class="d-block" id="__BVID__1888__BV_label_">Re Hire Date</label>
				<div><input id="rehiredate" name="rehiredate" type="date" class="form-control">
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
			<div role="group" class="form-group" id="__BVID__1886"><label for="username" class="d-block" id="__BVID__1886__BV_label_">Voluntary Termination</label>
				<div><input id="username" type="text" class="form-control">
				</div>
			</div>
		</div>
		<div class="col-md-4 col-12">
			<div role="group" class="form-group" id="__BVID__1890"><label for="email" class="d-block" id="__BVID__1890__BV_label_">Termination Reason</label>
				<div><input id="email" type="email" class="form-control">
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
			<div role="group" class="form-group" id="__BVID__1890"><label for="email" class="d-block" id="__BVID__1890__BV_label_">Rate Type</label>
				<div><input id="email" type="email" class="form-control">
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 col-12">
			<div role="group" class="form-group" id="__BVID__1886"><label for="username" class="d-block" id="__BVID__1886__BV_label_">Rate</label>
				<div><input id="username" type="text" class="form-control">
				</div>
			</div>
		</div>
		<div class="col-md-4 col-12">
			<div role="group" class="form-group" id="__BVID__1888"><label for="full-name" class="d-block" id="__BVID__1888__BV_label_">Pay Frequency</label>
				<div><input id="full-name" type="text" class="form-control">
				</div>
			</div>
		</div>
		<div class="col-md-4 col-12">
			<div role="group" class="form-group" id="__BVID__1890"><label for="email" class="d-block" id="__BVID__1890__BV_label_">Pay Frequency Text</label>
				<div><input id="email" type="email" class="form-control">
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 col-12">
			<div role="group" class="form-group" id="__BVID__1886"><label for="username" class="d-block" id="__BVID__1886__BV_label_">Home Department</label>
				<div><input id="username" type="text" class="form-control">
				</div>
			</div>
		</div>
		<div class="col-md-4 col-12">
			<div role="group" class="form-group" id="__BVID__1888"><label for="full-name" class="d-block" id="__BVID__1888__BV_label_">Department Text</label>
				<div><input id="full-name" type="text" class="form-control">
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
			<div role="group" class="form-group" id="__BVID__1890"><label for="email" class="d-block" id="__BVID__1890__BV_label_">Date of Birth*</label>
				<div><input id="email" type="email" class="form-control">
				</div>
			</div>
		</div>
		<div class="col-md-4 col-12">
			<div role="group" class="form-group" id="__BVID__1886"><label for="username" class="d-block" id="__BVID__1886__BV_label_">Gender</label>
				<div><input id="username" type="text" class="form-control">
				</div>
			</div>
		</div>
		<div class="col-md-4 col-12">
			<div role="group" class="form-group" id="__BVID__1888"><label for="full-name" class="d-block" id="__BVID__1888__BV_label_">Marital Status</label>
				<div><input id="full-name" type="text" class="form-control">
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
			<div role="group" class="form-group" id="__BVID__1890"><label for="email" class="d-block" id="__BVID__1890__BV_label_">Work in State</label>
				<div><input id="email" type="email" class="form-control">
				</div>
			</div>
		</div>
		<div class="col-md-4 col-12">
			<div role="group" class="form-group" id="__BVID__1886"><label for="username" class="d-block" id="__BVID__1886__BV_label_">
					Live in State</label>
				<div><input id="username" type="text" class="form-control">
				</div>
			</div>
		</div>
		<div class="col-md-4 col-12">
			<div role="group" class="form-group" id="__BVID__1888"><label for="full-name" class="d-block" id="__BVID__1888__BV_label_">Citizenship</label>
				<div><input id="full-name" type="text" class="form-control">
				</div>
			</div>
		</div>
		<div class="col-md-4 col-12">
			<div role="group" class="form-group" id="__BVID__1890"><label for="email" class="d-block" id="__BVID__1890__BV_label_">
					Photograph</label>
				<div><input id="email" type="email" class="form-control">
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<h4 class="card-title my-2">Additional Address</h4>
		<div class="col-md-4 col-12">
			<div role="group" class="form-group" id="__BVID__1886"><label for="username" class="d-block" id="__BVID__1886__BV_label_">Home Email</label>
				<div><input id="username" type="text" class="form-control">
				</div>
			</div>
		</div>
		<div class="col-md-4 col-12">
			<div role="group" class="form-group" id="__BVID__1888"><label for="full-name" class="d-block" id="__BVID__1888__BV_label_">Home Phone</label>
				<div><input id="full-name" type="text" class="form-control">
				</div>
			</div>
		</div>
		<div class="col-md-4 col-12">
			<div role="group" class="form-group" id="__BVID__1890"><label for="email" class="d-block" id="__BVID__1890__BV_label_">Business Phone</label>
				<div><input id="email" type="email" class="form-control">
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 col-12">
			<div role="group" class="form-group" id="__BVID__1886"><label for="username" class="d-block" id="__BVID__1886__BV_label_">Cell Phone</label>
				<div><input id="username" type="text" class="form-control">
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
			<div role="group" class="form-group" id="__BVID__1886"><label for="username" class="d-block" id="__BVID__1886__BV_label_">Emergency Contact Relation</label>
				<div><input id="username" type="text" class="form-control">
				</div>
			</div>
		</div>
		<div class="col-md-4 col-12">
			<div role="group" class="form-group" id="__BVID__1888"><label for="full-name" class="d-block" id="__BVID__1888__BV_label_">Alter Emergency Contact</label>
				<div><input id="full-name" type="text" class="form-control">
				</div>
			</div>
		</div>
		<div class="col-md-4 col-12">
			<div role="group" class="form-group" id="__BVID__1890"><label for="email" class="d-block" id="__BVID__1890__BV_label_">Alt Emergency Home Phone</label>
				<div><input id="email" type="email" class="form-control">
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 col-12">
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
		</div>
	</div>
	<div class="row">
		<h4 class="card-title my-2">Login Info</h4>
		<div class="col-md-4 col-12">
			<div role="group" class="form-group" id="__BVID__1886"><label for="username" class="d-block" id="__BVID__1886__BV_label_">User Email</label>
				<div><input id="username" type="text" class="form-control">
				</div>
			</div>
		</div>
		<div class="col-md-4 col-12">
			<div role="group" class="form-group" id="__BVID__1888"><label for="full-name" class="d-block" id="__BVID__1888__BV_label_">Password</label>
				<div><input id="full-name" type="text" class="form-control">
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