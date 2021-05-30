<?php require_once("../db/access.php");
$user="user".$_REQUEST['user'];
$sql = "INSERT INTO `newquestions` (`newquestions_id`, `newquestions_user`, `newquestions_question`) VALUES (NULL, '".$user."', '".$question."'); ";
$exe=mysqli_query($dbc,$sql);

$resp=array();
if($exe){
	$resp['status']=true;
}else{	$resp['status']=false;
}
echo json_encode($resp);