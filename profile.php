<?php require_once "html_output/html_main.php"; ?>
<?php require_once "bookmark_functions/bookmark_fns.php"; ?>
<!DOCTYPE HTML>
<?php session_start(); ?>
<html>
	<head>
        <title>Dynamic Title</title>
        <!--HEADER-->
        <?php display_header(); ?>
        <!--HEADER-->
        <?php

        $sql="SELECT email FROM user WHERE username=".$_SESSION['valid_user'];

        ?>
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
									<h3>Welcome <?php echo $_SESSION['valid_user']; ?></h3><br><br><br>
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

									<form action="" method="">

										<input type="text" name="email" placeholder="Email" class="form-control" value="<?php ?>"><br>

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