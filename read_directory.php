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
    <title>Project Files</title>
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
        <h2>Original Project Files</h2>
        <p><!--PLACEHOLDER--></p>
    </header>
    <div class="row">
        <div class="col-md-2">
            <!--PLACEHOLDER-->
        </div>

        <div class="col-md-8">
           <?php
           $dir = "project_files/";

           // Open a directory, and read its contents
           if (is_dir($dir)){
               if ($dh = opendir($dir)){
                   while (($file = readdir($dh)) !== false){
                       echo "filename:  " . $file . "<br>";
                   }
                   closedir($dh);
               }
           }
           ?>
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




