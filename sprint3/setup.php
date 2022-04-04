<?php
// Register the autoloader
spl_autoload_register(function($classname) {
    include "classes/$classname.php";
});

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$db = new mysqli(Config::$db["host"], Config::$db["user"], Config::$db["pass"], Config::$db["database"]);

// NOTE please: This is setup.php which is used to generate the table, please use it only once by loading manually to create the table
//here for the sake of security, no duplicate email 
//$db->query("drop table if exists customer;");


//to store information for display in account.html page
$db ->query("create table user(
                userid int not null auto_increment,
                email text not null unique,
                name text not null,
                password text not null,       
                gender text default 'notspecified',
                age text default 'notspecified',
                contact text default 'notspecified',
                posts int default 0,
                upvotednumber int default 0,
                note text default 'notspecified',

                primary key(userid)
           );");


//$db->query("drop table if exists history;");
$db ->query("create table uploadhistory(
                id2 int not null auto_increment,
                userid int,
                
                itemname text not null,
                note text not null,
                price float not null,
                poster text not null,
                status text not null,
                time date not null,
                category text not null,
                upvote int not null default 0,

                primary key(id2),
                FOREIGN KEY (userid) REFERENCES user(userid)
           );");
