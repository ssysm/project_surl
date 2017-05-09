<?php
function surl_main_string($length = 6 ) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
function surl_main_redirect($conn,$surl_domain){
	if(isset($_GET['surl'])){
		$surl = $_GET['surl'];
		$surl = mysqli_real_escape_string($conn,$surl);
		$sql = "SELECT * FROM url WHERE surl = '$surl'";
		 $result = $conn->query($sql) or die($conn->error);
		$row = $result->fetch_assoc();
		$redirect_url = $row['ourl'];
		$surl_pre = $row['surl'];
		if($surl_pre = $surl){
      	header("Location:".$redirect_url."");
    	}
    	else{
    		header("Location:404.html");
    	}
	}
}