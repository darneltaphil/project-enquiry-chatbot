<?php session_start();
if(!isset($_SESSION['PASSPORT']) || (trim($_SESSION['PASSPORT']) == '')){
session_destroy();
header('location: ./login/');
	exit();
}else{require('inc/functions.php');
	define('PASSPORT',convert_string('decrypt',$_SESSION['PASSPORT']));
	define('ROLE', convert_string('decrypt',$_SESSION['ROLE']));
    define('USERMAIL',convert_string('decrypt',$_SESSION['USERMAIL']));       
//	define('DBFOLDER',convert_string('decrypt',$_SESSION['__dipss_fd_2_dtb']));	 
//	define('DBLINK',convert_string('decrypt',$_SESSION['__dipss_lk_2_dtb']));	 
}
require_once("db/access.php");//require_once("db/".DBFOLDER."/".DBLINK.".php");
?> 