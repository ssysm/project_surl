<?php
$surl_domain="YOUR DOMAIN";
$servername = "YOUR DATABASE HOST";
$username = "YOUR DTABASE USERNAME";
$password = "YOUR DATABASE PASSWORD";
$dbname = "YOUR DATABASE NAME";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>