<!DOCTYPE HTML>
<?php require_once "html_output/html_main.php"; ?>
<?php require_once "classes/database.php"; ?>
<?php $database= new Database();
if(!isset($_SESSION['valid_user'])){
    $database->redirect('error_page/oops.php?error_message=You need to login first');
}
?>
<html>
	<head>
        <?php $username= $_SESSION['valid_user']; ?>
        <title><?php echo $username; ?></title>
        <!--HEADER-->
        <?php display_header(); ?>
        <!--HEADER-->
	</head>
	<body>

    <!--NAVIGATION-->
    <?php display_nav_bar(); ?>
    <!--NAVIGATION-->

    <?php
    $result= $database->run_query("SELECT * FROM user WHERE username='$username'");
    while($row= $result->fetch_assoc()){
        $email= $row['email'];
        $school= $row['school'];
        $major= $row['major'];
        $interest= $row['interest'];
        $image_path= $row['image_path'];
    }

    ?>

		<!-- Main -->
			<div id="main" class="container">
				<header class="major">
					<h2>Profile</h2>
				</header>
                <?php Database::display_message(); ?>
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
									<div id="profile_pic">
										<img src="<?php echo $image_path ? $image_path : 'PLACEHOLDERS/avatar.JPG'; ?>" class="img-circle" height="200" width="200">
									</div>

									<br><br>

									<form action="update_profile/update.php" method="POST" enctype="multipart/form-data">
										<input type="file" name="user_photo"><br><br>


										<input type="text" name="email" placeholder="Email" class="form-control" value="<?php echo $email; ?>"><br>

                                        <input type="text" name="school" placeholder="School" class="form-control" value="<?php echo $school; ?>"><br>

                                        <input type="text" name="major" placeholder="Major" class="form-control" value="<?php echo $major; ?>"><br>

                                        <input type="text" name="interest" placeholder="Interest" class="form-control" value="<?php echo $interest; ?>"><br>
                                        <input type="hidden" name="current_photo" value="<?php echo $image_path; ?>">

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