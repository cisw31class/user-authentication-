<?php
/**
 * Created by PhpStorm.
 * User: ocean
 * Date: 5/7/17
 * Time: 9:20 AM
 */
session_start();

session_destroy();

header("Location: ../index.php");