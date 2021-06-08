<?php require_once("../db/access.php");
	$q=$_REQUEST['q'];
	$sql = "INSERT INTO `newquestions` (newquestions_id, newquestions_name) Values (Null, '".$q."')";
	$exe=mysqli_query($dbc,$sql);
	$resp=array();
	if($exe){
	$resp['status']=true;
	}else{
	$resp['status']=false;
	}
	echo json_encode($resp);