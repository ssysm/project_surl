<?php
$surl_domain= $_SERVER['HTTP_HOST'];
$servername = "YOUR MYSQL HOST";
$username = "YOUR MYSQL USERNAME";
$password = "YOUR MYSQL PASSWORD";
$dbname = "project_surl";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>