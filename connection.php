<?php
$dbHost = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "cms";


$conn = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);
if (!$conn) {
    die("Somethig went wrong, Database is not connected;");
}
?>