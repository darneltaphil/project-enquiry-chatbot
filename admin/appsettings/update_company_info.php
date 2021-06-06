<?php require ('../auth.php');

if(!empty($_REQUEST)){
	$data=array();
	$name= filter_var($_REQUEST['company_name'], FILTER_SANITIZE_STRING);
	$email=filter_var($_REQUEST['company_email'],FILTER_SANITIZE_STRING);
	$mobile=$_REQUEST['company_mobile'];
	$address=filter_var($_REQUEST['company_address'],FILTER_SANITIZE_STRING);
	$city=filter_var($_REQUEST['company_city'],FILTER_SANITIZE_STRING);
	$gps=filter_var($_REQUEST['company_gps'],FILTER_SANITIZE_STRING);
	
	$update_request="UPDATE `options` 
					SET 
					`option_company` = '".$name."',
					`option_address` = '".$address."', 
					`option_gps` = '".$gps."', 
					`option_city` = '".$city."', 
					`option_mobile` = ".$mobile.",
					`option_email` = '".$email."' 
					WHERE `options`.`option_id` = 1;";
	$update_exe=mysqli_query($dbc,$update_request);
	if($update_exe){
		$data['status']=true;
	}else{
		$data['status']=false;
	}
	echo json_encode($data);
}
