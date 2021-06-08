

      <div class="card shadow mb-4">
         <div
            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Unresolved uestions</h6>

            <span class="btn btn-primary clear_unsolved" >Clear All</a>

         </div>
         <div class="card-body">
            <div id="splash" class="">
				<?php require('../db/access.php');
				$sql='SELECT * FROM newquestions';
				$exe=mysqli_query($dbc,$sql);
	echo"<div class='animated fadein  table-responsive p-2 '><table class='table  table-hover' id='datatable_unsolved'>";
	echo "<thead>
                     <tr class='bg-gray-100'>
							<th style='white-space: nowrap;'>Questions</th>
							<th>Actions</th>
						</tr>
        </thead>";
	echo "<tbody> ";
	while($_row=mysqli_fetch_array($exe)){;
										   
							$delete="<span class='far fa-trash-alt fa-2x btn-circle btn-sm btn-outline-danger delete_unsolved' title='Delete question' id='".$_row['newquestions_id']."'></span> ";	
							$use="<span class='far fa-angle-double-right fa-2x btn-circle btn-sm btn-outline-primary use_question' title='Use' id='".$_row['newquestions_id']."'></span> ";	

		
										   //CASES TABLE
	echo  "<tr style='background:'>";
	echo "<td class='p-1'style='white-space: nowrap;'>".$_row['newquestions_name']." </td>";	
									   
										   //ACTION BUTTONS
	echo "<td style='white-space: nowrap;'>";									   
   echo $use;
   echo $delete;

	echo"</td>";	
	echo "</tr>";
	

}

		echo "</tbody></table></div>";
?>
  <script>		
$('#datatable_unsolved').DataTable({
	"order": [[ 0	, "ASC" ]],
	"pageLength": 25,
});</script>

				
            </div>
         </div>
      </div>



