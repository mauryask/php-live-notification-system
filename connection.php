<?php
$charset = "UTF8";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "notification";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error)
 {
    die("Connection failed: ".$conn->connect_error);
 }

?>
