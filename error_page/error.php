<?php
/**
 * Created by PhpStorm.
 * User: ocean
 * Date: 5/7/17
 * Time: 2:30 PM
 */
?>
<!DOCTYPE HTML>
<html>
<head>
    <title>Oops</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]><script src="../assets/js/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="../assets/css/main.css" />
    <!--[if lte IE 8]><link rel="stylesheet" href="../assets/css/ie8.css" /><![endif]-->
    <!--[if lte IE 9]><link rel="stylesheet" href="../assets/css/ie9.css" /><![endif]-->

    <!--BOOTSTRAP w/ Jquery CORE-->
    <script src="../bootstrap/jquery-3.2.1.js"></script>
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
    <script src="../bootstrap/js/bootstrap.js"></script>
    <!--BOOTSTRAP w/ Jquery CORE-->

    <style>
        #profile_pic {
            text-align: center;
        }
    </style>
</head>
<body>

<!-- Main -->
<div id="main" class="container 75%">
    <header class="major">
        <h2>Oops...seems there has been an error</h2>
        <p>The task failed successfully because...<br>
            <?php echo $_GET['error_message']; ?></p>
        <br>
        <img src="../images/mistake.jpg" height="300" width="500">
    </header>

    <section>
        <a href="javascript:history.back()" class="btn btn-primary">BACK</a>
    </section>
</div>

<footer id="footer">
    <div align="center">
        <ul class="menu">
            <li><a href="#">Terms of Use</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Contact Us</a></li>
        </ul>
    </div>
</footer>

<!-- Scripts -->
<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/jquery.scrolly.min.js"></script>
<script src="../assets/js/skel.min.js"></script>
<script src="../assets/js/util.js"></script>
<!--[if lte IE 8]><script src="../assets/js/ie/respond.min.js"></script><![endif]-->
<script src="../assets/js/main.js"></script>
<!-- Scripts -->
</body>
</html>
