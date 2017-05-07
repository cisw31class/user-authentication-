<?php
ob_start();
session_start();

require_once "../bookmark_functions/bookmark_fns.php";
/**
 * Created by PhpStorm.
 * User: ocean
 * Date: 5/7/17
 * Time: 2:18 PM
 */
try{
    if(!filled_out($_POST)){
        throw new Exception("Missing password or username...cannot proceed");
    }
}
catch(Exception $f){
    $msg= $f->getMessage();
    redirect("../error_page/error.php?error_message=$msg");
    exit;
}
$username= $_POST['name'];
$password= $_POST['password'];



login($username, $password);
$_SESSION['valid_user']= $username;
redirect("../profile.php");