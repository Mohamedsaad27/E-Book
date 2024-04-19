<?php
session_start();
?>

<!DOCTYPE html>

<html>

<head>

	<title>E BOOK</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width" , initial-scale=1.0>

	<!-- include cdn icon font-awesome , font google-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
	<link rel="icon" href="https://getbootstrap.com/docs/5.3/assets/img/favicons/favicon.ico" type="image/x-icon">

	<!-- include cdn mdbootstrap4 -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.min.css" rel="stylesheet" />

	<!-- include cdn bootstrap script-->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
		crossorigin="anonymous"></script>

	<!-- include cdn MDB script -->
	<script type="text/javascript"
		src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.umd.min.js"></script>

	<!-- link main style -->
	<link rel="stylesheet" href="assets/css/main.css">

	<script src="assets/js/main.js"></script>

</head>

<body>

	<!-- Navbar -->
	<nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary">
		<!-- Container wrapper -->
		<div class="container-fluid">
			<!-- Toggle button -->
			<button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
				aria-controls="offcanvasExample">
				<i class="fas fa-bars"></i>
			</button>

			<!-- Collapsible wrapper -->
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<!-- Navbar brand -->
				<a class="navbar-brand mt-2 mt-lg-0" href="#">
					<!-- logo -->
				</a>
				<!-- Left links -->
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link" href="index.php">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="book_list.php">List</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="contact.php">Contact Us</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="about.php">About</a>
					</li>
				</ul>
				<!-- Left links -->
			</div>
			<!-- Collapsible wrapper -->

			<!-- Right elements -->
			<div class="d-flex align-items-center">

				<!-- search -->
				<form method="GET" action="search.php" class="d-none d-lg-block d-xl-block">
					<div class="search-box">
						<button class="btn-search" type="button" id="searchButton"><i
								class="fas fa-search"></i></button>
						<input type="text" name="search" class="input-search" id="searchInput"
							placeholder="Type to Search...">
					</div>
				</form>

				<!-- cart user -->
				<?php if (isset($_SESSION['client']['status'])) { ?>
					<a href="cart.php" class="icon-cart"><i class="fa-solid fa-cart-shopping"></i></a>
				<?php } ?>

				<!-- user -->
				<div class="position-relative">
					<i class="fa fa-user dropdown-user"></i>
					<div class="show-dropdown row justify-content-center p-2">

						<!-- if user founded -->
						<?php if (isset($_SESSION['client']['status'])) { ?>
							<p class="name mb-2">Hi </br> <?= $_SESSION['user']['register_full_name'] ?></p>
							<a href="profile.php" class="primary-light-btn">Profile <i class="fa fa-user"></i></a>
							<a href="logout.php" class="primary-light-btn mt-1">logout <i class="fa fa-sign-out"></i></a>
						<?php } ?>

						<!-- if user not founded -->
						<?php if (!isset($_SESSION['client']['status'])) { ?>
							<a href="login.php" class="primary-light-btn">login<i class="fa fa-user"></i></a>
							<a href="register.php" class="primary-light-btn mt-1">register<i class="fa fa-user"></i></a>
						<?php } ?>

					</div>
				</div>
				<!-- Right elements -->
			</div>
			<!-- Container wrapper -->
	</nav>
	<!-- Navbar -->

	<!-- Sidebar -->
	<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel"
		style="width:265px !important; ">
		<div class="offcanvas-header border-bottom">
			<h5 class="offcanvas-title" id="offcanvasExampleLabel">E BOOK</h5>
			<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
		</div>
		<div class="offcanvas-body">
			<div>

				<!-- search -->
				<form method="GET" action="search.php" class="d-block d-lg-none d-xl-none">
					<div class="search-box">
						<button class="btn-search" type="submit"><i class="fas fa-search"></i></button>
						<input type="text" name="search" class="bg-transparent input-search w-100" placeholder="Type to Search...">
					</div>
				</form>

				<ul class="navbar-nav mb-2 mb-lg-0 mt-3 fs-6 ms-3 me-3">
					<li class="nav-item">
						<a class="nav-link" href="index.php">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="book_list.php">List</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="contact.php">Contact Us</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="about.php">About</a>
					</li>
				</ul>
			</div>
			<!-- <div class="dropdown mt-3">
				<button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
					Dropdown button
				</button>
				<ul class="dropdown-menu">
					<li><a class="dropdown-item" href="#">Action</a></li>
					<li><a class="dropdown-item" href="#">Another action</a></li>
					<li><a class="dropdown-item" href="#">Something else here</a></li>
				</ul>
			</div> -->
		</div>
	</div>