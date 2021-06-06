<?php 
session_start();
if(!isset($_SESSION['PASSPORT']) || (trim($_SESSION['PASSPORT']) == '')){
	session_destroy();
	header("location: index.php");
	exit();
}