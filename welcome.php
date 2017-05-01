<?php
require_once "html_output/html_main.php";
require_once "classes/database.php";
/**
 * Created by PhpStorm.
 * User: ocean
 * Date: 5/1/17
 * Time: 9:56 AM
 */
display_header();
?>

<?php display_nav_bar(); ?>

<br><br><br><br>

<?php
$database= new Database();
$username= $_SESSION['valid_user'];

$sql="SELECT username, email FROM user WHERE username='$username'";
$result= $database->run_query($sql);

while($row= $result->fetch_assoc()){
    $email= $row['email'];
}


?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3>Welcome to our site <?php echo $username; ?>, registration was successful!<br>
                You are encouraged to get started right away...</h3>

            <br><br>

            Proceed by updating your profile or by starting at the home page.
        </div>
    </div>

    <br><br><br><br>

    <div class="row">
        <div class="col-md-12">
            <a href="profile.php" class="btn btn-primary">Profile</a> <span> </span> <a href="index.php" class="btn btn-default">Home</a>
        </div>
    </div>
</div>

<br><br><br><br>






<?php display_footer(); ?>
