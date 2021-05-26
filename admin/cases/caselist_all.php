<?php
require ('../auth.php');
	echo "<div class='animated fadein  table-responsive p-2 '><table class='table  table-hover' id='datatable_caselist_all'>";
	echo "<thead>
                     <tr class='bg-gray-100'>
							<th style='white-space: nowrap;'>User</th>
							<th>Number of Questions</th>
							<th>Login Date</th>
							<th>Location</th>
							<th>Device</th>
							<th>IP</th>
							<th>Actions</th>
						</tr>
        </thead>";
	echo "<tbody> ";
      
$_sql="SELECT * FROM enquiries ORDER BY botuser_id DESC";

$_exe=mysqli_query($dbc,$_sql);
	while($_row=mysqli_fetch_array($_exe)){;
										   
			
				$delete="<span class='far fa-trash-alt fa-2x btn-circle btn-sm btn-outline-danger delete_case' title='Delete Case' id='".$_row['botuser_id']."'></span> ";	
		  	if($_row['botuser_request']){ 
				$protocol="<span class='fas fa-user-shield fa-2x btn-circle btn-sm btn-outline-danger protocol_case 'title='Send to Protocol' id='".$_row['botuser_id']."'></span> ";
			}else{
				$protocol="";
			}//THE RECENT CASES WILL HAVE A GREEN BACKGROUND
		$AA=explode(' ', $_row['botuser_date']);
		if($AA[0]==date("Y-m-d")){$bg='#E6FEDE';}else{$bg='';}
		
										   //CASES TABLE
	echo  "	<tr style='background:".$bg."'>";
//	echo "<td class='p-1'>".$_row['job_accession']."</td>";	
	echo "<td class='p-1'style='white-space: nowrap;'>".$_row['botuser_name']." </td>";	
	echo "<td align='center'>".$_row['botuser_questions']."</td>";	
	echo "<td>".$_row['botuser_date']."</td>";	
	echo "<td>".$_row['botuser_location']." </td>";	
	echo "<td>".$_row['botuser_os']."</td>";	
	echo "<td>".$_row['botuser_ip']."</td>";	
										   
										   //ACTION BUTTONS
	echo "<td style='white-space: nowrap;'>";									   
     echo $protocol;   
echo $delete;

//	echo "<a href='http://localhost:8080/newoviyam/viewer.html?patientID=11788766887033' target=blank>O</a>";							
							
//	echo "<td><div title='Open Case' name='Case Details' id='".$_row["job_code"]."'  class='fas fa-folder-open fa-2x btn-circle btn-sm btn-outline-primary caseopen' style='padding:0%;'></div>";
//	echo $print;
										   
	echo"</td>";	
	echo "</tr>";
	

}

		echo "</tbody></table></div>";
?>
  <script>		
$('#datatable_caselist_all').DataTable({
	
columnDefs: [{ 
	orderable: false, 
 	targets: [0] 
			}],
	"order": [[ 2, "desc" ]],
	"pageLength": 50,


});</script>
