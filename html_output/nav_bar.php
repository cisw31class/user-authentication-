<?php
/**
 * Created by PhpStorm.
 * User: ocean
 * Date: 4/29/17
 * Time: 8:32 PM
 */
function display_nav_bar(){
    //This function outputs the HTML for the nav bar

          echo "<header id='header'>
				<h1><a href='https://github.com/cisw31class/user-authentication-'><!--PLACEHOLDER--></a></h1>
				<nav id='nav'>
					<ul>";
                        if(isset($_SESSION['valid_user'])){
                            echo"<li><a href='auth/logout.php'>Logout</a></li>";
                        } else {
                            echo"<li><a href='auth/signup.php'>Sign Up</a></li>
						        <li><a href='auth/login.php'>Log In</a></li>";
                        }
                    echo"<li class='special'>
							<a href='#menu' class='icon fa-bars'>Menu</a>
							<div id='menu'>
								<ul>";
                                    if(isset($_SESSION['valid_user'])){
                                        echo"<li><a href='index.php'>Home</a></li>
                                            <li><a href='profile.php'>Profile</a></li>
                                            <li><a href='discussions.php'>Discussions</a></li>
                                            <li><a href=''>Bookmarks</a></li>
                                            <li><a href='all_nerds.php'>Classmates</a></li>";
                                    } else {
                                        echo"<li><a href='index.php'>Home</a></li>
                                             <li><a href='reset_password.php'>Reset Password</a></li>";
                                    }
                            echo"</ul>
							</div>
						</li>
					</ul>
				</nav>
			</header>";

}