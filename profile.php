<?php require_once "html_output/html_main.php"; ?>
<?php require_once "classes/database.php"; ?>
<?php require_once "database_functions/db_fns.php"; ?>
<?php require_once "database_functions/url_fns.php"; ?>
<!DOCTYPE HTML>
<?php
session_start();
$username= $_SESSION['valid_user'];
$capitol= ucfirst($_SESSION['valid_user']);
?>
<html>
	<head>
        <title><?php echo $capitol; ?></title>
        <!--HEADER-->
        <?php display_header(); ?>
        <!--HEADER-->
        <?php
        $database= new Database();

        $sql="SELECT email, user_pic FROM user WHERE username='$username'";
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
									<h3>Welcome <?php echo $capitol; ?></h3><br><br><br>
								</div>	
							</div>

                            <style>
                                .inModal {
                                    padding: 35px;
                                }
                            </style>

                            <!--MODAL-->
                            <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="inModal">
                                            <?php
                                            $url_results= recommend_urls($_SESSION['valid_user'], $popularity=1);
                                            if(!empty($url_results)){
                                                echo"<h3>Based on the most visited, we recommend the following.</h3>";
                                                foreach ($url_results as $url_result){
                                                    echo "<h3><a href='".$url_result."'>".$url_result."</a></h3>";
                                                }
                                            } else {
                                                echo"<h3>Not enough users to complete a recommendation</h3>";
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--MODAL-->

                            <?php
                            while($row= $result->fetch_object()){
                                $email= $row->email;
                                $current_pic= $row->user_pic;
                            }
                            ?>

							<div class="row">
								<div class="col-md-4">
									<!--PLACEHOLDER-->
								</div>

								<div class="col-md-4">

                                    <?php display_message(); ?>
                                    <?php display_recommend_message(); ?>

									<div id="profile_pic">
										<img src="<?php echo $current_pic ? 'nerd_pics/'.$current_pic : 'PLACEHOLDER/avatar.JPG'   ?>" class="img-circle" height="200" width="200">
									</div>

									<br><br>

									<form action="update_profile/update.php" method="POST" enctype="multipart/form-data">
                                        <input type="file" name="user_pic"><br>

										<input type="text" name="email" placeholder="Email" class="form-control" value="<?php echo $email; ?>"><br>
                                        <input type="hidden" name="current_pic" value="<?php echo $current_pic; ?>">
										<input type="submit" name="submit" value="Update Profile"><br>
									</form>
                                    <a href="change_password.php" class="btn btn-primary">Change Password</a> <span> </span> <button type="button" class="btn btn-default" data-toggle="modal" data-target=".bs-example-modal-lg">Recommend Something</button>
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