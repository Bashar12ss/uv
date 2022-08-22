<?php 
$key = $_POST["check_key"];
if($key == "qrcode_key"){
	echo "http://0.0.0.0:8080/qr.php";
}

?>
