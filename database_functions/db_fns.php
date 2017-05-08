<?php

function db_connect() {
   $result = new mysqli('127.0.0.1', 'root', '1945', 'bookmarks');
   if (!$result) {
     throw new Exception('Could not connect to database server');
   } else {
     return $result;
   }
}

$con= db_connect();

function redirect($location){
    return header("Location: ".$location);
}

function escape_string($sql){
    global $con;
    return $con->real_escape_string($sql);
}

function set_message($msg){
    $_SESSION['message']= $msg;
}

function display_message(){
    if(isset($_SESSION['message'])){
        echo $_SESSION['message'];
        unset($_SESSION['message']);
    }
}
?>
