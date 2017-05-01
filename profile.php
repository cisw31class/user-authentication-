<!DOCTYPE HTML>
<?php require_once "html_output/html_main.php"; ?>
<html>
	<head>
        <title>Dynamic Title</title>
        <!--HEADER-->
        <?php display_header(); ?>
        <!--HEADER-->
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

                <a href="logout/destroy.php" class="btn btn-danger">SESSION DESTROY</a>

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

	</body>
</html>