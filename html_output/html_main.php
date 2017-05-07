<?php
//This file contains all require HTML output files for the site layout
//By including this file you are including everything below
ob_start();


require_once "auth_header_footer.php";
require_once "header.php";
require_once "nav_bar.php";
require_once "login_page.php";
require_once "signup_page.php";
require_once "footer.php";
?>