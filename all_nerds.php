<?php require_once "html_output/html_main.php"; ?>
<?php require_once "database_functions/db_fns.php"; ?>
<?php session_start(); ?>
<!DOCTYPE HTML>
<?php
if(!isset($_SESSION['valid_user'])){
    header("Location: error_page/error.php?error_message=You are not authorized to be here!");
}
?>
<html>
<head>
    <title>Classmates</title>
    <!--HEADER-->
    <?php display_header(); ?>
    <!--HEADER-->
    <?php
    $username= $_SESSION['valid_user'];
    $con= db_connect();
    $sql="SELECT * FROM user WHERE username='$username'";
    $result= $con->query($sql);
    ?>
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
                        <tr>
                            <td>Name</td>
                            <td>Email</td>
                        </tr>
                        <?php
                        while($row= $result->fetch_object()){ ?>
                        <tr>
                            <td><?php echo $row->username; ?></td>
                            <td><a href="mailto:<?php echo $row->email; ?>"><?php echo $row->email; ?></a></td>
                        <tr>
                        <?php } ?>
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