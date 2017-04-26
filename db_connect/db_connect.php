<?php

function db_connect() {
   $result = new mysqli('localhost', 'admin', 'cisw31', 'finalproject');
   if (!$result) {
     throw new Exception('Could not connect to database server');
   } else {
	echo"CONNECTION SUCCESSFUL";
     return $result;
   }
}

function lamp_connect() {
   $result = new mysqli('localhost', 'admin', 'cisw31', 'finalproject');
   if (!$result) {
     throw new Exception('Could not connect to database server');
   } else {
	echo"CONNECTION SUCCESSFUL";
     return $result;
   }
}



?>
