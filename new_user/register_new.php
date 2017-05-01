<?php
ob_start();
  // include function files for this application
  require_once('../bookmark_functions/bookmark_fns.php');
  $database= new Database();

  //create short variable names
  $email= $database->escape_string($_POST['email']);
  $username= $database->escape_string($_POST['name']);
  $password= $database->escape_string($_POST['password']);
  //$passwd2=$_POST['conf_password'];
  // start session which may be needed later
  // start it now because it must go before headers
  session_start();
  //THE WHOLE TRY BLOCK IS NOT NEEDED BECAUSE WE ARE VALIDATING CLIENT SIDE
  //try   {
    // check forms filled in

    //    if (!filled_out($_POST)) {
    //      throw new Exception('You have not filled the form out correctly - Please go back and try again.');
    //    }
    //
    //    // email address not valid
    //    if (!valid_email($email)) {
    //      throw new Exception('That is not a valid email address.  Please go back and try again.');
    //    }


    // passwords not the same
    //NOT USING THIS BECAUSE WE ARE VALIDATING CLIENT SIDE!!!!!
    // if ($passwd != $passwd2) {
    //   throw new Exception('The passwords you entered do not match - please go back and try again.');
    // }

    //NOT USING THIS BECAUSE WE ARE VALIDATING CLIENT SIDE!!!!!
    // check password length is ok
    // ok if username truncates, but passwords will get
    // munged if they are too long.
    // if ((strlen($passwd) < 6) || (strlen($passwd) > 16)) {
    //   throw new Exception('Your password must be between 6 and 16 characters. Please go back and try again.');
    // }


    // attempt to register
    // this function can also throw an exception
    register($username, $email, $password);
    // register session variable
    $_SESSION['valid_user'] = $username;
    $database->redirect("../welcome.php?");

    // provide link to members page
    //do_html_header('Registration successful');
    //echo 'Your registration was successful.  Go to the members page to start setting up your bookmarks!';
    //do_html_url('member.php', 'Go to members page');

   // end page
   //do_html_footer();
  //}
  //catch (Exception $e) {
    // do_html_header('Problem:');
     //echo $e->getMessage();
     //do_html_footer();
     //exit;
  //}
?>
