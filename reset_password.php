<?php require_once "html_output/html_main.php"; ?>
<!DOCTYPE HTML>
<?php require_once "classes/database.php"; ?>
<html>
	<head>
		<title>Reset Password</title>
        <!--HEADER-->
        <?php display_header(); ?>
        <!--HEADER-->
	</head>
	<body>

    <!--NAVIGATION-->
    <?php display_nav_bar(); ?>
    <!--NAVIGATION-->

		<!-- Main -->

				<header class="major">
					<h2>Reset Password</h2>
					<p>If you cant remember your password just reset it</p>
				</header>

                <div class="container">
                    <form action="change_pass_data/change_pass_data.php" method="POST">
                        <div class="row">
                            <div class="col-md-4">
                                <!--PLACEHOLDER-->
                            </div>

                            <div class="col-md-4">
                                <label>Username</label><br>
                                <input type="password" name="old_passwd">
                            </div>

                            <div class="col-md-4">
                                <!--PLACEHOLDER-->
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <!--PLACEHOLDER-->
                            </div>

                            <div class="col-md-4">
                                <label>New Password</label><br>
                                <input type="password" name="new_passwd">
                            </div>

                            <div class="col-md-4">
                                <!--PLACEHOLDER-->
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <!--PLACEHOLDER-->
                            </div>

                            <div class="col-md-4">
                                <label>Repeat New Password</label><br>
                                <input type="password" name="new_passwd2"><br>
                            </div>

                            <div class="col-md-4">
                                <!--PLACEHOLDER-->
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <!--PLACEHOLDER-->
                            </div>

                            <div class="col-md-4">
                                <input type="submit" name="submit" value="Reset">
                            </div>

                            <div class="col-md-4">
                                <!--PLACEHOLDER-->
                            </div>
                        </div>
                    </form>
                </div>

                <br><br>


		<!-- Footer -->
        <?php display_footer(); ?>
        <!-- Footer -->

	</body>
</html>