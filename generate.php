<?php
include_once('backend/config.ini.php');
include_once('backend/function.php');
if(isset($_POST["lurl"])){
	$lurl = $_POST["lurl"];
	$lurl = mysqli_real_escape_string($conn,$lurl);
	$surl = surl_main_string();
	$query1 = "INSERT INTO url (surl,ourl) VALUES ('$surl','$lurl')";
	if(mysqli_query($conn, $query1)){
	$msg = "<script>swal('Link Generated!', 'Your Link is http://".$surl_domain."/".$surl."', 'success')</script>";
			}
		}
		