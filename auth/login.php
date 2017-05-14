<!DOCTYPE html>
<?php require_once "../html_output/html_main.php"; ?>
<html lang="en">
    <head>
        <title>Login</title>
        <!--HEADER-->
        <?php auth_display_header(); ?>
        <!--HEADER-->
    </head>

    <body>

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <!--LOGIN FORM-->
                    <?php display_login(); ?>
                    <!--LOGIN FORM-->
                </div>
            </div>

        </div>


        <!--FOOTER-->
        <?php auth_display_footer(); ?>
        <!--FOOTER-->
    </body>
</html>