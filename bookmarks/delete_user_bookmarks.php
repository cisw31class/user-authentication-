<?php
ob_start();
require_once('../bookmark_functions/bookmark_fns.php');
/**
 * Created by PhpStorm.
 * User: ocean
 * Date: 5/12/17
 * Time: 6:37 AM
 */
  session_start();

  //create short variable names
  $del_me = $_POST['del_me'];
  $valid_user = $_SESSION['valid_user'];

  //do_html_header('Deleting bookmarks');
  check_valid_user();

  if (!filled_out($_POST)) {
      echo '<p>You have not chosen any bookmarks to delete.<br>
          Please try again.</p>';
      //display_user_menu();
      //do_html_footer();
      exit;
  } else {
      if (count($del_me) > 0) {
          foreach($del_me as $url) {
              if (delete_bm($valid_user, $url)) {
                  echo 'Deleted '.htmlspecialchars($url).'.<br>';
              } else {
                  echo 'Could not delete '.htmlspecialchars($url).'.<br>';
              }
          }
      } else {
          echo 'No bookmarks selected for deletion';
      }
  }

  set_message("<h3 class='alert alert-info text center'>You have successfully deleted stored bookmarks</h3>");
  redirect("bookmark.php");

  // get the bookmarks this user has saved
  //if ($url_array = get_user_urls($valid_user)) {
    //  display_user_urls($url_array);
  //}

  //display_user_menu();
  //do_html_footer();
