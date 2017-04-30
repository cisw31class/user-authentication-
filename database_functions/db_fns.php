<?php

function db_connect() {
   $result = new mysqli('127.0.0.1', 'root', '1945', 'bookmarks');
   if (!$result) {
     throw new Exception('Could not connect to database server');
   } else {
     return $result;
   }
}

?>
