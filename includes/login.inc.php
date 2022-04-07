<?php 
session_start();
echo "hi";

if(isset($_POST["submit"])){

    $username = $_POST["uid"];
    $pass = $_POST["pass"];

    require_once 'db.inc.php';
    require_once 'functions.inc.php';

    loginUser($conn, $username, $pass );
}
else {
    header("location: ../index.php");
    exit();   
}