<?php require ('../auth.php');
 if(!empty($_POST))  
 {  

      $resp = array();  
	  $user_code=$_POST['user_code'];
      $title = trim(mysqli_real_escape_string($dbc, $_POST["title"]));  
      $fname = trim(mysqli_real_escape_string($dbc, $_POST["fname"]));  
      $sname = trim(mysqli_real_escape_string($dbc, $_POST["sname"]));  
      if(isset($_REQUEST['mname'])){$mname = trim(mysqli_real_escape_string($dbc, $_POST["mname"]));}else{$mname =''; }  
      $mobile = trim(mysqli_real_escape_string($dbc, $_POST["mob"])); 
      $email = trim(mysqli_real_escape_string($dbc, $_POST["email"])); 
	  $email=sanitize_my_email($email);
      $role = mysqli_real_escape_string($dbc, $_POST["role"]); 
      $level = 1; 
//      $level = mysqli_real_escape_string($dbc, $_POST["level"]); 
	  $mobile=ltrim($mobile,'0');
      $gender = mysqli_real_escape_string($dbc, $_POST["gender"]);  
	$username=date_timestamp_get(date_create());
	$key=date_timestamp_get(date_create());
	$password=sha1(date_timestamp_get(date_create()));
	 //UPDATE DETAILS OF THE USER
     if($user_code != '')  
      {  
           $query = "  
           UPDATE user   
           SET user_fname='$fname',   
           user_sname='$sname',   
           user_mname='$mname',   
           user_gender='$gender',
		   user_email='$email',
		   user_role='$role',
           user_mobile = $mobile   
           WHERE user_code='".$_POST["user_code"]."'"; 
		 	$duty='update';

      } 
	 //INSERTING A NEW USER
      else  
      {  
		  if($role=='radiographer'){
			$check=mysqli_query($dbc,"SELECT * FROM radiographer  ");
			$check=mysqli_num_rows($check);
			  if($check<=9){$user_code=$options['option_user_prefix'].'RG00'.($check+1).$options['option_user_suffix']; }
			  if($check<=99){$user_code=$options['option_user_prefix'].'RG0'.($check+1).$options['option_user_suffix'];; }
			  if($check<=999){$user_code=$options['option_user_prefix'].'RG'.($check+1).$options['option_user_suffix'];; }
			  if($check>999){$user_code=$options['option_user_prefix'].'RG'.($check+1).$options['option_user_suffix'];; }
//			$auth="INSERT INTO `auth` (`auth_id`, `auth_user`, `dashboard`, `workplacetitle`, `patient`, `pricelist`, `cases`, `moneystorytitle`, `moneystory`, `rl_moneystory`, `rg_moneystory`, `settingtitle`, `settings`, `add_patient`, `delete_patient`, `send_sms`, `edit_patient`, `add_case`, `edit_case`, `delete_case`, `assign_case`, `print_case`, `submit_case`, `close_case`, `release_case`,`pay_case`) VALUES (NULL, '".$user_code."', '1', '1', '1', '1', '1', '1', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0','0');" ;
//			 $copy="INSERT INTO radiographer SELECT null, `user_code`, `user_fname`, `user_sname`, `user_mname`, NULL,`user_gender`, `user_mobile`, `user_email`, NULL, NULL,NULL, NULL, '0.00', 'active',''   FROM user WHERE user.user_code='".$user_code."'  ";
//			 $moonlight="INSERT INTO radiologist SELECT null, `radiographer_code`,`radiographer_fname`,`radiographer_sname`,`radiographer_mname`,`radiographer_dob`,`radiographer_gender`, `radiographer_mobile`,`radiographer_email`,`radiographer_momo`,`radiographer_bank_number`,`radiographer_bank_name`,`radiographer_bank_branch`,`radiographer_account`,`radiographer_status`,'_(radiographer)' FROM radiographer WHERE radiographer.radiographer_code='".$user_code."'  ";
//			  			  mkdir('../radiographer/'.$user_code,'0755');

		  }
		  if($role=='radiologist'){
			$check=mysqli_query($dbc,"SELECT * FROM radiologist  ");
			$check=mysqli_num_rows($check);
			  if($check<=9){$user_code=$options['option_user_prefix'].'RL00'.($check+1).$options['option_user_suffix']; }
			  if($check<=99){$user_code=$options['option_user_prefix'].'RL0'.($check+1).$options['option_user_suffix'];; }
			  if($check<=999){$user_code=$options['option_user_prefix'].'RL'.($check+1).$options['option_user_suffix'];; }
			  if($check>999){$user_code=$options['option_user_prefix'].'RL'.($check+1).$options['option_user_suffix'];; }
//			$auth="INSERT INTO `auth` (`auth_id`, `auth_user`, `dashboard`, `workplacetitle`, `patient`, `pricelist`, `cases`, `moneystorytitle`, `moneystory`, `rl_moneystory`, `rg_moneystory`, `settingtitle`, `settings`, `add_patient`, `delete_patient`, `send_sms`, `edit_patient`, `add_case`, `edit_case`, `delete_case`, `assign_case`, `print_case`, `submit_case`, `close_case`, `release_case`,`pay_case`) VALUES (NULL, '".$user_code."', '1', '1', '1', '0', '1', '1', '0', '1', '0', '0', '0', '0', '0', '0', '0', '0', '1', '0', '0', '0', '1', '0', '1','0');" ;
//			 $copy="INSERT INTO radiologist SELECT null, `user_code`, `user_fname`, `user_sname`, `user_mname`, NULL,`user_gender`, `user_mobile`, `user_email`, NULL, NULL,NULL, NULL, '0.00', 'active',''   FROM user WHERE user.user_code='".$user_code."'  ";
//			 $moonlight="insert into radiographer select null,`radiologist_code`,`radiologist_fname`,`radiologist_sname`,`radiologist_mname`, `radiologist_dob`,`radiologist_gender`,`radiologist_mobile`,`radiologist_email`,`radiologist_momo`,`radiologist_bank_number`,`radiologist_bank_name`,`radiologist_bank_branch`,`radiologist_account`,`radiologist_status`, '_(radiologist)' FROM radiologist WHERE radiologist.radiologist_code='".$user_code."'  ";
//			  mkdir('../radiologist/'.$user_code,'0755');
		  }
		  if($role=='secretary'){
			$check=mysqli_query($dbc,"SELECT * FROM user WHERE user_role='$role'  ");
			$check=mysqli_num_rows($check);
			  if($check<=9){$user_code=$options['option_user_prefix'].'SEC0'.($check+1).$options['option_user_suffix']; }
			  if($check<=99){$user_code=$options['option_user_prefix'].'SEC'.($check+1).$options['option_user_suffix'];; }
			  if($check>99){$user_code=$options['option_user_prefix'].'SEC'.($check+1).$options['option_user_suffix'];; }
			$auth="INSERT INTO `auth` (`auth_id`, `auth_user`, `dashboard`, `workplacetitle`, `patient`, `pricelist`, `cases`, `moneystorytitle`, `moneystory`, `rl_moneystory`, `rg_moneystory`, `settingtitle`, `settings`, `add_patient`, `delete_patient`, `send_sms`, `edit_patient`, `add_case`, `edit_case`, `delete_case`, `assign_case`, `print_case`, `submit_case`, `close_case`, `release_case`,`pay_case`) VALUES (NULL, '".$user_code."', '1', '1', '1', '1', '1', '1', '1', '0', '0', '0', '0', '1', '0', '1', '1', '1', '0', '0', '1', '1', '0', '1', '0','0');" ;
		  }
		  if($role=='administrator'){
			$check=mysqli_query($dbc,"SELECT * FROM user WHERE user_role='$role' ");
			$check=mysqli_num_rows($check);
			$user_code='ADM0'.($check+1);
			$auth="INSERT INTO `auth` (`auth_id`, `auth_user`, `dashboard`, `workplacetitle`, `patient`, `pricelist`, `cases`, `moneystorytitle`, `moneystory`, `rl_moneystory`, `rg_moneystory`, `settingtitle`, `settings`, `add_patient`, `delete_patient`, `send_sms`, `edit_patient`, `add_case`, `edit_case`, `delete_case`, `assign_case`, `print_case`, `submit_case`, `close_case`, `release_case`,`pay_case`) VALUES (NULL, '".$user_code."', '1', '1', '1', '1', '1', '1', '1', '0', '0', '1', '1', '1', '0', '1', '1', '1', '1', '0', '1', '1', '0', '1', '1','0');" ;
		  }
		  if($role=='manager'){
			$check=mysqli_query($dbc,"SELECT * FROM user WHERE user_role='$role' ");
			$check=mysqli_num_rows($check);
			$user_code='MNG0'.($check+1);
			$auth="INSERT INTO `auth` (`auth_id`, `auth_user`, `dashboard`, `workplacetitle`, `patient`, `pricelist`, `cases`, `moneystorytitle`, `moneystory`, `rl_moneystory`, `rg_moneystory`, `settingtitle`, `settings`, `add_patient`, `delete_patient`, `send_sms`, `edit_patient`, `add_case`, `edit_case`, `delete_case`, `assign_case`, `print_case`, `submit_case`, `close_case`, `release_case`,`pay_case`) VALUES (NULL, '".$user_code."', '1', '1', '1', '1', '1', '1', '1', '0', '0', '0', '0', '0', '0', '1', '0', '0', '0', '0', '1', '0', '0', '1', '1','1');" ;
		  }
		  
               $query = "INSERT INTO `user` (`user_id`, `user_code`, `user_key`, `user_title`,`user_fname`, `user_sname`, `user_mname`, `user_role`,`user_dob`, `user_gender`, `user_mobile`, `user_email`, `user_address`, `user_gps`, `user_un`, `user_pwd`,  `user_level`, `user_point`, `user_branch`, `user_regdate`, `user_status`, `user_verified`, `user_change_pwd_date`, `user_old_password`,`user_moonlight`,`user_added_by`) 
			 VALUES (NULL, '".$user_code."', $key, '".$title."', '".$fname."', '".$sname."', '".$mname."','".$role."', NULL, '".$gender."', '233".$mobile."', '".$email."', NULL, NULL, '".$username."', '".$password."', '".$level."', NULL, '".COMPANY_BRANCH."', '".date('Y-m-d H:i:s')."', 'active', '0', NULL, '','', '".PASSPORT."');";  
		 
		  		$duty='new';
      }  
	 
	 //RUN THE QUERY
      if(mysqli_query($dbc, $query))  
      {   
	  
		  if($duty=='new'){
			  if($role=='radiographer' || $role=='radiologist'){
				  mysqli_query($dbc,$auth);
				  mysqli_query($dbc,$copy);
				  mysqli_query($dbc,$moonlight);
				  
			  }else{				  mysqli_query($dbc,$auth);
}
			  
			  //SEND SMS TO NOTIFY
$to = "233".$mobile;
$msg = urlencode("Hello ".$fname.", We just added you as ".$role.". Log into the system with username: ".$user_code." and password: ".(substr($mobile,-4)).". Use the link provided in your email to activate your account. Remember to change your password at your first login. Welcome to the family."); 
			
$sms="SELECT * FROM `sms` WHERE `sms`.`sms_id` = 1 ";
$sms=mysqli_query($dbc,$sms);
$sms=mysqli_fetch_assoc($sms);
$url="https://api.smsglobal.com/http-api.php?action=sendsms&user=".$sms['sms_key']."&password=".$sms['sms_password']."&from=".$sms['sms_sender_id']."&apireply=1&to=".$to."&text=".$msg."&maxsplit=3";
$response = file_get_contents($url) ;
$updare_sms=mysqli_query($dbc,"UPDATE `sms` SET `sms_count` = sms_count+1  WHERE `sms`.`sms_id` = 1");

			  


$link="http://apps.dipssrms.com/appsettings/activate.php?token=".sha1($user_code)."";
//$company=mysqli_query($dbc,'select option_company from options');
//		$company=	  mysqli_fetch_assoc($company);
$to_email = $email;
$subject = 'Account Activation';
$headers = 'From: '.COMPANY_NAME.''."\r\n";
$headers.= 'Reply-To: No-Reply@microsystem.com' . "\r\n";
$headers.= "MIME-Version: 1.0\r\n";
$headers.= "Content-Type: text/html; charset=ISO-8859-1\r\n";
$message='<table width="50%" border="0">
  				<tr><td height="105" colspan="2" scope="col">
				  <p><br>
				We just added you as '.$role.'. Use the ACTIVATE button below to activate your account. Remember to change your password at your first login. Welcome to the family.</p>
				  <p>
				  If you have no link with this email, please ignore it. <br>
				<br>
				Please, verify the details and use the following link to activate your application account with us.<br>
  </p></td></tr>
  				<tr>
  				  <th height="48" colspan="2" scope="col"></th></tr>
  				<tr><th width="43%" height="41" bgcolor="#DDE9FB" scope="row">Name</th>
   					<td width="57%">&nbsp;'.$sname.' &nbsp;'. $fname.'</td></tr>
  				<tr><th height="36" bgcolor="#DDE9FB" scope="row">Email</th>
    				<td>&nbsp;'.$email.'</td></tr>
  				<tr><th height="38" bgcolor="#DDE9FB" scope="row">Phone #</th>
    				<td>&nbsp;233'.$mobile.'</td></tr>
 				<tr><th height="49" colspan="2" scope="row">
							<center><a href="'.$link.'">
									<div style="padding:5px; background: #060; color:#FFF; font-size:16px; width:300px; border-bottom:#0C0 5px solid;"> ACTIVATE</div>
									</a>
							</center></th></tr>
				</table>';
//check if the email address is invalid $secure_check
$secure_check = sanitize_my_email($to_email);
if ($secure_check == false) {
    $resp['message']="Invalid input";
} else { //send email 
//   mail($to_email, $subject, $message, $headers);
    $resp['message']="This email is sent using PHP Mail";
}

		  }
		  
		  $resp['status']=true;
		  $resp['message']='System User added ';
      } else{
		  $resp['status']=false;
	  		$resp['message']='System User could not be added ';
}
     // echo $message;  
 }echo json_encode($resp);  
 ?>