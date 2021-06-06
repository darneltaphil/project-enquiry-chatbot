<?php 
include "inc/header.php";
?>

<script src="appsettings/appsettings.js"></script>
<script src="js/bootstrap-datepicker.js" type="text/javascript" language="javascript"></script>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

<?php include('inc/sidebar.php'); ?>
<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">
<!-- Main Content -->
<div id="content">
<?php include('inc/topbar.php'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-2">
	<h1 class="h3 mb-0 text-gray-800">Settings</h1>
	<!--            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report<button onclick="openFullscreen();">Open Fullscreen</button></a>		-->
</div>
<?php //include('dashboard/quickinfo.php'); ?>

	<!-- Content Row -->



		<div class="container-fluid">

			<div class="row">
				<div class="col-lg-12 col-md-12 col-sd-12 mb-2">
					<ul class="nav nav-pills mb-1" id="pills-tab" role="tablist">
						<li class="nav-item mx-1">
							<a id="general" class="nav-link active btn btn-primary btn-icon-split  my-1 " data-toggle="pill" href="#pills-general" role="tab" aria-controls="pills-general" aria-selected="true">
								<span class="icon text-white-50">
								<i class="fas fa-cogs fa-1x"></i>
								</span>
								<span class="text  ">General Settings</span>
							</a>
						</li>
						<!--  4-->
						<!-- <li class="nav-item mx-1">
							<a id="users" class=" nav-link btn  btn-info btn-icon-split my-1 " data-toggle="pill" href="#pills-users" role="tab" aria-controls="pills-users" aria-selected="true">
								<span class="icon text-white-50">
									<i class="fas fa-user-cog fa-1x"></i>
									</span>
								<span class="text  ">Users Settings</span>
							</a>
						</li> -->

					</ul>

				</div>
			</div>

		</div>



			<!-- CREATE NEW CASE -->
			<div class="row">
				<div class="col-lg-12 mb-1">

				<div class="card shadow mb-1 row">
				<div class="card-header py-3 bg-primary text-white" id='setting_bg'>
					<h6 class="m-0 setting_title h3 ">General</h6>
				</div>
				
				
				<div class="card-body" id="setting_area">
					<div class="tab-content" id="pills-tabContent">
						<!--BEGINING OF PILLS-->
						<div class="tab-pane fade show active " id="pills-general" role="tabpanel" aria-labelledby="pills-general-tab">
						<div class="container-fluid">
						<div class="row">
						<div class="col-xl-6 col-lg-6" id="question-list"></div>
						<div class="col-xl-6 col-lg-6"></div>
						</div>
						</div>
						</div>

						<div class="tab-pane fade show   " id="pills-users" role="tabpanel" aria-labelledby="pills-users-tab">
						<div class="container-fluid">
						<div class="row">
						<?php //include('appsettings/userarea.php')?>
							</div>
						</div>
						</div>

						<!--END OF MAIN PILL-->
					</div>
				</div>
				
			</div>

		</div>
		</div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
<i class="fas fa-angle-up"></i>
</a>

<div id="question_form_modal" class="modal fade">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header bg-primary">  
                    <h4 class="modal-title text-light" id="form-title"></h4>  
					<button type="button" class="close" data-dismiss="modal">&times;</button>  
                </div>  
			   
                <div class="modal-body" id="formedit">  
                     <?php include("appsettings/question_form.php"); ?>  
                </div>  
                <div class="modal-footer bg-primary">  
                     <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>  
                </div>  
           </div>  
      </div>  
 </div>
<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
<style>
.table td {
padding: 0.0rem;
vertical-align: middle;
font-size: 0.8em;
}

.table th {
padding: 0.5rem;
vertical-align: middle;
font-size: 0.9em;
}
</style>

</html>