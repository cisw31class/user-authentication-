<!DOCTYPE HTML>
<html>
<head>
    <title>Classmates</title>
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

    <?php require_once "html_output/html_main.php"; ?>
</head>
<body>

<!--NAVIGATION-->
<?php display_nav_bar(); ?>
<!--NAVIGATION-->

<!-- Main -->
<div id="main" class="container">
    <header class="major">
        <h2>Classmates</h2>
        <p>This table contains all users</p>
    </header>
    <div class="row">
        <div class="col-md-2">
            <!--PLACEHOLDER-->
        </div>

        <div class="col-md-8">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Email</td>
                    <td>School</td>
                    <td>Major</td>
                    <td>Interest</td>
                    </thead>

                    <tbody>
                    <td>25</td>
                    <td>Annie</td>
                    <td><a href="mailto:annie@gmail.com">annie@gmail.com</a></td>
                    <td>Mt Sac</td>
                    <td>CIS</td>
                    <td>Guns and Poker</td>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="col-md-2">
            <!--PLACEHOLDER-->
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