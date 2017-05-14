<?php
require_once('db_fns.php');
/**
 * Created by PhpStorm.
 * User: ocean
 * Date: 4/30/17
 * Time: 3:09 PM
 */
$conn= db_connect();

$name= $_POST['name'];



echo $name;