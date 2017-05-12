<?php require_once "html_output/html_main.php"; ?>
<!DOCTYPE HTML>
<?php session_start(); ?>
<html>
	<head>
		<title>Nerd Advice</title>
        <!--HEADER-->
        <?php display_header(); ?>
        <!--HEADER-->
        <?php require_once "database_functions/url_fns.php"; ?>
	</head>
	<body>

		<!--NAVIGATION-->
        <?php display_nav_bar(); ?>
        <!--NAVIGATION-->

		<!-- Banner -->
			<section id="banner">
				<div class="inner">
					<h2>Nerd Advice</h2>
					<ul class="actions">
                        <?php if(isset($_SESSION['valid_user'])){
                            $username= $_SESSION['valid_user'];
                            echo "<li><a href=\"profile.php\" class=\"button big special\">$username's Account</a></li>";
                        } else {
                            echo"<li><a href=\"auth/signup.php\" class=\"button big special\">Not a member?</a></li>";
                        }
                        ?>
					</ul>
				</div>
			</section>


		<!-- Main -->
			<div id="main" class="container">
				<!-- One -->
                <h3><strong>Recommendations</strong></h3>
                <p>
                    <?php
                    if(isset($_SESSION['valid_user'])){
                        $results= recommend_urls($_SESSION['valid_user'], $popularity=1);
                    }
                    foreach ($results as $result){
                        echo"<p><a href='".$result."'>".$result."</a></p>";
                    }
                    ?>
                </p>
					<section id="one" class="feature major">
						<span class="icon alt major fa-paper-plane"></span>
						<h2>Nerd Advice can help you take over the world!</h2>

						<p>Search through different content and bookmark what you like,
                        us nerds will then go to work to and recommend similar content. We have many
                        discussions about web technologies that usually catch the attention of
                        others maybe it will catch yours too. We want to help you discover what you
                        like so come on in and open your free account.</p>
					</section>

				<!-- Two -->
                <?php
                if(isset($_SESSION['valid_user'])){
                    echo"<section id=\"two\" class=\"feature\">
						<div class=\"row\">
							<div class=\"4u 12u$(medium)\">
								<h2>Ideas</h2>
								<p>When it comes to writing code always write like the guy who maintains
                                your code is a raging sociopath that knows where you live.
                                    We love linux, databases and PHP so thats what we focus on here.</p>

                                <ul class=\"actions\">
                                    <li><a href=\"discussions.php\" class=\"button\">Go there</a></li>
                                </ul>
							</div>
							<div class=\"8u$ 12u$(medium)\">
								<ul class=\"major-icons row\">
									<li class=\"4u 6u(small) 12u$(xsmall)\">
										<span class=\"icon alt major fa-server\"></span>
										<p>Servers</p>
									</li>
									<li class=\"4u 6u$(small) 12u$(xsmall)\">
										<span class=\"icon alt major fa-linux\"></span>
										<p>Linux</p>
									</li>
									<li class=\"4u$ 6u(small) 12u$(xsmall)\">
										<span class=\"icon alt major fa-github\"></span>
										<p>Github</p>
									</li>
									<li class=\"4u 6u$(small) 12u$(xsmall)\">
										<span class=\"icon alt major fa-code\"></span>
										<p>HTML</p>
									</li>
									<li class=\"4u 6u(small) 12u$(xsmall)\">
										<span class=\"icon alt major fa-database\"></span>
										<p>Databases</p>
									</li>
									<li class=\"4u$ 6u$(small) 12u$(xsmall)\">
										<span class=\"icon alt major fa-bolt\"></span>
										<p>PHP</p>
									</li>
								</ul>
							</div>
						</div>
					</section>";
                }
                ?>

				<!-- Three -->
					<section id="three" class="feature">
						<div class="row">
							<div class="8u 12u$(medium)">
								<div class="box alt">
									<div class="row uniform 50%">
										<div class="6u 12u$(xsmall)">
											<a href="#" class="image fit">
												<h3 class="caption">work on the go</h3>
												<img src="images/laptop.JPG" alt="" />
											</a>
										</div>
										<div class="6u$ 12u$(xsmall)">
											<a href="#" class="image fit">
												<h3 class="caption">some of our group</h3>
												<img src="images/class.JPG" alt="" />
											</a>
										</div>
										<div class="6u 12u$(xsmall)">
											<a href="#" class="image fit">
												<h3 class="caption">web and how it works</h3>
												<img src="images/http.jpg" alt="" />
											</a>
										</div>
										<div class="6u$ 12u$(xsmall)">
											<a href="#" class="image fit">
												<h3 class="caption">our team will make it happen</h3>
												<img src="images/team.jpg" alt="" />
											</a>
										</div>
										<div class="6u 12u$(xsmall)">
											<a href="#" class="image fit">
												<h3 class="caption">what the future holds</h3>
												<img src="images/money.jpg" alt="" />
											</a>
										</div>
										<div class="6u$ 12u$(xsmall)">
											<a href="#" class="image fit">
												<h3 class="caption">ideas ideas ideas</h3>
												<img src="images/bulbs2.jpg" alt="" />
											</a>
										</div>
									</div>
								</div>
							</div>
							<div class="4u$ 12u$(medium) important(medium)">
								<h2>Work hard or hardly work</h2>
								<p>We have had many obstacles and overcame a lot, but the thing that keeps us moving forward is the goal we have set for ourselves yesterday. There is no problem too big when you see yourself as the storm instead of hiding from it. By the way, this gives me an idea, we should start taking photos of the group everytime we have class, we will need them in the future so we can fill in these spots.</p>

								<p>The goal is to create a website where people can actually browse and choose what they like (and set bookmarks) instead of just an informational site that does nothing. I was thinking that we can put up different discussions about different topics and this will provide a selection platform for our visitors. Again, this functionality will only be available to those who are logged in.</p>
								<?php
                                if(isset($_SESSION['valid_user'])){
                                    echo"<ul class=\"actions\">
                                            <li><a href=\"bookmarks/bookmark.php?bk_message=Make your team effective by using a VCS like github\" class=\"button\">Bookmark</a></li>
                                        </ul>";
                                }
                                ?>
							</div>
						</div>
					</section>

                <?php
                if(!isset($_SESSION['valid_user'])){
                    echo"<section id=\"four\" class=\"feature major\">
                            <h2>Right this way...</h2>
                            <p>Clicking the \"Join now\" button will take the visitor to a page where he can create an account. I think the page should be simple, only asking for a name, email and password (and ofcourse confirm password).</p>
                            <ul class=\"actions\">
                                <li><a href=\"auth/signup.php\" class=\"button big special\">Join now!</a></li>
                            </ul>
                        </section>";
                }
                ?>
			</div>

        <!--Footer-->
		<?php display_footer(); ?>
        <!--Footer-->

	</body>
</html>