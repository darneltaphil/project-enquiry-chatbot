<?php include('auth.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel='shortcut icon' href='./img/favicon.ico' type='image/x-icon'/ >
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
<link href="./css/theme.css" rel="stylesheet">
<link href="./css/fontawesome/css/all.css" rel="stylesheet" />
<link href="./css/main.css" rel="stylesheet" />
<link href="./css/animation.css" rel="stylesheet" />
<link href="./css/modal.css" rel="stylesheet" />
<link href="./css/bootstrap-datepicker3.css"rel="stylesheet" >
<link href="./css/jquery-confirm.min.css" rel="stylesheet" >
<link href="./vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
	
<script src="./js/jquery.js"></script>
<script src="./js/bootstrap.bundle.js"></script>
<script src="./js/jquery-easing/jquery.easing.js"></script>
<script src="./js/bootstrap-notify.js"></script>
<script src="./js/jquery-confirm.min.js"></script>
<script src="./js/script.js"></script>



<script> function playSound(filename){
        var mp3Source = '<source src="sound/' + filename + '.mp3" type="audio/mpeg">';
        var oggSource = '<source src="sound/' + filename + '.ogg" type="audio/ogg">';
        var embedSource = '<embed hidden="true" autostart="true" loop="false" src="' + filename +'.mp3">';
        document.getElementById("sound").innerHTML='<audio autoplay="autoplay">' + mp3Source + oggSource + embedSource + '</audio>';
      }</script>
	<!--PLAY NOTIFICATION SOUND-->
<span id="sound"></span>
<title>Backend - ChatBot</title>
