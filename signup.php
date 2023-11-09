<?php 
session_start(); 
require("files/config.php");

if (isset($_POST['submit'])) {

	function validate($data){
		return htmlspecialchars(stripslashes(trim($data)));
	}

	$patient_number = mt_rand(10000,99999);
	$name = validate($_POST['name']);
	$mobile = validate($_POST['mobile']);
	$password = $_POST['password'];
	$dob = validate($_POST['dob']);
	$gender = validate($_POST['gender']);
	$diabetes_status = validate($_POST['diabetes_status']);

	$result = $conn->query("INSERT INTO `users`(`patient_number`, `name`, `mobile`, `password`, `dob`, `gender`, `diabetes_status`) VALUES ('$patient_number', '$name', '$mobile', '$password', '$dob', '$gender', '$diabetes_status')");

	if ($result == TRUE) {
		header("Location: login.php");
		exit();
	}else{
		// header("Location: login.php?error=Incorect Mobile or Password");
		// exit();
		echo "Error:". $sql . "<br>". $conn->error;
	} 

	$conn->close();
}
?>
<!DOCTYPE html>

<html>
<head>
	<?php require('files/meta.html');?>
	
	<title>Sugar Tracking</title>

	<?php require('files/css.html');?>
</head>

<body>


	<div class="container-xxl">
		<div class="authentication-wrapper authentication-basic container-p-y">
			<div class="authentication-inner">

				<div class="card">
					<div class="card-body">

						<div class="app-brand justify-content-center">
							<a href="#" class="app-brand-link gap-2">
								<h3 class="fw-bolder">SUGAR TRACKING</h3>
							</a>
						</div>

						<form id="formAuthentication" class="mb-3" action="signup.php" method="POST">

							<div class="mb-3">
								<label for="name" class="form-label">Name</label>
								<input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" autofocus
								/>
							</div>

							<div class="mb-3">
								<label class="form-label" for="basic-icon-default-date">Date Of Birth</label>
								<div class="input-group input-group-merge">
									<span id="basic-icon-default-date2" class="input-group-text"><i class="bx bx-calendar"></i></span>
									<input type="date" name="dob" class="form-control" id="basic-icon-default-date" aria-label="Select Date" aria-describedby="basic-icon-default-date2" />
								</div>
							</div>

							<div class="mb-3">
								<label class="form-label">Gender</label>
								<select class="form-select" name="gender">
									<option value="male">Male</option>
									<option value="female">Female</option>
									<option value="other">Other</option>
								</select>
							</div>

							<div class="mb-3">
								<label class="form-label">Currently Diabetic?</label>
								<select class="form-select" name="diabetes_status">
									<option value="yes">Yes</option>
									<option value="no">No</option>
								</select>
							</div>

							<div class="mb-3">
								<label for="mobile" class="form-label">Mobile</label>
								<input type="number" class="form-control" id="mobile" name="mobile" placeholder="Enter Mobile">
							</div>

							<div class="mb-3 form-password-toggle">
								<label class="form-label" for="password">Password</label>
								<div class="input-group input-group-merge">
									<input type="password" id="password" class="form-control" name="password" placeholder="Enter Password">
									<span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
								</div>
							</div>


							<button type="submit" name="submit" class="btn btn-primary d-grid w-100">Signup</button>
						</form>

						<p class="text-center">
							<span>Already have an account?</span>
							<a href="login.php">
								<span>Login instead</span>
							</a>
						</p>
					</div>
				</div>

			</div>
		</div>
	</div>



	<?php require('files/js.html');?>
</body>
</html>