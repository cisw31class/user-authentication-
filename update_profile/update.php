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

$email= $_POST['email'];

try{
    if(!valid_email($email)){
        throw new Exception("This is not a vaild email address, try again");
    }
}
catch(Exception $e){
    echo $e->getMessage();
    exit;
}
$username= $_SESSION['valid_user'];

$sql="UPDATE user SET email='$email' WHERE username='$username'";
$con->query($sql);

set_message("<h3 class='alert alert-info text-center'>Profile has been updated</h3>");
redirect("../profile.php");

