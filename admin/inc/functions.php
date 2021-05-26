<?php
	 function sanitize_my_email($field) {
    $field = filter_var($field, FILTER_SANITIZE_EMAIL);
    if (filter_var($field, FILTER_VALIDATE_EMAIL)) {
        return $field;
    } else {
        return false;
    }
	 }
function format_date($var){
	$date=date("d-m-Y",strtotime($var));
	return($date);
}
function get_age($var) {
	$dob=explode('-',$var);
	$age=date('Y')-intval($dob[0]);
//	$m=date('Y')-;
	return ($age);
}
function format_status($var){
	if($var=='New'){
		$style="<div title='New Case' class='btn btn-sm btn-primary' p-0'>New</div>";
	}
	if($var=='Pending'){
		$style="<div title='Pending Case' class='btn btn-sm btn-outline-danger' p-0'>Pending</div>";
	}
	if($var=='Declined'){
		$style="<div title='Declined Request' class='btn btn-sm btn-danger' p-0'>Declined</div>";
	}
	if($var=='Processing'){
		$style="<div title='Processing' class='btn btn-sm btn-outline-warning' p-0'>Processing...</div>";
	}
	if($var=='On hold'){
		$style="<div title='Request on hold' class='btn btn-sm btn-outline-warning' p-0'>On Hold...</div>";
	}
	if($var=='Completed'){
		$style="<div title='Completed Case' class='btn btn-sm btn-outline-success' p-0'>Completed</div>";
	}
	if($var=='Closed' or $var=='Paid'){
		$style="<div title='Closed Case' class='btn btn-sm btn-success' p-0'>Closed</div>";
	}
	if($var=='Approved'){
		$style="<div title='Approved Request' class='btn btn-sm btn-success' p-0'>Approved</div>";
	}
	if($var=='Released'){
		$style="<div title='Released Case' class='btn btn-sm btn-danger' p-0'>Released</div>";
	}
	if($var=='Accepted'){
		$style="<div title='Accepted Case' class='btn btn-sm btn-outline-primary' p-0'>Accepted</div>";
	}
	if($var=='Protocol'){
		$style="<div title='Protocol Case' class='fas fa-user-shield fa-2x btn-circle btn-sm btn-outline-danger' p-0'></div>";
	}
	return($style);
}
function clean_text($string)
{
 $string = trim($string);
 $string = stripslashes($string);
 $string = htmlspecialchars($string);
 return $string;
}

function convert_string($action, $string)
{
 $output = '';
 $encrypt_method = "AES-256-CBC";
    $secret_key = 'eaiYYkYTysia2lnHiw0N0vx7t7a3kEJVLfbTKoQIx5o=';
    $secret_iv = 'eaiYYkYTysia2lnHiw0N0';
    // hash
    $key = hash('sha256', $secret_key);
 $initialization_vector = substr(hash('sha256', $secret_iv), 0, 16);
 if($string != '')
 {
  if($action == 'encrypt')
  {
   $output = openssl_encrypt($string, $encrypt_method, $key, 0, $initialization_vector);
   $output = base64_encode($output);
  } 
  if($action == 'decrypt') 
  {
   $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $initialization_vector);
  }
 }
 return $output;
}

?>
