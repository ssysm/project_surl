<?php
//引用数据库链接文件
include_once('backend/config.ini.php');
//和函数文件
include_once('backend/function.php');
//如果URL已被发送
if(isset($_POST["lurl"])){
$lurl = $_POST["lurl"];
$lurl = mysqli_real_escape_string($conn,$lurl);
$surl = surl_main_string();
//检查原url是否已被生成
$check_string = "SELECT * FROM url WHERE ourl = '$lurl'";
$result = $conn->query($check_string);
$row = $result->fetch_assoc();
   	if($row['ourl'] == $lurl){
		$msg = "<script>swal('Link Generated!', 'Your Link is http://".$surl_domain."/".$row['surl']."', 'success')</script>";
	}
	else{
    	$insert = "INSERT INTO url (surl,ourl) VALUES ('$surl','$lurl')";
   		if(mysqli_query($conn, $insert)){
    		$msg = "<script>swal('Link Generated!', 'Your Link is http://".$surl_domain."/".$surl."', 'success')</script>";
    	}
	}
}
