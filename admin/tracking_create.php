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
				
				<?php require('files/nav.html');?>

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

								<form>

									<div class="row">

										<div class="col-lg-3 col-md-3 mb-3">
											<label class="form-label" for="sugar-check-time">Sugar Check Time::</label>
											<div class="input-group input-group-merge">
												<span id="sugar-check-time-icon" class="input-group-text"><i class="bx bx-time"></i></span>
												<select class="form-select" id="sugar-check-time" aria-label="Sugar Check Time" aria-describedby="sugar-check-time-icon">
													<option value="before_meal">Before Meal</option>
													<option value="after_meal">After Meal</option>
												</select>
											</div>
										</div>

										<div class="col-lg-3 col-md-3 mb-3">
											<label class="form-label" for="sugar-value">Sugar Level:</label>
											<div class="input-group input-group-merge">
												<span id="sugar-value-icon" class="input-group-text"><i class="bx bx-cube"></i></span>
												<input type="number" class="form-control" name="sugar_level" min="10" max="600" placeholder="Enter Sugar Level">
											</div>
										</div>

										<div class="col-lg-3 col-md-3 mb-3">
											<label class="form-label" for="weight">Weight:</label>
											<div class="input-group input-group-merge">
												<span id="weight-icon" class="input-group-text"><i class="bx bx-calculator"></i></span>
												<input type="number" class="form-control" id="weight" placeholder="Enter Weight">
											</div>
											<small class="text-muted">Weight in KG</small>
										</div>

										<div class="col-lg-3 col-md-3 mb-3">	
											<label class="form-label" for="sugar-check-date">Sugar Check Date:</label>
											<div class="input-group input-group-merge">
												<span id="sugar-check-date-icon" class="input-group-text"><i class="bx bx-calendar"></i></span>
												<input type="date" class="form-control" id="sugar-check-date" placeholder="Select Date">
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
