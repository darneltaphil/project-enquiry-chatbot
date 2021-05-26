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
$options=mysqli_fetch_assoc(mysqli_query($dbc,"SELECT * FROM options"));
define('COMPANY_NAME', $options['option_company']);
define('COMPANY_MOBILE', $options['option_mobile']);
define('COMPANY_EMAIL', $options['option_email']);
define('COMPANY_ADDRESS', $options['option_address']);
define('CURRENCY', $options['option_currency']);
define('COMPANY_GPS', $options['option_gps']);
define('COMPANY_CITY', $options['option_city']);
define('COMPANY_CODE', $options['option_code']);
define('COMPANY_BRANCH', $options['option_branch']);
define('COMPANY_PREFIX', $options['option_user_prefix']);
$permission=mysqli_fetch_assoc(mysqli_query($dbc,"SELECT * FROM auth WHERE auth_user='".PASSPORT."'"));
?> 