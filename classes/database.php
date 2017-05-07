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

    public function login($username, $password) {
        // check username and password with db
        // if yes, return true
        // else throw exception

        // check if username is unique
        $result = $this->run_query("select * from user
                         where username='".$username."'
                         and passwd = sha1('".$password."')");
        if (!$result) {
            $this->set_message("The account for " . $username . " was not found with given credentials");
        }

        if ($result->num_rows>0) {
            return true;
        } else {
            $this->set_message("Login failed! Try again");
        }
    }



    public function register($username, $email, $password){
        // if ok, put in db
        $result = $this->run_query("insert into user(username, passwd, email) values
                         ('".$username."', sha1('".$password."'), '".$email."')");
        if (!$result) {
            throw new Exception('Could not register you in database - please try again later.');
        }
        return true;
    }



    public static function set_message($msg){
        session_start();
        $_SESSION['message']= $msg;
    }

    public static function display_message(){
        if (isset($_SESSION['message'])) {
            echo $_SESSION['message'];
            unset($_SESSION['message']);
        }
    }

    //This function requires the connection to work right
    public function auto_id(){
        return mysqli_insert_id($this->conn);
    }
}

