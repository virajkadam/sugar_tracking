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

								<h5 class="mb-0 text-primary text-center">Profile</h5>
							</div>

							<div class="card-body">

								<form id="formAccountSettings" method="POST" onsubmit="return false">

									<div class="row">

										<div class="col-lg-3 col-md-3 mb-3">
											<label for="firstName" class="form-label">First Name</label>
											<input class="form-control" type="text" id="firstName" name="firstName" value="John" autofocus="">
										</div>

										<div class="col-lg-3 col-md-3 mb-3">
											<label for="lastName" class="form-label">Last Name</label>
											<input class="form-control" type="text" name="lastName" id="lastName" value="Doe">
										</div>

										<div class="col-lg-3 col-md-3 mb-3">
											<label for="email" class="form-label">E-mail</label>
											<input class="form-control" type="text" id="email" name="email" value="john.doe@example.com" placeholder="john.doe@example.com">
										</div>

										<div class="col-lg-3 col-md-3 mb-3">
											<label for="organization" class="form-label">Organization</label>
											<input type="text" class="form-control" id="organization" name="organization" value="ThemeSelection">
										</div>

										<div class="col-lg-3 col-md-3 mb-3">
											<label class="form-label" for="phoneNumber">Phone Number</label>
											<div class="input-group input-group-merge">
												<span class="input-group-text">US (+1)</span>
												<input type="text" id="phoneNumber" name="phoneNumber" class="form-control" placeholder="202 555 0111">
											</div>
										</div>

										<div class="col-lg-3 col-md-3 mb-3">
											<label for="address" class="form-label">Address</label>
											<input type="text" class="form-control" id="address" name="address" placeholder="Address">
										</div>

										<div class="col-lg-3 col-md-3 mb-3">
											<label for="state" class="form-label">State</label>
											<input class="form-control" type="text" id="state" name="state" placeholder="California">
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
