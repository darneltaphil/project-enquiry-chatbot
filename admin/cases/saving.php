<?php require_once("../db/access.php");
	$q=$_REQUEST['q'];
	$u='user'.$_REQUEST['u'];
	$sql = "INSERT INTO `newquestions` (newquestions_id, newquestions_name, newquestions_user,newquestions_user_number, newquestions_answer) Values (Null, '".$q."', '".$u."', '0', 0)";
	$exe=mysqli_query($dbc,$sql);
	$resp=array();
	if($exe){
	$resp['status']=true;
	}else{
	$resp['status']=false;
	}
	echo json_encode($resp);