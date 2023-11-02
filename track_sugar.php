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

						<div class="row">

							<div class="col-xl">
								<div class="card mb-4">
									<div class="card-header text-center">
										<h5 class="mb-0 text-primary ">Add Data</h5>
									</div>
									<div class="card-body">
										<form>
											
										<div class="mb-3">
											<label class="form-label" for="user-id">User ID</label>
											<div class="input-group input-group-merge">
												<span id="user-id-icon" class="input-group-text"><i class="bx bx-id-card"></i></span>
												<input type="number" class="form-control" id="user-id" placeholder="User ID" aria-label="User ID" aria-describedby="user-id-icon" />
											</div>
										</div>

											<div class="mb-3">
												<label class="form-label" for="basic-icon-default-fullname">Full Name</label>
												<div class="input-group input-group-merge">
												<span id="basic-icon-default-fullname2" class="input-group-text"> <i class="bx bx-user"> </i> 
											    </span> <input type="text" class="form-control" id="basic-icon-default-fullname" placeholder="John Doe" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" />
												</div>
											</div>

											<div class="mb-3">
    										<label class="form-label" for="basic-icon-default-date">Date Of Birth</label>
												<div class="input-group input-group-merge">
												<span id="basic-icon-default-date2" class="input-group-text"><i class="bx bx-calendar"></i></span>
												<input type="date" class="form-control" id="basic-icon-default-date" aria-label="Select Date" aria-describedby="basic-icon-default-date2" />
												</div>
											</div>

											<div class="mb-3">
												<label class="form-label" for="gender">Gender</label>
												<select class="form-select" id="gender" aria-label="Gender">
													<option value="male">Male</option>
													<option value="female">Female</option>
													<option value="other">Other</option>
												</select>
											</div>


											<div class="mb-3">
												<label class="form-label" for="sugar-check-time">Sugar Check Time</label>
												<div class="input-group input-group-merge">
												<span id="sugar-check-time-icon" class="input-group-text"><i class="bx bx-time"></i></span>
												<select class="form-select" id="sugar-check-time" aria-label="Sugar Check Time" aria-describedby="sugar-check-time-icon">
												<option value="before-lunch">Before Lunch</option>
												<option value="after-lunch">After Lunch</option>
												</select>
												</div>
											</div>

											<div class="mb-3">
												<label class="form-label" for="sugar-value">Sugar Level</label>
												<div class="input-group input-group-merge">
													<span id="sugar-value-icon" class="input-group-text"><i class="bx bx-cube"></i></span>
													<input type="text" class="form-control" id="sugar-value" aria-label="Sugar Level" aria-describedby="sugar-value-icon" />
												</div>
											</div>

											<div class="mb-3">
												<label class="form-label" for="weight">Weight</label>
												<div class="input-group input-group-merge">
													<span id="weight-icon" class="input-group-text"><i class="bx bx-calculator"></i></span>
													<input type="number" class="form-control" id="weight" placeholder="Enter your weight in kg" aria-label="Weight" aria-describedby="weight-icon" />
												</div>
											</div>

											<div class="mb-3">
													<label class="form-label" for="sugar-check-date">Sugar Check Date</label>
													<div class="input-group input-group-merge">
														<span id="sugar-check-date-icon" class="input-group-text"><i class="bx bx-calendar"></i></span>
														<input type="date" class="form-control" id="sugar-check-date" aria-label="Sugar Check Date" aria-describedby="sugar-check-date-icon" />
													</div>
											</div>

											<div class="mb-3">
												<label class="form-label" for="basic-icon-default-message">Message</label>
												<div class="input-group input-group-merge">
													<span id="basic-icon-default-message2" class="input-group-text" ><i class="bx bx-comment"></i ></span> 
													<textarea id="basic-icon-default-message" class="form-control" placeholder="Is there anything specific you would like to discuss or any additional information you would like to share about your condition or medical history" aria-label="Hi, Do you have a moment to talk Joe?" aria-describedby="basic-icon-default-message2" ></textarea>
												</div>
											</div>

											<div class="text-end">
												<button type="submit" class="btn btn-success">
													<i class='bx bxs-paper-plane'></i>	Save Data
												</button>
											</div>

										</form>
									</div>
								</div>
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
