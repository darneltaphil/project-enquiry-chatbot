<?php require ('../auth.php');
	$user="user".$_REQUEST['user'];
	$req=mysqli_query($dbc,"SELECT max(botuser_id) as id FROM enquiries WHERE enquiries.botuser_name='".$user."'");
	$id=mysqli_fetch_assoc($req);
	 $sql = "UPDATE `enquiries` SET `botuser_questions` =`botuser_questions`+1 WHERE `enquiries`.`botuser_id` =".$id['id']."";
	$exe=mysqli_query($dbc,$sql);
	$resp=array();
	if($exe){
	$resp['status']=true;
	}else{
	$resp['status']=false;
	}
	echo json_encode($resp);