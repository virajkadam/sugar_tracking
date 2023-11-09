<?php 
session_start(); 
require("../files/config.php");

if (isset($_POST['mobile']) && isset($_POST['password'])) {

	function validate($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	$mobile = validate($_POST['mobile']);
	$pass = validate($_POST['password']);

	if (empty($mobile)) {
		header("Location: login.php?error=Please enter Mobile Number");
		exit();

	}else if(empty($pass)){
		header("Location: login.php?error=Please enter Password");
		exit();

	}else{

		$sql = "SELECT * FROM doctor WHERE mobile='$mobile' AND password='$pass'";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {

			$row = mysqli_fetch_assoc($result);

			if ($row['mobile'] === $mobile && $row['password'] === $pass) {

				$_SESSION['mobile'] = $row['mobile'];
				$_SESSION['name'] = $row['name'];
				$_SESSION['role'] = 'doctor';
				$_SESSION['doctor_id'] = $row['user_id'];

				header("Location: home.php");
				exit();

			}else{
				header("Location: login.php?error=Incorect Mobile or Password");
				exit();
			}

		}else{
			header("Location: login.php?error=Incorect Mobile or Password");
			exit();
		}
	}

}
?>
<!DOCTYPE html>

<html>
<head>
<?php require('../files/meta.html');?>

<title>Sugar Tracking</title>

<?php require('../files/css.html');?>

<style type="text/css">
	body { 
		background: url("https://images.unsplash.com/photo-1576091160550-2173dba999ef") no-repeat center center fixed; 
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

						<h4 class="mb-4 text-center">DOCTOR LOGIN</h4>

						<form id="formAuthentication" class="mb-3" action="login.php" method="POST">

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

							<?php if (isset($_GET['error'])) { ?>
								<span class="mt-4 text-danger"><?php echo $_GET['error']; ?></span>
			       			<?php } ?>

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
