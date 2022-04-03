<?php
class connectController {

    private $command;

    private $db;

    public function __construct($command) {
        $this->command = $command;
        $this->db = new Database();
    }
    // NOTE please: There is a setup.php which is used to generate the table, please use it only once by loading manually to create the table
    public function run() {
        switch($this->command) {
            case "index":
                $this->indexPage();
                break;
            case "upload":
                $this->upload();
                break;
            case "account":
                $this->account();
                break;
            case "logout":
                $this->endSession();
                break;
            case "login":
            default:
                $this->login();
                break;
        }
    }

    private function endSession() {          
        session_destroy();
        header("Location: ?command=login");
    }
    

    public function indexPage(){
        include("templates/mainpage.php");
    }
    
     public function account() {
        include("templates/account.php");
     }

    
    //since user is logged in, we have access to upload page and session's email and name
    public function upload(){
//        $getuserid = $this->db->query("select * from user where email = ? and name = ?" ,"ss", $_SESSION['email'], $_SESSION['name']);
//        if (!isset($_SESSION["userid"])){
//            $_SESSION["userid"] = $getuserid[0]["userid"];
//        }
//
//        if (isset($_POST["note"]) && !empty($_POST["note"]) && isset($_POST["price"]) && !empty($_POST["price"]) && isset($_POST["time"]) && !empty($_POST["time"]) && isset($_POST["status"]) && !empty($_POST["status"]) && isset($_POST["itemname"]) && !empty($_POST["itemname"]) && isset($_POST["poster"]) && !empty($_POST["poster"])){
//            //update this user's post number by 1
//            $data = $this->db->query("update user set posts = posts + 1 where userid = ?" ,"s", $_SESSION["userid"]);
//
//            $data2 = $this->db->query("insert into uploadhistory (itemname, note, price, poster, status, time, category, userid) values (?, ?, ?, ?, ?, ?, ?, ?);","sssssssi",$_POST["itemname"],$_POST["note"],$_POST["price"],$_POST["poster"],$_POST["status"],$_POST["time"],$_POST["category"],$_SESSION["userid"]);
//            header("Location: ?command=index");
//        }
        include "templates/uploadpage.php";
    }

    public function login() {
        if (isset($_POST["email"]) && !empty($_POST["email"]) && isset($_POST["name"]) && !empty($_POST["name"]) ) {       
            
            // need to create a table called user
            $data = $this->db->query("select * from user where email = ?;", "s", $_POST["email"]);
            if ($data === false) {
                $error_msg = "Error checking for user";
            } else if (!empty($data)) {
                if ($data[0]["name"] === $_POST["name"] && password_verify($_POST["password"], $data[0]["password"])) {
                    $_SESSION["name"] = $data[0]["name"];
                    $_SESSION["email"] = $data[0]["email"];
                    header("Location: ?command=index");
                } else{
                    $error_msg = "Wrong password/name";
                }
            } else {
                $insert = $this->db->query("insert into user (name, email, password) values (?, ?, ?);", 
                        "sss", $_POST["name"], $_POST["email"], 
                        password_hash($_POST["password"], PASSWORD_DEFAULT));
                if ($insert === false) {
                    $error_msg = "Error inserting user";
                }else{
                    $_SESSION["name"] = $_POST["name"];
                    $_SESSION["email"] = $_POST["email"];     
                    header("Location: ?command=index");
                }
            }
        }
        include "templates/login.php";
    }
}