<?php
require_once('../bookmark_functions/bookmark_fns.php');
session_start();
/**
 * Created by PhpStorm.
 * User: ocean
 * Date: 5/8/17
 * Time: 9:35 AM
 */



  //do_html_header('Changing password'); NOT USING THIS

  // create short variable names
  $old_passwd = escape_string($_POST['old_passwd']);
  $new_passwd = escape_string($_POST['new_passwd']);
  $new_passwd2 = escape_string($_POST['new_passwd2']);

  try {
      if(check_valid_user()){
          if (!filled_out($_POST)) {
              throw new Exception('You have not filled out the form completely. Please try again.');
          }

          if ($new_passwd != $new_passwd2) {
              throw new Exception('Passwords entered were not the same.  Not changed.');
          }

          if ((strlen($new_passwd) > 16) || (strlen($new_passwd) < 6)) {
              throw new Exception('New password must be between 6 and 16 characters.  Try again.');
          }
      }

      // attempt update
      change_password($_SESSION['valid_user'], $old_passwd, $new_passwd);
      echo 'Password changed.';
      set_message("<h3 class='alert alert-success'>Your password has been updated</h3>");
      redirect("../profile.php");
  }
  catch (Exception $e) {
      $msg= $e->getMessage();
      redirect("../error_page/error.php?error_message=$msg");
      exit;
  }

  //NOT USING THESE
  //display_user_menu();
  //do_html_footer();

