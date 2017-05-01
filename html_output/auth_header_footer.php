<?php
/**
 * Created by PhpStorm.
 * User: ocean
 * Date: 4/30/17
 * Time: 8:15 AM
 */
function auth_display_header(){
    //This function outputs the HTML for the header section of the login/signup form
    $auth_header= <<<EOD
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!--Jquery CORE-->
		<script src="assets/js/jquery-1.11.1.min.js"></script>
		<!--Jquery CORE-->
        
        <!-- CSS -->
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

EOD;
echo $auth_header;
}



function auth_display_footer(){
    //This function outputs the HTML for the footer section of the login/signup form
    $auth_footer= <<<EOD
        <!-- Javascript -->
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
EOD;
echo $auth_footer;
}