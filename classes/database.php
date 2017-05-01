<?php
require_once "init.php";
/**
 * Created by PhpStorm.
 * User: ocean
 * Date: 4/30/17
 * Time: 7:33 PM
 */
class Database {
    public $conn;

    function __construct(){
        $this->open_connection();
    }

    public function open_connection(){
        $this->conn= new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        if($this->conn->connect_errno){
            die('NO DB CONNECTION, ERROR...' . $this->conn->connect_error);
        }
    }

    public function run_query($sql){
        $result= $this->conn->query($sql);
        $this->confirm_query($result);
        return $result;
    }

    public function confirm_query($result){
        if(!$result){
            die('Query failed...DANIKA...'.$this->conn->error);
        }
    }

    public function redirect($location){
        header('Location: ' . $location);
    }

    public function escape_string($string){
        $escaped_string= $this->conn->real_escape_string($string);
        return $escaped_string;
    }

    public function rows_found($search){
        return $this->conn->num_rows($search);
    }
}

