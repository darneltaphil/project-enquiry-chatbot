<?php require_once("../db/access.php");
	$n=$_REQUEST['n'];
	$u=$_REQUEST['u'];
	$req=mysqli_query($dbc,"(SELECT max(newquestions_id) as id FROM newquestions WHERE  newquestions_user='user".$u."')");
	$id=mysqli_fetch_assoc($req);
	$sql = "UPDATE newquestions SET newquestions_answer=1, newquestions_user_number='".$n."' WHERE newquestions_id =".$id['id']."";
	$exe=mysqli_query($dbc,$sql);
	$resp=array();
	if($exe){
	$resp['status']=true;
	}else{
	$resp['status']=false;
	}
	echo json_encode($resp);