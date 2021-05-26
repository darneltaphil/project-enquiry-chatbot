<?php require ('../auth.php');
$user="user".$_REQUEST['user'];
require_once('detectOS.php');
	//GET IP ADDRESS
	$remote_ip=$_SERVER['REMOTE_ADDR']	;
	//FETCH OTHER DETAILS
	@$json  = file_get_contents("http://ipinfo.io/$remote_ip/geo");
	@$json  =  json_decode($json ,true);
//	@$country =  $json['country'];
//	@$region= $json['region'];
	@$city = $json['city'];
	@$loc=$json['loc'];
	$os = getOS($_SERVER['HTTP_USER_AGENT']);
	//$browser = get_browser(null, true);

 $sql = "INSERT INTO `enquiries` (`botuser_id`, `botuser_name`, `botuser_questions`, `botuser_date`, `botuser_location`, `botuser_city`, `botuser_os`, `botuser_ip`, `botuser_request`) VALUES (NULL, '".$user."', '0', '".date('Y-m-d H:i:s')."',  '".$loc."', '".$city."', '".$os."', '".$remote_ip."', '0'); ";
$exe=mysqli_query($dbc,$sql);

$check_user=mysqli_query($dbc,"SELECT * FROM botusers WHERE botuser_name = '".$user."'");
$check_user=mysqli_num_rows($check_user);
if(!$check_user){
	mysqli_query($dbc,"INSERT INTO botusers (botuser_id, botuser_name, botuser_date)
       VALUES (Null, '".$user."', '".date('Y-m-d H:i:s')."')");
}
$resp=array();
if($exe){
	$resp['status']=true;
}else{	$resp['status']=false;
}


echo json_encode($resp);