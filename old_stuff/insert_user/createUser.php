<?php 
require_once"../db_connect/db_connect.php";

$conn= db_connect();

$name= $_POST['name'];
$email= $_POST['email'];
$password= $_POST['password'];


$conn->query("INSERT INTO user VALUES("'.$name.''.$password.''.$email.'")");








?>