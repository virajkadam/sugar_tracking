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
										<h5 class="mb-0">Basic with Icons</h5>
									</div>
									<div class="card-body">
										<form>
											<div class="mb-3">
												<label class="form-label" for="basic-icon-default-fullname">Full Name</label>
												<div class="input-group input-group-merge">
													<span id="basic-icon-default-fullname2" class="input-group-text"
													><i class="bx bx-user"></i
													></span>
													<input
													type="text"
													class="form-control"
													id="basic-icon-default-fullname"
													placeholder="John Doe"
													aria-label="John Doe"
													aria-describedby="basic-icon-default-fullname2"
													/>
												</div>
											</div>
											<div class="mb-3">
												<label class="form-label" for="basic-icon-default-company">Company</label>
												<div class="input-group input-group-merge">
													<span id="basic-icon-default-company2" class="input-group-text"
													><i class="bx bx-buildings"></i
													></span>
													<input
													type="text"
													id="basic-icon-default-company"
													class="form-control"
													placeholder="ACME Inc."
													aria-label="ACME Inc."
													aria-describedby="basic-icon-default-company2"
													/>
												</div>
											</div>
											<div class="mb-3">
												<label class="form-label" for="basic-icon-default-email">Email</label>
												<div class="input-group input-group-merge">
													<span class="input-group-text"><i class="bx bx-envelope"></i></span>
													<input
													type="text"
													id="basic-icon-default-email"
													class="form-control"
													placeholder="john.doe"
													aria-label="john.doe"
													aria-describedby="basic-icon-default-email2"
													/>
													<span id="basic-icon-default-email2" class="input-group-text">@example.com</span>
												</div>
												<div class="form-text">You can use letters, numbers & periods</div>
											</div>
											<div class="mb-3">
												<label class="form-label" for="basic-icon-default-phone">Phone No</label>
												<div class="input-group input-group-merge">
													<span id="basic-icon-default-phone2" class="input-group-text"
													><i class="bx bx-phone"></i
													></span>
													<input
													type="text"
													id="basic-icon-default-phone"
													class="form-control phone-mask"
													placeholder="658 799 8941"
													aria-label="658 799 8941"
													aria-describedby="basic-icon-default-phone2"
													/>
												</div>
											</div>
											<div class="mb-3">
												<label class="form-label" for="basic-icon-default-message">Message</label>
												<div class="input-group input-group-merge">
													<span id="basic-icon-default-message2" class="input-group-text"
													><i class="bx bx-comment"></i
													></span>
													<textarea
													id="basic-icon-default-message"
													class="form-control"
													placeholder="Hi, Do you have a moment to talk Joe?"
													aria-label="Hi, Do you have a moment to talk Joe?"
													aria-describedby="basic-icon-default-message2"
													></textarea>
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
