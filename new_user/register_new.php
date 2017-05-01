<?php

  // include function files for this application
//  require_once('../bookmark_functions/bookmark_fns.php');
require_once "../classes/database.php";
  ob_start();

  $database= new Database();

  //create short variable names
  $email= $database->escape_string($_POST['email']);
  $username= $database->escape_string($_POST['name']);
  $password= $database->escape_string($_POST['password']);

  // start session which may be needed later
  // start it now because it must go before headers


    if($database->register($username, $email, $password)){
        session_start();
        $_SESSION['valid_user'] = $username;
        $database->redirect("../welcome.php?");
    } else {
      $database->redirect("../error_page/oops.php?error_message=There was a problem creating your account");
    }


?>
