<!DOCTYPE HTML>
<?php require_once "html_output/html_main.php"; ?>
<?php require_once "classes/database.php"; ?>
<?php $database= new Database();
if(!isset($_SESSION['valid_user'])){
    $database->redirect('error_page/oops.php?error_message=You need to login first');
}
?>
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
    <?php
    $database= new Database();

    $result= $database->run_query("SELECT * FROM user");

    ?>
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
                        <td>Name</td>
                        <td>Email</td>
                        <td>School</td>
                        <td>Major</td>
                        <td>Interest</td>
                        <td>Photo</td>
                        </thead>

                        <?php while($row= $result->fetch_assoc()){ ?>
                        <tbody>
                        <td><?php echo $row['username']; ?></td>
                        <td><a href="mailto:<?php echo $row['email']; ?>"><?php echo $row['email']; ?></a></td>
                        <td><?php echo $row['school']; ?></td>
                        <td><?php echo $row['major']; ?></td>
                        <td><?php echo $row['interest'];?></td>
                        <td><img src="<?php echo $row['image_path'] ? $row['image_path'] : 'PLACEHOLDERS/avatar.JPG'; ?>" height="80" width="80" class="img-circle"></td>
                        </tbody>
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