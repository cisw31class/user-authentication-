<?php
/**
 * Created by PhpStorm.
 * User: ocean
 * Date: 4/30/17
 * Time: 2:56 PM
 */
function set_message($message){
    $_SESSION['message']= $message;
    unset($_SESSION['message']);
}