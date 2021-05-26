<!DOCTYPE html>
<html lang="en">
<head>
<link rel='shortcut icon' href='../../img/favicon.ico' type='image/x-icon'/ >
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
<!--<base href="https://apps.dipssrms.com">	-->
<link href="../../css/theme.css" rel="stylesheet">
	
<script src="../../js/jquery.js"></script>
<?php
	require_once('../../db/dipssrms/config.php');

if(count($_REQUEST)!=0){
$code=$_REQUEST['user'];
require_once('../../inc/functions.php');
//require_once('detectOS.php');
   $error  = array();
   $resp    = array();

	$user_query="SELECT * FROM user WHERE user_code='$code' ";
	$user_query=mysqli_query($db_dipss,$user_query);
	$user=mysqli_fetch_array($user_query);
	 $un=$user[9];
	 $pwd=$user[13];
        //SELECT NON DELETED ACTIVE USER
		 $sql="select * from  user  where user_email = :un AND user_pwd = :pwd AND user_status = 'active' AND user_deleted = 0";

		$statement = $pdo_dipss->prepare($sql , array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $statement->execute(array(':un' => filter_var($un,FILTER_SANITIZE_EMAIL), ':pwd'=>$pwd));
        $row = $statement->fetchAll(PDO::FETCH_ASSOC);
 
if(count($row)>0) {
          session_start();
          $_SESSION['PASSPORT'] = convert_string('encrypt',$row[0]['user_code']) ;
          $_SESSION['USERMAIL'] =  convert_string('encrypt',$row[0]['user_email']);
          $_SESSION['TOKEN'] =  convert_string('encrypt',	$row[0]['user_pwd']);
		  $_SESSION['ROLE'] =  convert_string('encrypt',	$row[0]['user_role']);
//		  $_SESSION['__dipss_fd_2_dtb']=convert_string('encrypt',$row[0]['institution_folder_name']);
//		  $_SESSION['__dipss_lk_2_dtb']=convert_string('encrypt',$row[0]['institution_dblink']);
		
			//ENCRYPTED SESSION FOR LOCALSTORAGE
			$LOCALSTORAGE=array();
			$LOCALSTORAGE['_:_:dipss-ppt']=convert_string('encrypt',$row[0]['user_code']) ;//PASSPORT
			$LOCALSTORAGE['_:_dipss-usrm']=convert_string('encrypt',$row[0]['user_email']);
			$LOCALSTORAGE['_:dipss-tkn']=convert_string('encrypt',	$row[0]['user_pwd']);
			$LOCALSTORAGE['_dipss-who']=convert_string('encrypt',	$row[0]['user_role']);
			$resp['session'] 	 =$LOCALSTORAGE;
			$resp['status']      = true;    
			$resp['redirect']    = "../../landing.php";
			//echo json_encode($resp);
			header("Location: ../../landing.php"); 
       } 
}else{
	?>
	<div class="container">
		<div class="row">
			   <div class="col-lg-3">
				<div class="card">
				  <h5 class="card-header">Login as</h5>
				  <div class="card-body">
				  <form action="">
					  
					<select name= "user" class="form-select" aria-label="Default select example">
					  <option selected>User List</option>
						<?php 
						$user_query="SELECT * FROM user ORDER BY user_fname ASC ";
						$user_query=mysqli_query($db_dipss,$user_query);
	
									while($user=mysqli_fetch_array($user_query)){
										echo'<option value='.$user['user_code'].' class="">  '.$user['user_fname'].' '.$user['user_sname'].'</option>';
									}
										?>
					  
					</select>
					  <br><br>
										
					 <input type="submit" value="Login" class="btn btn-sm btn-primary"/>
				</form>
				  </div>
				</div>

				</div>
		</div>
	</div>
<?php
}

