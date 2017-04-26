<?php

function db_connect() {
   $result = new mysqli('127.0.0.1', 'admin', 'cisw31', 'finalproject');
   if($result){
       echo"DB CONNECTED";
       }
}




?>
