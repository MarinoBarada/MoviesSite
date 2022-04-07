<?php

if(isset($_POST["submit"])) {
    
    $username = $_POST["username"];
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $passc = $_POST["passc"];

    require_once 'db.inc.php'; 
    require_once 'functions.inc.php'; 

    if (uidExists($conn, $username, $email) !== false) {
        echo "<script type='text/javascript'>window.alert('User allread exist!');</script>";
        echo "<script>location.href = '../signup.php';</script>";
        exit();
    }

    createUser($conn, $username, $email, $pass );
}
else {
    header("location: ../signup.php");
}