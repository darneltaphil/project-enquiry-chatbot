<?php
require("../db/access.php");
$id=$_REQUEST['id'];
$sql="SELECT * FROM botquestions WHERE botquestions_id=".$id."";
$exe=mysqli_query($dbc,$sql);
$res=mysqli_fetch_assoc($exe);
echo json_encode($res);
?>