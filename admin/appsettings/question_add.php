<?php
//connect to the database
require("../db/access.php");
//get the form inputs
$keyword=mysqli_real_escape_string(trim($_REQUEST['keyword']));
$answer=mysqli_real_escape_string(trim($_REQUEST['answer'])) ;
$action=$_REQUEST['action'];
//adding keyword scripts
if($action=='add'){
  $sql="INSERT INTO botquestions (botquestions_id,botquestions_name,botquestions_answer,botquestions_count ) VALUES (NULL, '$keyword', '$answer', 0)";
}
//updating keyword script
if(is_numeric($action)){
   $sql="UPDATE botquestions SET botquestions_name='$keyword',botquestions_answer='$answer' WHERE botquestions_id=$action"; 
}
//execute the SQL request
$exe=mysqli_query($dbc,$sql);
if($exe)echo json_encode(true);
?>
