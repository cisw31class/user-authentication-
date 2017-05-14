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

function set_recommend_message($msg){
    $_SESSION['rec_mess']= $msg;
}

function display_recommend_message(){
    if(isset($_SESSION['rec_mess'])){
        echo $_SESSION['rec_mess'];
        unset($_SESSION['rec_mess']);
    }
}

function upload_photo($file, $conn, $session){
    $pic= $file['user_pic'];
    $tmp= $file['tmp_name'];
    $name= $file['name'];
    $target= 'nerd_pics/';
    $destination= $target.$name;

    $sql="UPDATE user SET user_pic='$name' WHERE username='$session'";
    $conn->query($sql);
    if(!move_uploaded_file($tmp, "../".$destination)){
        throw new Exception("YOUR FILE FAILED TO UPLOAD AND YES, ITS BECAUSE HES BLACK");
    }
}

?>
