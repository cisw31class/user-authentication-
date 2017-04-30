<?php
/**
 * Created by PhpStorm.
 * User: ocean
 * Date: 4/29/17
 * Time: 8:32 PM
 */
function display_nav_bar(){
    $navigation= <<<EOD
            <header id="header">
				<h1><a href="https://github.com/cisw31class/user-authentication-"><!--PLACEHOLDER--></a></h1>
				<nav id="nav">
					<ul>
						<li><a href="auth/signup.php">Sign Up</a></li>
						<li><a href="auth/login.php">Log In</a></li>
						<li class="special">
							<a href="#menu" class="icon fa-bars">Menu</a>
							<div id="menu">
								<ul>
									<li><a href="index.php">Home</a></li>
									<li><a href="profile.php">Profile</a></li>
									<li><a href="discussions.php">Discussions</a></li>
                                    <li><a href="all_nerds.php">Classmates</a></li>
									<li><a href="contact.php">Contact</a></li>
									<li>
										<span>Status</span>
										<ul>
											<li><a href="auth/signup.php">Sign Up</a></li>
											<li><a href="auth/login.php">Log In</a></li>
										</ul>
									</li>
								</ul>
							</div>
						</li>
					</ul>
				</nav>
			</header>
EOD;
echo $navigation;
}