<?php require_once("../db/access.php");
$user="user".$_REQUEST['user'];
$sql = "INSERT INTO `botquestions` (`botquestions_id`, `botquestions_name`, `botquestions_answer`,`botquestions_count`) VALUES (NULL, '".$keyword."', '".$question."', 0); ";
$exe=mysqli_query($dbc,$sql);
$resp=array();
if($exe){
	$resp['status']=true;
}else{	$resp['status']=false;
}
echo json_encode($resp);