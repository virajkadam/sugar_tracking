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

								<h5 class="mb-0 text-primary">Enter Meal Data</h5>
							</div>

							<div class="card-body">

								<form>

									<div class="row">

										<div class="col-lg-3 col-md-3 mb-3">
											<label class="form-label">Meal Period:</label>
											<div class="input-group input-group-merge">
												<span class="input-group-text">
													<i class="bx bx-time"></i>
												</span>
												<select class="form-select" name="meal_period">
													<option value="breakfast">Breakfast</option>
													<option value="lunch">Lunch</option>
													<option value="dinner">Dinner</option>
												</select>
											</div>
										</div>

										<div class="col-lg-3 col-md-3 mb-3">
											<label class="form-label" for="sugar-value">Meal Carbs:</label>
											<div class="input-group input-group-merge">
												<span class="input-group-text"><i class="bx bx-cube"></i></span>
												<input type="number" class="form-control" name="meal_carbs" min="100" max="5000" placeholder="Enter carbs">
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

											<button type="submit" class="btn btn-success">
												<i class='bx bxs-paper-plane'></i>	Save Data
											</button>
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
