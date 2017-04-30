<!DOCTYPE HTML>
<?php require_once "html_output/html_main.php"; ?>
<html>
<head>
    <title>Classmates</title>
    <!--HEADER-->
    <?php display_header(); ?>
    <!--HEADER-->
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

    </body>
</html>