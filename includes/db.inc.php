<?php 

$serverName = "localhost";
$dBUsername = "root";
$DBPassword = "";
$dBName = "filmovi";

$conn = mysqli_connect($serverName, $dBUsername, $DBPassword, $dBName);

if(!$conn){
    die("Connesction failed: " . mysqli_connect_error());
}