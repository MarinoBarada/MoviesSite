<?php

function uidExists($conn, $username, $email) {
    $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql) ){
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if( $row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else{
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function createUser($conn, $username, $email, $pass ) {
    $sql = "INSERT INTO users (usersUid, usersEmail, usersPwd) VALUES (?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql) ){
        header("location: ../signup.php?error=stmtfailed");
        exit();
    }

    $hashedPwd = password_hash( $pass, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    echo "<script type='text/javascript'>window.alert('Succesfully registred, you can now log in.');</script>";
    echo "<script>location.href = '../index.php';</script>";
    /*header("location: ../index.php?error=none");*/
    exit();
}

function loginUser($conn, $username, $pass) {
    $uidExists = uidExists($conn, $username, $username);

    if ($uidExists === false) {
        echo "<script type='text/javascript'>window.alert('User do not exist! Sign up if you are not a member ');</script>";
        echo "<script>location.href = '../index.php';</script>";
        /*header("location: ../index.php?error=wronglogin");*/
        exit();
    }

    $passHashed = $uidExists["usersPwd"];
    $checkPass = password_verify ($pass , $passHashed);

    if($checkPass=== false){
        echo "<script type='text/javascript'>window.alert('Password is incorrect');</script>";
        echo "<script>location.href = '../index.php';</script>";
        /*header("location: ../index.php?error=wronglogin");*/
        exit();
    }
    else if($checkPass=== true){
        session_start();
        $_SESSION["userid"]=$uidExists["usersId"];
        $_SESSION["usersuid"]=$uidExists["usersUid"];
        header("location: ../home.php");
        exit();
    }
}