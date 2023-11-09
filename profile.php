

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

								<h5 class="mb-0 text-primary text-center">Profile</h5>
							</div>

							<div class="card-body">

								<form id="formAccountSettings" method="POST" onsubmit="return false">

									<div class="row">

										<div class="col-lg-3 col-md-3 mb-3">
											<label class="form-label">Name</label>
											<input class="form-control" type="text" name="name" value="John" autofocus>
										</div>

										<div class="col-lg-3 col-md-3 mb-3">
											<label class="form-label">Mobile</label>
											<input class="form-control" type="text" name="mobile" value="8806431723">
										</div>

										<div class="col-lg-3 col-md-3 mb-3">
											<label class="form-label">Password</label>
											<input class="form-control" type="password" name="password" value="1234">
										</div>

										<div class="col-lg-3 col-md-3 mb-3">
											<label class="form-label">DOB</label>
											<input class="form-control" type="text" name="dob" value="3 Jul 1992">
										</div>

										<div class="col-lg-3 col-md-3 mb-3">
											<label class="form-label">Gender</label>
											<select class="form-select" name="gender">
												<option value="Male">Male</option>
												<option value="Female">Female</option>
												<option value="Other">other</option>
											</select>
										</div>

										<div class="col-lg-3 col-md-3 mb-3">
											<label class="form-label">Diabetes Status</label>
											<select class="form-select" name="check-meal-type">
												<option value="fully_diabetic">Fully Diabetic</option>
												<option value="high_sugar">High Sugar</option>
												<option value="non_diabetic">Non Diabetic</option>
											</select>
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
