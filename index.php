<!DOCTYPE HTML>
<html>
	<head>
		<title>Nerd College</title>
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

		<!-- Banner -->
			<section id="banner">
				<div class="inner">
					<h2>Nerd College</h2>
					<ul class="actions">
						<li><a href="auth/signup.html" class="button big special">Sign up!</a></li>
					</ul>
					<p class="footnote"><a href="#">Learn more</a></p>
				</div>
				<a href="#one" class="more scrolly">Learn more ...</a>
			</section>

		<!-- Main -->
			<div id="main" class="container">

				<!-- One -->
					<section id="one" class="feature major">
						<span class="icon alt major fa-paper-plane"></span>
						<h2>Nerd college can help you take over the world!</h2>

						<p>Search through different content and bookmark what you like,
                        us nerds will then go to work to and recommend similar content. We have many
                        discussions about web technologies that usually catch the attention of
                        others maybe it will catch yours too. We want to help you discover what you
                        like so come on in and open your free account.</p>
					</section>

				<!-- Two -->
					<section id="two" class="feature">
						<div class="row">
							<div class="4u 12u$(medium)">
								<h2>Discussions</h2>
								<p>We love linux, databases and PHP so thats what we focus on here.
								When it comes to writing code always write like the guy who maintains
                                your code is a raging sociopath that knows where you live.</p>
								<ul class="actions">
									<li><a href="#" class="button">Bookmark</a></li>
								</ul>
							</div>
							<div class="8u$ 12u$(medium)">
								<ul class="major-icons row">
									<li class="4u 6u(small) 12u$(xsmall)">
										<span class="icon alt major fa-server"></span>
										<p>Servers</p>
									</li>
									<li class="4u 6u$(small) 12u$(xsmall)">
										<span class="icon alt major fa-linux"></span>
										<p>Linux</p>
									</li>
									<li class="4u$ 6u(small) 12u$(xsmall)">
										<span class="icon alt major fa-github"></span>
										<p>Github</p>
									</li>
									<li class="4u 6u$(small) 12u$(xsmall)">
										<span class="icon alt major fa-code"></span>
										<p>HTML</p>
									</li>
									<li class="4u 6u(small) 12u$(xsmall)">
										<span class="icon alt major fa-database"></span>
										<p>Databases</p>
									</li>
									<li class="4u$ 6u$(small) 12u$(xsmall)">
										<span class="icon alt major fa-bolt"></span>
										<p>PHP</p>
									</li>
								</ul>
							</div>
						</div>
					</section>

				<!-- Three -->
					<section id="three" class="feature">
						<div class="row">
							<div class="8u 12u$(medium)">
								<div class="box alt">
									<div class="row uniform 50%">
										<div class="6u 12u$(xsmall)">
											<a href="#" class="image fit">
												<h3 class="caption">Pictures of nerdstuff</h3>
												<img src="images/pic01.jpg" alt="" />
											</a>
										</div>
										<div class="6u$ 12u$(xsmall)">
											<a href="#" class="image fit">
												<h3 class="caption">Picture of a really nice computer setup</h3>
												<img src="images/pic02.jpg" alt="" />
											</a>
										</div>
										<div class="6u 12u$(xsmall)">
											<a href="#" class="image fit">
												<h3 class="caption">Picture of our team</h3>
												<img src="images/pic03.jpg" alt="" />
											</a>
										</div>
										<div class="6u$ 12u$(xsmall)">
											<a href="#" class="image fit">
												<h3 class="caption">Picture of servers</h3>
												<img src="images/pic04.jpg" alt="" />
											</a>
										</div>
										<div class="6u 12u$(xsmall)">
											<a href="#" class="image fit">
												<h3 class="caption">Picture of us doing homework/paperwork</h3>
												<img src="images/pic05.jpg" alt="" />
											</a>
										</div>
										<div class="6u$ 12u$(xsmall)">
											<a href="#" class="image fit">
												<h3 class="caption">Picture of future jobs</h3>
												<img src="images/pic06.jpg" alt="" />
											</a>
										</div>
									</div>
								</div>
							</div>
							<div class="4u$ 12u$(medium) important(medium)">
								<h2>Work hard or hardly work</h2>
								<p>We have had many obstacles and overcame a lot, but the thing that keeps us moving forward is the goal we have set for ourselves yesterday. There is no problem too big when you see yourself as the storm instead of hiding from it. By the way, this gives me an idea, we should start taking photos of the group everytime we have class, we will need them in the future so we can fill in these spots. Keep it quiet tho so the other guys dont steal our ideas (they are doing the same project).</p>

								<p>The goal is to create a website where people can actually browse and choose what they like (and set bookmarks) instead of just an informational site that does nothing. I was thinking that we can put up different discussions about different topics and this will provide a selection platform for our visitors. Again, this functionality will only be available to those who are logged in.</p>
								<ul class="actions">
									<li><a href="#" class="button">Bookmark</a></li>
								</ul>
							</div>
						</div>
					</section>

				<!-- Four -->
					<section id="four" class="feature major">
						<h2>Right this way...</h2>
						<p>Clicking the "Join now" button will take the visitor to a page where he can create an account. I think the page should be simple, only asking for a name, email and password (and ofcourse confirm password).</p>
						<ul class="actions">
							<li><a href="auth/signup.html" class="button big special">Join now!</a></li>
						</ul>
					</section>

			</div>

        <!--Footer-->
		<?php display_footer(); ?>
        <!--Footer-->

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>