<?php
ob_start();
/**
 * Created by PhpStorm.
 * User: ocean
 * Date: 5/9/17
 * Time: 2:49 PM
 */
  require_once("../bookmark_functions/bookmark_fns.php");
  //do_html_header("Resetting password");


  // creating short variable name
  $username = escape_string($_POST['username']);

  try {
      $password = reset_password($username);
      notify_password($username, $password);
//      echo 'Your new password has been emailed to you.<br>';
      redirect("../success_page/success.php?success_message=Your password has been reset successfully, do not forget to change it after login.");
  }
  catch (Exception $e) {
//      echo 'Your password could not be reset - please try again later.';
      $msg= 'Your password could not be reset - username not found';
      redirect("../error_page/error.php?error_message=$msg");
  }


  //do_html_url('login.php', 'Login');
  //do_html_footer();

