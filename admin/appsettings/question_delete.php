<?php
//this script delete a key word from the database
require("../db/access.php");
$id=$_REQUEST['id'];
$sql="DELETE FROM botquestions WHERE botquestions_id=".$id."";
$exe=mysqli_query($dbc,$sql);
if($exe)echo json_encode(true);
?>