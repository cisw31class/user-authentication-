<?php
require_once "../classes/database.php";
/**
 * Created by PhpStorm.
 * User: ocean
 * Date: 4/30/17
 * Time: 9:37 PM
 */
$database= new Database();

session_start();

session_destroy();

$database->redirect('../til_next_time/goodbye.php');