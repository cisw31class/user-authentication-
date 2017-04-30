<?php
/**
 * Created by PhpStorm.
 * User: ocean
 * Date: 4/30/17
 * Time: 7:38 AM
 */
function display_header(){
    $header= <<<EOD
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
EOD;
echo $header;
}