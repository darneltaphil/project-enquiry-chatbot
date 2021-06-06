<?php 
$key = "pUirjFbdUJ517z7fJvQQVeNHG";  // Remember to put your own API Key here
$to = $customer['customer_mobile'];
$msg = "Hello, ".$customer['customer_fname'].", thank you for patronising 72nd Pharmacy. You just earned ".$totalcart/10 ." reward point(s) on this purchase #".$receipt_number." . Your total point is now ".$cumulpoint."."; 
$sender_id = "72ndPharma"; //11 Characters maximum
$date_time = date('Y-m-d H:i:s');

//encode the message
$msg = urlencode($msg);

//prepare your url
$url = "https://apps.mnotify.net/smsapi?"
            . "key=$key"
            . "&to=$to"
            . "&msg=$msg"
            . "&sender_id=$sender_id"
            . "&date_time=$date_time";
			$curl = curl_init();
		 curl_setopt_array($curl, array(
		 CURLOPT_URL => $url,
		 CURLOPT_RETURNTRANSFER => true,
		 CURLOPT_CUSTOMREQUEST => "GET",
		 ));
		 $response = curl_exec($curl);
		 $err = curl_error($curl);
		 curl_close($curl);
//$response = file_get_contents($url) ;
//response contains the response from mNotify