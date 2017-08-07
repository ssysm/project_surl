<?php
include '../backend/config.ini.php';
include '../backend/function.php';
header('Content-Type: application/json');
function vaildAPI($conn,$surl_domain){
	if ($_GET['request']) {
		$lurl = $_GET["request"];
		$lurl = mysqli_real_escape_string($conn,$lurl);
		$surl = surl_main_string();
		$check_string = "SELECT * FROM url WHERE ourl = '$lurl'";
		$result = $conn->query($check_string);
		$row = $result->fetch_assoc();
		if($row['ourl'] == $lurl){
			$msg = "{'request':{'status':'OK','url':'".$lurl."'},'response':{'domain':'".$surl_domain."','surl':'".$row['surl']."','full':'http://".$surl_domain."/".$row['surl']."'}}";
			echo str_replace("'","\"",str_replace("\"", "",$msg));
		}
		else{
			$insert = "INSERT INTO url (surl,ourl) VALUES ('$surl','$lurl')";
			if(mysqli_query($conn, $insert)){
				$msg = "{
					'request':{
						'status':'OK',
						'url':'".$lurl."'
					},
					'response':{
						'domain':'".$surl_domain."',
						'surl':'".$surl."',
						'full':'http://".$surl_domain."/".$surl."'
					}
				}";
				echo str_replace("'","\"",str_replace("\"", "",$msg));
			}
		}
	}
}
function noVal($requestURL){
	$msg = "{
					'request':{
						'status':'Failed',
						'url':'".$requestURL."'
					},
					'response':'Error'
				}";
				echo str_replace("'","\"",str_replace("\"", "",$msg));
}
if(!isset($_GET['request']) || !filter_var($_GET['request'], FILTER_VALIDATE_URL) || $_GET['request'] == ''){
	$requestURL = $_GET['request'];
	noVal($requestURL);
}elseif(isset($_GET['request']) && filter_var($_GET['request'], FILTER_VALIDATE_URL)) {
	vaildAPI($conn,$surl_domain);
}