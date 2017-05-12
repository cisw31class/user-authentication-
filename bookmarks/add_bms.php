<?php
ob_start();
require_once('../bookmark_functions/bookmark_fns.php');
session_start();
/**
 * Created by PhpStorm.
 * User: ocean
 * Date: 5/10/17
 * Time: 1:25 PM
 */



  //create short variable name
  $new_url = $_POST['new_url'];


  //do_html_header('Adding bookmarks');

  try {
      check_valid_user();
      if (!filled_out($_POST)) {
          throw new Exception('Form not completely filled out.');
      }
      // check URL format
      if (strstr($new_url, 'http://') === false) {
          $new_url = 'http://'.$new_url;
      }

      // check URL is valid
      if (!fopen($new_url, 'r')) {
          throw new Exception('Not a valid URL.');
      }

      // try to add bm
      add_bm($new_url);
//      echo 'Bookmark added.';

        // get the bookmarks this user has saved
      //if ($url_array = get_user_urls($_SESSION['valid_user'])) {
//          display_user_urls($url_array);
      //}
      set_message("<p class='alert alert-info text-center'>$new_url has been bookmarked</p>");
      redirect("bookmark.php");
  }
  catch (Exception $e) {
      $msg= $e->getMessage();
      redirect("../error_page/error.php?error_message=$msg");
  }
  //display_user_menu();
  //do_html_footer();

