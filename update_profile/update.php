<?php
require_once "../classes/database.php";
session_start();
/**
 * Created by PhpStorm.
 * User: ocean
 * Date: 5/1/17
 * Time: 4:46 PM
 */
$database= new Database();

$username= $_SESSION['valid_user'];
$school=$database->escape_string($_POST['school']);
$major=$database->escape_string($_POST['major']);
$interest=$database->escape_string($_POST['interest']);

$user_photo= $_FILES['user_photo'];
$tmp_photo_name= $user_photo['tmp_name'];
$target_dir= "/var/www/LAMP/user-authentication-/nerd_profiles/";
$db_path= "nerd_profiles/".$user_photo['name'];
$target_file= $target_dir . $user_photo['name'];
$photo_size= $user_photo['size'];

if($user_photo['size'] != 0){
    $photo_sql="INSERT INTO photos(username, photo_path, photo_size) VALUES('$username', '$db_path', '$photo_size')";
    if($database->run_query($photo_sql)){
        move_uploaded_file($tmp_photo_name, $target_file);
    } else {
        Database::set_message("There was a problem with the photo update");
    }
}


    if($last_id= $database->auto_id()){
        $sql="UPDATE user SET school='$school', major='$major', interest='$interest', photo_id='$last_id' WHERE username='$username'";
        $result= $database->run_query($sql);
        if($result){
            Database::set_message("<h4 class='alert alert-info text-center'>Your profile has been updated successfully</h4>");
            $database->redirect("../profile.php");
        } else {
            Database::set_message("<h4 class='alert alert-danger'>Your profile could not be updated, try again or contact administrator</h4>");
            $database->redirect("../error_page/oops.php");
        }
    } else {
        $sql="UPDATE user SET school='$school', major='$major', interest='$interest' WHERE username='$username'";
        $result= $database->run_query($sql);
        if($result){
            Database::set_message("<h4 class='alert alert-info text-center'>Your profile has been updated successfully</h4>");
            $database->redirect("../profile.php");
        } else {
            Database::set_message("<h4 class='alert alert-danger'>Your profile could not be updated, try again or contact administrator</h4>");
            $database->redirect("../error_page/oops.php");
        }
    }



