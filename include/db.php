<?php
$server ="localhost";
$username ="root";
$password ="";
$dbname ="portfolio";

session_start();
error_reporting(1);
$db = mysqli_connect($server, $username, $password, $dbname);
if (!$db){
    die("Connection Failed:".mysqli_connect_error());
}
?>