<?php 
session_start();
if(!isset($_SESSION['PASSPORT']) || (trim($_SESSION['PASSPORT']) == '')){
	session_destroy();
	header("location: index.php");
	exit();
}?>
	<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.js"></script>
<link href="../css/theme.css" rel="stylesheet" />

	<div class="text-center">
            <div class="error mx-auto" data-text="404">404</div>
            <p class="lead text-gray-800 mb-5">Page Not Found</p>
            <p class="text-gray-500 mb-0">It looks like you found a glitch in the matrix...</p>
          </div>
