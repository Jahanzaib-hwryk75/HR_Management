@extends('layouts/contentLayoutMaster')
@section('content')
<style>
	body {
		background: #eee
	}

	#regForm {
		background-color: #ffffff;
		margin: 0px auto;
		font-family: Raleway;
		padding: 40px;
		border-radius: 10px
	}

	h1 {
		text-align: center
	}

	input {
		padding: 10px;
		width: 100%;
		font-size: 17px;
		font-family: Raleway;
		border: 1px solid #aaaaaa
	}

	input.invalid {
		background-color: #ffdddd
	}

	.tab {
		display: none
	}

	.tab label {
		font-size: 15px;
	}

	.tab select {
		padding: 10px;
		width: 100%;
		font-size: 17px;
		font-family: Raleway;
		border: 1px solid #aaaaaa;
		margin-bottom: 13px;
	}

	button {
		background-color: #4CAF50;
		color: #ffffff;
		border: none;
		padding: 10px 20px;
		font-size: 17px;
		font-family: Raleway;
		cursor: pointer
	}

	button:hover {
		opacity: 0.8
	}

	#prevBtn {
		background-color: #bbbbbb
	}

	.step {
		height: 15px;
		width: 15px;
		margin: 0 2px;
		background-color: #bbbbbb;
		border: none;
		border-radius: 50%;
		display: inline-block;
		opacity: 0.5
	}

	.step.active {
		opacity: 1
	}

	.step.finish {
		background-color: #4CAF50
	}

	.all-steps {
		text-align: center;
		margin-top: 30px;
		margin-bottom: 30px
	}

	.thanks-message {
		display: none
	}

	.container {
		display: block;
		position: relative;
		padding-left: 35px;
		margin-bottom: 12px;
		cursor: pointer;
		font-size: 22px;
		-webkit-user-select: none;
		-moz-user-select: none;
		-ms-user-select: none;
		user-select: none
	}

	.container input[type="radio"] {
		position: absolute;
		opacity: 0;
		cursor: pointer
	}

	.checkmark {
		position: absolute;
		top: 0;
		left: 0;
		height: 25px;
		width: 25px;
		background-color: #eee;
		border-radius: 50%
	}

	.container:hover input~.checkmark {
		background-color: #ccc
	}

	.container input:checked~.checkmark {
		background-color: #2196F3
	}

	.checkmark:after {
		content: "";
		position: absolute;
		display: none
	}

	.container input:checked~.checkmark:after {
		display: block
	}

	.container .checkmark:after {
		top: 9px;
		left: 9px;
		width: 8px;
		height: 8px;
		border-radius: 50%;
		background: white
	}
</style>

<div class="container mt-5">
	<div class="row d-flex justify-content-center align-items-center">
		<div class="col-md-6">
			<form id="regForm" action="{{url('/admin/saveemployee')}}" method="post" enctype="multipart/form-data">
				<h1 id="register">Add Employee</h1>
				<div class="all-steps" id="all-steps"> <span class="step"></span> <span class="step"></span> <span class="step"></span> <span class="step"></span><span class="step"></span> </div>
				<!-- <div class="tab">
                    <h3>Donation Type:</h3> <label class="container">One time <input type="radio" checked="checked" name="radio"> <span class="checkmark"></span> </label> <label class="container">Recurring <input type="radio" name="radio"> <span class="checkmark"></span> </label>
                    <p><input type="text" placeholder="Amount" oninput="this.className = ''" name="amount"></p>
                </div> -->
				<div class="tab">
					<label for="">First Name</label>
					<p><input placeholder="First Name" value="" oninput="this.className = ''" name="firstname" required></p>
					<label for="">Last Name</label>
					<p><input placeholder="Last Name" value="" oninput="this.className = ''" name="lastname" required></p>
					<label for="">Email Address</label>
					<p><input placeholder="Email" value="" oninput="this.className = ''" name="email" required></p>
					<label for="">Phone Number</label>
					<p><input placeholder="Phone Number" value="" oninput="this.className = ''" name="phonenumber" required></p>
					<label for="">Alternative Phone</label>
					<p><input placeholder="Alternative Phone" value="" oninput="this.className = ''" name="alternativephone" required></p>
					<label for="">Country</label>
					<p><select name="selectcountry" required>
					<option value="null">Select Country</option>
						@foreach($user as $user)
						<option>{{$user->couuntryname}}</option>
						@endforeach
					</select></p>
				
					<label for="">City</label>
					<p><input placeholder="City" value="" oninput="this.className = ''" name="city" required></p>
					<label for="">Zip Code</label>
					<p><input placeholder="Zip Code" value="" oninput="this.className = ''" name="zipcode" required></p>
				</div>
				<div class="tab">
					<label for="">Division</label>
					<select id="division" name="division" required>
						<option value="1">January</option>
						<option value="2">February</option>
						<option value="3">March</option>
						<option value="4">April</option>
						<option value="5">May</option>
						<option value="6">June</option>
						<option value="7">July</option>
						<option value="8">August</option>
						<option value="9">September</option>
						<option value="10">October</option>
						<option value="11">November</option>
						<option value="12">December</option>
					</select>
					<label for="">Position</label>
					<select id="position" name="positionname" required>
						<option value="null">Select Position</option>
						@foreach($position as $position)
						<option value="2">{{$position->positionname}}</option>
						@endforeach
					</select>
					<label for="">Duty Type</label>
					<select id="dutytype" name="dutytype" required>
					<option value="null">Select Duty Time</option>
						@foreach($data as $data)
						<option>{{$data->dutytime}}</option>
						@endforeach
					</select>
					<label for="">Hire Date</label>
					<p><input type="date" placeholder="Hire Date" oninput="this.className = ''" name="hiredate" required></p>
					<label for="">Termination Date</label>
					<p><input type="date" placeholder="Termination Date" oninput="this.className = ''" name="terminationdate" required></p>
					<label for="">Termination Reason</label>
					<p><input type="text" placeholder="Termination Reason" oninput="this.className = ''" name="terminationreason" required></p>
					<label for="">Voluntary Termination</label>
					<select id="voluntarytermination" name="voluntarytermination" required>
						<option value="1">Yes</option>
						<option value="2">No</option>
					</select>
					<label for="">Re Hire Date</label>
					<p><input type="date" placeholder="Re Hire Date" oninput="this.className = ''" name="rehiredate" required></p>
					<label for="">Rate Type</label>
					<select id="ratetype" name="ratetype" required>
						<option value="1">Hourly</option>
						<option value="2">Salary</option>
					</select>
					<label for="">Rate</label>
					<p><input placeholder="Rate" oninput="this.className = ''" name="rate" required></p>
					<label for="">Pay Frequency</label>
					<select id="payfrequency" name="payfrequency" required>
						<option value="1">Yes</option>
						<option value="2">No</option>
					</select>
					<label for="">Pay Frequency Text</label>
					<p><input placeholder="Pay Frequency Text" oninput="this.className = ''" name="payfrequencytext" required></p>
					<label for="">Home Department</label>
					<p><input placeholder="Home Department" oninput="this.className = ''" name="homedepartment" required></p>
					<label for="">Department Text</label>
					<p><input placeholder="Department Text" oninput="this.className = ''" name="homedepartmenttext" required></p>
					<!-- <p><input placeholder="Country" oninput="this.className = ''" name="country"></p> -->
				</div>
				<div class="tab">
					<label for="">Date of Birth</label>
					<p><input type="date" placeholder="Date of Birth" oninput="this.className = ''" name="dateofbirth"></p>
					<label for="">Gender</label>
					<select id="gender" name="gender">
						<option>Male</option>
						<option>Female</option>
					</select>
					<label for="">Marital Status</label>
					<select id="maritalstatus" name="maritalstatus">
						<option>Single</option>
						<option>Married</option>

					</select>
					<label for="">Work in State</label>
					<select id="workinstate" name="workinstate">
						<option>Yes</option>
						<option>No</option>
					</select>
					<label for="">Live in State</label>
					<select id="lineinstate" name="lineinstate">
						<option>Yes</option>
						<option>No</option>
					</select>
					<label for="">Citizenship</label>
					<select id="citizenship" name="citizenship">
						<option>Citizen</option>
						<option>Non-Citizen</option>
					</select>
					<label for="">Photograph</label>
					<p><input type="file" placeholder="Photograph" oninput="this.className = ''" name="pictureupload"></p>
				</div>
				<div class="tab">
					<label for="">Home Email</label>
					<p><input placeholder="Home Email" oninput="this.className = ''" name="homeemail"></p>
					<label for="">Home Phone</label>
					<p><input placeholder="Home Phone" oninput="this.className = ''" name="homephone"></p>
					<label for="">Business Phone</label>
					<p><input placeholder="Business Phone" oninput="this.className = ''" name="businessphone"></p>
					<label for="">Cell Phone</label>
					<p><input placeholder="Cell Phone" oninput="this.className = ''" name="cellphone"></p>
				</div>
				<div class="tab">
					<label for="">Emergency Contact</label>
					<p><input placeholder="Emergency Contact" oninput="this.className = ''" name="emergencycontact"></p>
					<label for="">Emergency Home Phone</label>
					<p><input placeholder="Emergency Home Phone" oninput="this.className = ''" name="emergencyhome"></p>
					<label for="">Emergency Contact Relation</label>
					<p><input placeholder="Phone" oninput="this.className = ''" name="emergencycontactrelation"></p>
					<label for="">Alter Emergency Contact</label>
					<p><input placeholder="Alter Emergency Contact" oninput="this.className = ''" name="alteremergencycontact"></p>
					<label for="">Alt Emergency Home Phone </label>
					<p><input placeholder="Alt Emergency Home Phone" oninput="this.className = ''" name="alteremergencyphone"></p>
				</div>
				<div class="tab">
					<label for="">Email</label>
					<p><input placeholder="Email" oninput="this.className = ''" name="emails" type="email"></p>
					<label for="">Password</label>
					<p><input placeholder="Enter Password" oninput="this.className = ''" name="password" type="password"></p>
					
				</div>
				<div class="thanks-message text-center" id="text-message"> <img src="https://i.imgur.com/O18mJ1K.png" width="100" class="mb-4">
                    <h3>Thanks for your Donation!</h3> <span>Your donation has been entered! We will contact you shortly!</span>
                </div>
				<div style="overflow:auto;" id="nextprevious">
					<div style="float:right;"> <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button> <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button> </div>
				</div>
			</form>
		</div>
	</div>
</div>

<script>
	//your javascript goes here
	var currentTab = 0;
	document.addEventListener("DOMContentLoaded", function(event) {


		showTab(currentTab);

	});

	function showTab(n) {
		var x = document.getElementsByClassName("tab");
		x[n].style.display = "block";
		if (n == 0) {
			document.getElementById("prevBtn").style.display = "none";
		} else {
			document.getElementById("prevBtn").style.display = "inline";
		}
		if (n == (x.length - 1)) {
			document.getElementById("nextBtn").innerHTML = "Submit";
		} else {
			document.getElementById("nextBtn").innerHTML = "Next";
		}
		fixStepIndicator(n)
	}

	function nextPrev(n) {
		var x = document.getElementsByClassName("tab");
		if (n == 1 && !validateForm()) return false;
		x[currentTab].style.display = "none";
		currentTab = currentTab + n;
		if (currentTab >= x.length) {
			// document.getElementById("regForm").submit();
			// return false;
			// alert("sdf");
			document.getElementById("nextprevious").style.display = "none";
			document.getElementById("all-steps").style.display = "none";
			document.getElementById("register").style.display = "none";
			document.getElementById("text-message").style.display = "block";




		}
		showTab(currentTab);
	}

	function validateForm() {
		var x, y, i, valid = true;
		x = document.getElementsByClassName("tab");
		y = x[currentTab].getElementsByTagName("input");
		for (i = 0; i < y.length; i++) {
			if (y[i].value == "") {
				y[i].className += " invalid";
				valid = false;
			}
		}
		if (valid) {
			document.getElementsByClassName("step")[currentTab].className += " finish";
		}
		return valid;
	}

	function fixStepIndicator(n) {
		var i, x = document.getElementsByClassName("step");
		for (i = 0; i < x.length; i++) {
			x[i].className = x[i].className.replace(" active", "");
		}
		x[n].className += " active";
	}
</script>
@endsection