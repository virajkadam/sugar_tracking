<?php 
session_start(); 
require("files/config.php");

if (isset($_POST['submit'])) {

	function validate($data){
		return htmlspecialchars(stripslashes(trim($data)));
	}

	$user_id = $_SESSION['user_id'];
	$meal_period = validate($_POST['meal_period']);
	$check_time = validate($_POST['check_time']);
	$sugar_level = validate($_POST['sugar_level']);
	$current_weight = validate($_POST['current_weight']);
	$track_date = validate($_POST['track_date']);
	$track_source = validate($_POST['track_source']);
	$track_note = validate($_POST['track_note']);

	$result = $conn->query("INSERT INTO `sugar`(`user_id`, `meal_period`, `check_time`, `sugar_level`, `current_weight`, `datetime`, `source`, `note`) VALUES ('$user_id','$meal_period','$check_time','$sugar_level','$current_weight','$track_date','$track_source','$track_note') ");

	if ($result == TRUE) {
		header("Location: sugar_listview.php");
		exit();
	}else{
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


	<div class="layout-wrapper layout-content-navbar">
		<div class="layout-container">

			<?php require('files/sidebar.html');?>

			<div class="layout-page">
				
				<?php require('files/nav.php');?>

				<div class="content-wrapper">

					<div class="container-xxl flex-grow-1 container-p-y">

						<div class="card mb-4">
							<div class="card-header text-center">
								<a onclick="window.history.back()" class="btn rounded-pill btn-outline-secondary btn btn-sm btn-secondary m-2 mt-0" style="float:left;">
									<i class="bx bxs-left-arrow-circle"></i> Back
								</a>

								<h5 class="mb-0 text-primary">Enter Sugar Data</h5>
							</div>

							<div class="card-body">

								<form class="mb-3" method="POST" action="sugar_create.php">

									<div class="row">

										<div class="col-lg-3 col-md-3 mb-3">
											<label class="form-label">Meal Period:</label>
											<div class="input-group input-group-merge">
												<span class="input-group-text">
													<i class="bx bx-time"></i>
												</span>
												<select class="form-select" name="meal_period">
													<option value="fasting">Fasting</option>
													<option value="before_meal">Before Meal</option>
													<option value="after_meal">After Meal</option>
													<option value="bedtime">Bedtime</option>
												</select>
											</div>
										</div>

										<div class="col-lg-3 col-md-3 mb-3">
											<label class="form-label" for="sugar-value">Sugar Level:</label>
											<div class="input-group input-group-merge">
												<span class="input-group-text"><i class="bx bx-cube"></i></span>
												<input type="number" class="form-control" name="sugar_level" min="10" max="600" placeholder="Sugar Level">
											</div>
										</div>

										<div class="col-lg-3 col-md-3 mb-3">
											<label class="form-label">Check Time:</label>
											<div class="input-group input-group-merge">
												<span class="input-group-text">
													<i class="bx bx-time"></i>
												</span>
												<input type="time" class="form-control" name="check_time" min="10" max="600" placeholder="Check Time">
											</div>
										</div>

										<div class="col-lg-3 col-md-3 mb-3">
											<label class="form-label" for="weight">Current Weight:</label>
											<div class="input-group input-group-merge">
												<span id="weight-icon" class="input-group-text"><i class="bx bx-calculator"></i></span>
												<input type="number" class="form-control" name="current_weight" placeholder="Enter Weight">
											</div>
											<small class="text-muted">Weight in KG</small>
										</div>


										<div class="col-lg-3 col-md-3 mb-3">	
											<label class="form-label" for="sugar-check-date">Track Date:</label>
											<div class="input-group input-group-merge">
												<span class="input-group-text"><i class="bx bx-calendar"></i></span>
												<input type="date" class="form-control" name="track_date" placeholder="Select Date">
											</div>
										</div>

										<div class="col-lg-3 col-md-3 mb-3">
											<label class="form-label">Track Source:</label>
											<div class="input-group input-group-merge">
												<span class="input-group-text">
													<i class="bx bx-time"></i>
												</span>
												<select class="form-select" name="track_source">
													<option value="machine">Machine</option>
													<option value="lab">Lab</option>
												</select>
											</div>
										</div>

										<div class="col-lg-3 col-md-3 mb-3">	
											<label class="form-label" for="sugar-check-date">Note:</label>
											<div class="input-group input-group-merge">
												<span class="input-group-text"><i class="bx bx-calendar"></i></span>
												<input type="text" class="form-control" name="track_note" placeholder="Enter Note">
											</div>
										</div>

										<div class="text-end mt-4">
											<a onclick="window.history.back()" class="btn rounded-pill btn-outline-secondary btn btn-sm btn-secondary m-2" style="float:left;">
												<i class="bx bxs-left-arrow-circle"></i> Back
											</a>

											<input type="submit" name="submit" class="btn btn-success" value="Save Data">
										</div>

									</div>

								</form>
							</div>
						</div>

					</div>


					<?php require('files/footer.html');?>


					<div class="content-backdrop fade"></div>
				</div>

			</div>

		</div>


		<div class="layout-overlay layout-menu-toggle"></div>
	</div>


	<?php require('files/js.html');?>

</body>
</html>
