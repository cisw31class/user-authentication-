<?php
require_once('../classes/database.php');
/**
 * Created by PhpStorm.
 * User: ocean
 * Date: 4/30/17
 * Time: 3:09 PM
 */
$database= new Database();

$check_name= $_POST['name'];

$sql="select * from user where username='$check_name'";
$result= $database->run_query($sql);
$row_cnt= $result->num_rows;
if($row_cnt > 0){
    echo"USER NAME ALREADY EXISTS, SELECT A DIFFERENT ONE";
} else {
    echo"";
}


