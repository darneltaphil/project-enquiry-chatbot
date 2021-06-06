

      <div class="card shadow mb-4">
         <div
            class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Questions</h6>

            <span class="btn btn-primary add_new_question" >Add new keyword</a>

         </div>
         <div class="card-body">
            <div id="splash" class="">
				<?php require('../db/access.php');
				$sql='SELECT * FROM botquestions';
				$exe=mysqli_query($dbc,$sql);
	echo"<div class='animated fadein  table-responsive p-2 '><table class='table  table-hover' id='datatable_questions'>";
	echo "<thead>
                     <tr class='bg-gray-100'>
							<th style='white-space: nowrap;'>Keywords</th>
							<th>Answers</th>
							<th>Actions</th>
						</tr>
        </thead>";
	echo "<tbody> ";
	while($_row=mysqli_fetch_array($exe)){;
										   
							$delete="<span class='far fa-trash-alt fa-2x btn-circle btn-sm btn-outline-danger delete_question' title='Delete question' id='".$_row['botquestions_id']."'></span> ";	
							$edit="<span class='far fa-edit fa-2x btn-circle btn-sm btn-outline-info edit_question' title='Edit Case' id='".$_row['botquestions_id']."'></span> ";	

		
										   //CASES TABLE
	echo  "	<tr style='background:'>";
	echo "<td class='p-1'style='white-space: nowrap;'>".$_row['botquestions_name']." </td>";	
	echo "<td>".$_row['botquestions_answer']."</td>";	
									   
										   //ACTION BUTTONS
	echo "<td style='white-space: nowrap;'>";									   
   echo $edit;
   echo $delete;

	echo"</td>";	
	echo "</tr>";
	

}

		echo "</tbody></table></div>";
?>
  <script>		
$('#datatable_questions').DataTable({
	"order": [[ 0	, "ASC" ]],
	"pageLength": 25,
});</script>

				
            </div>
         </div>
      </div>



