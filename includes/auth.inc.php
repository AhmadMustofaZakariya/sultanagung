<?php
include_once $_SERVER['DOCUMENT_ROOT']."/sultanagung/includes/class.inc.php";
$auth = new jcore();
$ok = $auth->ceklogin();
if(!$ok){
	header('location: /sultanagung/index.php');
	exit;
}
?>