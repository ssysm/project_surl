<?php 
session_start();
include_once 'generate.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>PROJECT_SURL - Made By TheEditorSdtuio</title>
	<script src="frontend/dist/sweetalert.min.js"></script>
	<script type="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<link rel="stylesheet" type="text/css" href="frontend/dist/sweetalert.css">
</head>
<body>
<center><h2>PROJECT_SURL</h2></center>
<hr />
Please enter your long URL<br>
<br>
<form method="post" action="">
Long URL :<input type="url" name="lurl" required>
<input type="submit">
</form>
</center>
<?php
if(isset($msg))
{
echo $msg;
}
?>
<hr />
<h3>V1.1 Made by TheEditorSdtuio</h3>
<h3>Under MIT LICENSE</h3>
</body>
</html>