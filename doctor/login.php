<!DOCTYPE html>

<html>
<head>
	<?php require('../files/meta.html');?>
	
	<title>Sugar Tracking</title>

	<?php require('../files/css.html');?>

	<style type="text/css">
		body { 
			background: url("https://images.unsplash.com/photo-1423666639041-f56000c27a9a") no-repeat center center fixed; 
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
		}
	</style>
</head>

<body>


	<div class="container-xxl">
		<div class="authentication-wrapper authentication-basic container-p-y">
			<div class="authentication-inner">

				<div class="card">
					<div class="card-body">

						<div class="app-brand justify-content-center">
							<a href="index.html" class="app-brand-link">
								<h3 class="app-brand-text text-body fw-bolder">SUGAR TRACKING</h3>
							</a>
						</div>

						<h4 class="mb-4 text-center">ADMIN LOGIN</h4>

						<form id="formAuthentication" class="mb-3" action="" method="POST">

							<div class="mb-3">
								<label for="mobile" class="form-label">Mobile:</label>
								<input type="number" class="form-control" id="mobile" name="mobile" placeholder="Enter Mobile" autofocus/>
							</div>

							<div class="mb-3 form-password-toggle">
								<div class="d-flex justify-content-between">
									<label class="form-label" for="password">Password</label>
								</div>
								<div class="input-group input-group-merge">
									<input type="password" id="password" class="form-control" name="password" placeholder="Password" />
									<span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
								</div>
							</div>

							<div class="my-4">
								<button class="btn btn-primary d-grid w-100" type="submit">Login</button>
							</div>
						</form>

					</div>
				</div>

			</div>
		</div>
	</div>

	<?php require('../files/js.html');?>

</body>
</html>
