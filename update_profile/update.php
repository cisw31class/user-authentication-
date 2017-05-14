<?php
ob_start();
session_start();

require_once "../bookmark_functions/bookmark_fns.php";
/**
 * Created by PhpStorm.
 * User: ocean
 * Date: 5/7/17
 * Time: 1:39 PM
 */
$con= db_connect();

$user= $_SESSION['valid_user'];
$email= $_POST['email'];
$pic= $_FILES['user_pic'];
$pic_size= $pic['size'];
$current_pic= $_POST['current_pic'];

//--------------------------------------UPLOAD PHOTO and UPDATE PROFILE----------------------------
if($pic_size != 0){
    unlink("../nerd_pics/". $current_pic);
    upload_photo($pic, $con, $user);
} else {
    try{
        if(!valid_email($email)){
            throw new Exception("This is not a vaild email address, try again");
        }
    }
    catch(Exception $e){
        echo $e->getMessage();
        exit;
    }
}



$sql="UPDATE user SET email='$email' WHERE username='$user'";
$con->query($sql);

set_message("<h3 class='alert alert-info text-center'>Profile has been updated</h3>");
redirect("../profile.php");

