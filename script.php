<?php
session_start();
error_reporting(0);
include_once ($_SERVER['DOCUMENT_ROOT']."/sultanagung/includes/class.inc.php");
$jc = new jcore();
switch($_GET['page']){
case "login":
	switch($_GET['action']){
	case "submit":
		if($jc->cekUser($_POST['txtuser'],$_POST['userpass'])>0){
			$jc->gotox("index.php");
		}else{
		$jc->alert('Username atau Password Salah');
			$jc->gotox("index.php?page=login");
		}
	break;
	}
break;
}

if (!isset($_SESSION["login"])) {
	session_destroy();
}
?>
