<!DOCTYPE HTML>
<html>
	<head>
		<title>Discussions</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
        <?php require_once "html_output/html_main.php"; ?>
	</head>
	<body>

    <!--NAVIGATION-->
    <?php display_nav_bar(); ?>
    <!--NAVIGATION-->

		<!-- Main -->
			<div id="main" class="container">
				<header class="major">
					<h2>Discussions</h2>
					<p>If you see something of interest then join...otherwise start your own</p>
				</header>
				<div class="row 150%">
					<div class="4u 12u$(medium)">

						<!-- Sidebar -->
							<section id="sidebar">
								<section>
									<h3>Linux</h3>
									<p>Installation and configuration, we look at vhosts as well as the apache config file.
                                    The command line is an important tool for developers but it may seem daunting to
                                    some. Since we are Linux nerds we talk about the command line too, and all the cool
                                    things it can do.</p>
									<footer>
										<ul class="actions">
											<li><a href="#" class="button small alt">Bookmark</a></li>
										</ul>
									</footer>
								</section>
								<hr />
								<section>
									<a href="#" class="image fit"><img src="images/databases.png" alt="" /></a>
									<h3>PHP and MySQL</h3>
									<p>Amazing power inside such a small tool. The database can be separated from
                                    the main server or it can run parallel on the same machine. Jump in and we will
                                    teach you how databases power websites.</p>
									<footer>
										<ul class="actions">
											<li><a href="#" class="button small alt">Bookmark</a></li>
										</ul>
									</footer>
								</section>
							</section>

					</div>
					<div class="8u$ 12u$(medium) important(medium)">

						<!-- Content -->
							<section id="content">
								<a href="#" class="image fit"><img src="images/discussions.png" alt="" /></a>
								<h3>We need a volunteer</h3>
								<p>Someone needs to come up with content for this page and it has to be
                                relevant to the rest of the website and obviously to the project. Remember
                                this page will only be visible to those who are authenticated and given
                                permission (those who are logged in).</p>

								<h3>Some ideas...</h3>
								<p>You could also bring up different ways that a current discussion can branch out.
                                    Separate them with bullets (ul). For example, "When installing a fresh copy of MACOS,
                                    by default apache is already there, it just needs to be configured"...or something
                                along those lines.</p>
								<ul>
									<li>Mac, the "Unix like" operating system</li>
									<li>Recursively or not? Whats the difference?</li>
									<li>Migrations and why they are so cool</li>
									<li>Building a server...what you will need</li>
									<li>Multi-threading is the norm</li>
								</ul>
							</section>

					</div>
				</div>
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