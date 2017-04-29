<!DOCTYPE HTML>
<!--
	Exponent by Pixelarity
	pixelarity.com | hello@pixelarity.com
	License: pixelarity.com/license
-->
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

		<style>
			#profile_pic {
				text-align: center;
			}
		</style>
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<h1><!--PLACEHOLDER--></h1>
				<nav id="nav">
					<ul>
						<li><a href="#">Sign Up</a></li>
						<li><a href="#">Log In</a></li>
						<li class="special">
							<a href="#menu" class="icon fa-bars">Menu</a>
							<div id="menu">
								<ul>
									<li><a href="index.php">Home</a></li>
									<li><a href="#">Profile</a></li>
									<li><a href="discussions.php">Discussions</a></li>
									<li><a href="contact.php">Contact</a></li>
									<li>
										<span>Status</span>
										<ul>
											<li><a href="#">Sign Up</a></li>
											<li><a href="#">Log In</a></li>
										</ul>
									</li>
								</ul>
							</div>
						</li>
					</ul>
				</nav>
			</header>

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
			<footer id="footer">
				<div class="container">
					<div class="row">
						<section class="4u 12u$(medium) about">
							<h2>Did you know?</h2>
							<p>Someone can fill this text with something useful. Someone can fill this text with something useful. Someone can fill this text with something useful. Someone can fill this text with something useful. Someone can fill this text with something useful. Someone can fill this text with something useful. Someone can fill this text with something useful. Someone can fill this text with something useful. Someone can fill this text with something useful. Someone can fill this text with something useful. Someone can fill this text with something useful.</p>
							<ul class="actions">
								<li><a href="#" class="button">Read the story</a></li>
							</ul>
						</section>
						<section class="4u 6u(medium) 12u$(small)">
							<h3>Updates</h3>
							<ul class="updates">
								<li>
									<p><a href="#">This can be static text, it would serve as a decent place holder.</a></p>
									<span class="timestamp">Posted 2 hours ago</span>
								</li>
								<li>
									<p><a href="#">Also, static...maybe some news story that just happened</a></p>
									<span class="timestamp">Posted 4 hours ago</span>
								</li>
								<li>
									<p><a href="#">Our goal is to focus on server side functionality, so lets just fill this portion in with static text also.</a></p>
									<span class="timestamp">Posted 8 hours ago</span>
								</li>
							</ul>
						</section>
						<section class="4u$ 6u$(medium) 12u$(small)">
							<h3>Get in touch</h3>
							<ul class="labeled-icons">
								<li>
									<h4 class="icon alt fa-home"><span class="label">Address</span></h4>
									<span>1100 N Grand Ave<br />
									Walnut, CA 91789</span>
								</li>
								<li>
									<h4 class="icon alt fa-phone"><span class="label">Phone</span></h4>
									<span>(800) 555-5555</span>
								</li>
								<li>
									<h4 class="icon alt fa-envelope"><span class="label">Email</span></h4>
									<a href="#">example@example.com</a>
								</li>
								<li>
									<h4 class="icon alt fa-facebook"><span class="label">Facebook</span></h4>
									<a href="#">facebook.com/untitled-tld</a>
								</li>
								<li>
									<h4 class="icon alt fa-twitter"><span class="label">Twitter</span></h4>
									<a href="#">twitter.com/untitled-tld</a>
								</li>
							</ul>
						</section>
					</div>
				</div>
				<div class="copyright container">
					<p>&copy; NerdCollege, All rights reserved.</p>
					<ul class="menu">
						<li><a href="#">Terms of Use</a></li>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="#">Contact Us</a></li>
					</ul>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>