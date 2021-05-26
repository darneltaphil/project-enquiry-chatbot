<?php
require_once('../../db/access.php');
require_once('../../inc/functions.php');
   $error  = array();
   $resp    = array();

        if(empty($_POST['user_email']))
        {
            $error[] = "Username field is required";    
        }else{
			$un=clean_text( $_REQUEST['user_email']);
		}
    
        if(empty($_POST['user_password']))
        {
            $error[] = "Password field is required";    
        }else{
			$pwd=$_REQUEST['user_password'] ;
		}
         
        if(count($error)>0)
        {
            $resp['msg']    = $error;
            $resp['status'] = false;    
            echo json_encode($resp);
            exit;
        }
		//SELECT NON DELETED ACTIVE USER
		 $sql="select * from  user  where user_email = :un AND user_pwd = :pwd";

		$statement = $dbc_pdo->prepare($sql , array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $statement->execute(array(':un' => filter_var($un,FILTER_SANITIZE_EMAIL), ':pwd'=>convert_string('encrypt',sha1($pwd))));
        $row = $statement->fetchAll(PDO::FETCH_ASSOC);
if(count($row)>0) {
          session_start();
          $_SESSION['PASSPORT'] = convert_string('encrypt',$row[0]['user_code']) ;
          $_SESSION['USERMAIL'] =  convert_string('encrypt',$row[0]['user_email']);
		  $_SESSION['ROLE'] =  convert_string('encrypt',	$row[0]['user_role']);
			$resp['status']      = true;    
			$resp['redirect']    = "../dashboard.php";
			echo json_encode($resp);

       } else {
          $error[] = "Username and Password do not match";
          $resp['msg']  = $error;
          $resp['status']   = false;   
          echo json_encode($resp);
          exit;    
     } 
