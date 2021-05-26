<?php require ('../auth.php');
$id=$_REQUEST['id'];

$sql="DELETE FROM enquiries WHERE enquiries.botuser_id='".$id."'";
$exe=mysqli_query($dbc,$sql);	

$resp=array();
if($exe){
	$resp['status']=true;
//	if(file_exists("case_files/$filename")){
//			unlink("case_files/$filename");
//	}
}else{	$resp['status']=false;
}
echo json_encode($resp);