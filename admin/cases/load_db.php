<?php require_once("../db/access.php");
	$sql = "SELECT botquestions_name as q ,botquestions_answer as a  FROM botquestions";
	$exe=mysqli_query($dbc,$sql);
	$db=array();

	while($res=mysqli_fetch_assoc($exe)){
		$db[trim($res['q'])]=trim($res['a']);
	};
	echo json_encode($db);