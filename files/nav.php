<?php
session_start();  
require("config.php");

if ((isset($_SESSION["user_id"]) or isset($_SESSION["doctor_id"])) && isset($_SESSION["name"]) && isset($_SESSION["mobile"])  && isset($_SESSION["role"]) ) {

		$name = ucwords($_SESSION["name"]);
		$role = ucwords($_SESSION["role"]);

}else{
	header("Location: login.php?error=Enter correct Data");
	exit();
}
?>
<nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached" id="layout-navbar">

	<div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
		<a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
			<i class="bx bx-menu bx-sm"></i>
		</a>
	</div>

	<div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">

		<ul class="navbar-nav flex-row align-items-center ms-auto">

			<li class="nav-item navbar-dropdown dropdown-user dropdown">
				<a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
					<i class='bx bx-user-circle bx-lg'></i>
				</a>
				<ul class="dropdown-menu dropdown-menu-end">
					<li>
						<a class="dropdown-item" href="profile.php">
							<div class="d-flex">
								<div class="flex-grow-1 text-center">
									<span class="fw-semibold d-block"><?=$name?></span>
									<small class="text-muted"><?=$role?></small>
								</div>
							</div>
						</a>
					</li>

					<li>
						<div class="dropdown-divider"></div>
					</li>
					<li>
						<a class="dropdown-item text-center" href="login.php">
							<i class="bx bx-power-off me-2"></i>
							<span class="align-middle">Log Out</span>
						</a>
					</li>
				</ul>
			</li>

		</ul>
	</div>
</nav>