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
                            $capitol= ucfirst($_SESSION['valid_user']);
                            echo "<li><a href=\"profile.php\" class=\"button big special\">$capitol's Account</a></li>";
                        } else {
                            echo"<li><a href=\"auth/signup.php\" class=\"button big special\">Not a member?</a></li>";
                        }
                        ?>
					</ul>
				</div>
			</section>

        <br><br>
        <?php
        if(isset($_SESSION['valid_user'])){
            echo"<div class=\"container\">
                    <div class=\"row\" align=\"right\">
                        <div class=\"col-md-12\">
                            <a href=\"read_directory.php\" class=\"btn btn-primary\">Project Files</a>
                        </div>
                    </div>
                </div>";
        }
        ?>

        <!-- Main -->
			<div id="main" class="container">
				<!-- One -->
                    <?php
                    if(isset($_SESSION['valid_user'])){
                        $results= recommend_urls($_SESSION['valid_user'], $popularity=1);
                        if($results){
                            echo"<h3><strong>Recommendations</strong></h3>";
                            foreach ($results as $result){
                                echo"<p><a href='".$result."'>".$result."</a></p>";
                            }
                        }
                    }
                    ?>
					<section id="one" class="feature major">
						<span class="icon alt major fa-paper-plane"></span>
						<h2>Nerd Advice can help you take over the world!</h2>
                        <?php
                        if(isset($_SESSION['valid_user'])){
                            echo"<p>".$capitol." I'm guessing you are about 30 years old, which means you have about 30 more years 
                                left on this earth (if you eat right and stay healthy and if you don't get hit by a car 
                                or some other tragic accident). Thats only about 360 months or 11,000 days and then you 
                                will be gone so hurry up and bookmark the life out of these web pages so you can learn
                                something!!</p>";
                        } else {
                            echo"<p>Look through the pages and let us give you new ideas, we will compare your interests
                            with the interests of others and give you recommendations that may spark new ideas.
                            We cover topics such as web technologies and personal development that usually
                            catch the attention of others maybe it will catch yours too. We want to help you
                            discover what you like so come in and open your mind and your account (20 super
                            easy payments of $99.99 plus your driver license and your house key).</p>";
                        }
                        ?>
					</section>

				<!-- Two -->
                <?php
                if(isset($_SESSION['valid_user'])){
                    echo"<section id=\"two\" class=\"feature\">
						<div class=\"row\">
							<div class=\"4u 12u$(medium)\">
								<h2>Ideas</h2>
								<p>When it comes to writing code always write like the guy who maintains
                                your code is a raging sociopath that knows where you live (in a darth-vader voice).
                                </p>

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
												<img src="images/working.jpg" alt="" />
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
								<p>We have had many obstacles and overcame a lot, but the thing that keeps us moving
                                    forward is the goal we have set for ourselves yesterday (and also money). There
                                    is no problem too big when you see yourself as the storm instead of hiding from it.</p>

								<p>This website is here to help generate ideas. We will give you topics and
                                you let your imagination go as you come up with websites you can bookmark and learn
                                from...oh but when your imagination comes back make sure it brings pizza. The idea is
                                    to think outside the box, in other words don't be religious cause
                                when you search for knowledge you cant just do what someone told you to do.</p>
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
                            <p>Clicking the \"Join now\" button will take you to a signup page where you can signup and 
                            meet the nerds because honestly, your actions testify to the fact that you don't know anything.</p>
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