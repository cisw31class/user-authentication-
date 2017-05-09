<?php require_once "html_output/html_main.php"; ?>
<?php require_once "classes/database.php"; ?>
<?php require_once "database_functions/db_fns.php"; ?>
<!DOCTYPE HTML>
<?php
session_start();
$username= $_SESSION['valid_user'];
?>
<html>
	<head>
        <title><?php echo $username; ?></title>
        <!--HEADER-->
        <?php display_header(); ?>
        <!--HEADER-->
        <?php
        $database= new Database();

        $sql="SELECT email FROM user WHERE username='$username'";
        $result=$database->run_query($sql);
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
									<h3>Welcome <?php echo $username; ?></h3><br><br><br>
								</div>	
							</div>

							<div class="row">
								<div class="col-md-4">
									<!--PLACEHOLDER-->
								</div>

								<div class="col-md-4">
                                    <?php display_message(); ?>
									<div id="profile_pic">
										<img src="images/avatar.png" class="img-circle" height="200" width="200">
									</div>

									<br><br>

									<form action="update_profile/update.php" method="POST">
                                        <?php
                                        while($row= $result->fetch_object()){
                                            $email= $row->email;
                                        }
                                        ?>
										<input type="text" name="email" placeholder="Email" class="form-control" value="<?php echo $email; ?>"><br>

										<input type="submit" name="submit" value="Update Profile"><br>
									</form>
                                    <a href="change_password.php" class="btn btn-primary">Change Password</a>

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