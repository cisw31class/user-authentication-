<?php
require_once "../classes/database.php";
/**
 * Created by PhpStorm.
 * User: ocean
 * Date: 5/1/17
 * Time: 2:04 PM
 */
$database= new Database();

$username= $database->escape_string($_POST['name']);
$password= $database->escape_string($_POST['password']);

if($database->login($username, $password)){
    session_start();
    $_SESSION['valid_user']= $username;
    $database->redirect("../index.php");
} else {
    Database::set_message("Invalid credentials, cannot login");
    $database->redirect("../auth/login.php");
}