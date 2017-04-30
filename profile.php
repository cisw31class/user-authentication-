<!DOCTYPE HTML>
<html>
	<head>
		<title>Dynamic Title</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->

		<!--BOOTSTRAP w/ Jquery CORE-->
		<script src="bootstrap/jquery-3.2.1.js"></script>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
		<script src="bootstrap/js/bootstrap.js"></script>
		<!--BOOTSTRAP w/ Jquery CORE-->

        <?php require_once "html_output/html_main.php"; ?>

		<style>
			#profile_pic {
				text-align: center;
			}
		</style>
	</head>
	<body>

    <!--NAVIGATION-->
    <?php display_nav_bar(); ?>
    <!--NAVIGATION-->

		<!-- Main -->
			<div id="main" class="container">
				<header class="major">
					<h2>Profile</h2>
				</header>

				<!-- Content -->
					<section id="content">
						<div class="container">
							<div class="row" align="center">
								<div class="col-md-12">
									<h3>Welcome... "name of user displayed dynamically"</h3><br><br><br>
								</div>	
							</div>

							<div class="row">
								<div class="col-md-4">
									<!--PLACEHOLDER-->
								</div>

								<div class="col-md-4">
									<div id="profile_pic">
										<img src="images/avatar.png" class="img-circle" height="200" width="200">
									</div>

									<br><br>

									<form action="" method="" enctype="multipart/form-data">
										<input type="file" name="user_photo"><br><br>


										<input type="text" name="email" placeholder="Email" class="form-control" value="<?php ?>"><br>

                                        <input type="text" name="school" placeholder="School" class="form-control" value="<?php ?>"><br>

                                        <input type="text" name="major" placeholder="Major" class="form-control" value="<?php ?>"><br>

                                        <input type="text" name="interest" placeholder="Interest" class="form-control" value="<?php ?>"><br>

										<input type="submit" name="submit" value="Update">
									</form>
								</div>

								<div class="col-md-4">
									<!--PLACEHOLDER-->
								</div>
							</div>
						</div>
					</section>

			</div>

		<!-- Footer -->
        <?php display_footer(); ?>
        <!-- Footer -->


		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>