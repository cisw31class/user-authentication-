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
			<div id="main" class="container 75%">
				<header class="major">
					<h2>Reset Password</h2>
					<p>Leave a note and us nerds will contact you.</p>
				</header>

				<!-- Content -->
					<section id="content">
						<form method="post" action="#">
							<div class="row uniform 50%">
								<div class="6u 12u$(xsmall)">
									<input type="text" name="name" id="name" value="" placeholder="Name" />
								</div>
								<div class="6u$ 12u$(xsmall)">
									<input type="email" name="email" id="email" value="" placeholder="Email" />
								</div>
							</div>
							<div class="row uniform 50%">
								<div class="12u$">
									<input type="text" name="subject" id="subject" value="" placeholder="Subject" />
								</div>
							</div>
							<div class="row uniform 50%">
								<div class="12u$">
									<textarea name="message" id="message" placeholder="Enter your message" rows="6"></textarea>
								</div>
							</div>
							<div class="row uniform">
								<div class="12u$">
									<ul class="actions align-center">
										<li><input type="submit" value="Send Message" class="special" /></li>
										<li><input type="reset" value="Reset Form" /></li>
									</ul>
								</div>
							</div>
						</form>
					</section>

			</div>

		<!-- Footer -->
        <?php display_footer(); ?>
        <!-- Footer -->

	</body>
</html>