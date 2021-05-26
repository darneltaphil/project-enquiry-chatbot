<?php
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'lotuste1_chatbot');
   define('DB_PASSWORD', 'w06I@yF8');  
   define('DB_DATABASE', 'lotuste1_chatbot');
$dbc=mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE) or die('Could not connect to the database');
$dbc_pdo= new PDO('mysql:host='.DB_SERVER.';dbname='.DB_DATABASE, DB_USERNAME, DB_PASSWORD);