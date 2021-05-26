<?php 
include "inc/header.php";
?>
<script src="./cases/cases.js"></script>
<!--
<script src="./reference/reference.js"></script>
<script src="./radiographer/rg.js"></script>
-->
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
            <h1 class="h3 mb-0 text-gray-800">Enquiries</h1>
<!--            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>		-->
          </div>

          <!-- Content Row -->

          <div class="row">
            <div class="col-lg-12 col-md-12">

              	<!-- CREATE NEW CASE -->
             	 <div class="row">
                <div class="col-lg-12 col-md-12 col-sd-12 mb-2">

						<a href="#" id="individual_case" class="btn btn-light btn-icon-split my-1 shadow" >
							<span class="icon text-white-50">
							<i class="fas fa-grip-horizontal fa-1x"></i>
							</span>
							<span class="text  ">All enquiries </span>
						</a>
<!--
						<a href="#" id="completed_case" class="btn btn-light btn-icon-split  my-1 shadow"  >
							<span class="icon text-white-50">
							<i class="fas fa-check-double fa-1x"></i>
							</span>
							<span class="text  ">Questions </span>
						</a>
-->
						<a href="#" id="closed_case" class="btn btn-light btn-icon-split  my-1 shadow"  > 
							<span class="icon text-white-50">
							<i class="fas fa-expand fa-1x"></i>
							</span>
							<span class="text  ">New questions </span>
						</a>
					 </div>
			</div>
			
         </div>
			

          </div>

          <!-- Content Row -->
<!--
          <div class="row">    
            <div class="col-lg-12 mb-0">

              <div class="card shadow mb-4">
                <div class="card-body">

				<div class="row ">
					<div class="col-lg-2">Filter Table</div>
					<div class="col-lg-3 p-1 ">	
						<div class="btn btn-dark today" id="today">Today</div> ||||
						<div class="btn btn-dark month" id="month">Month</div> ||||
					</div>
					<div class="col-lg-2 p-1"><input type="text" class="form-control " id="from" name="" ></div>
					<div class="col-lg-2 p-1"><input type="text" class="form-control " id="to" name="" ></div>
					<div class="col-lg-2 p-1 ">
						<div class="btn btn-dark range" id="range"><span class="fas fa-play fa-2x"></span></div>||||
						<div class="btn btn-danger today fas fa-window-close fa-2x" id=""></div>
					</div>
                </div>
              </div>
				</div></div>
		</div>
-->
          <div class="row">

            <!-- Content Column -->
            <div class="col-lg-12 mb-4">

              <div class="card shadow mb-4">
                <div class="card-header py-3 bg-dark text-white" id='caselist_bg' >
                  <h6 class="m-0 caselist_title h3 ">All enquiries</h6>
                </div>
                <div class="card-body" id="caselist">
                 
                </div>
              </div>


            </div>

          </div><!-- Content Row -->

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

	<div id="caseform_modal" class="modal fade">
		<div class="modal-dialog fullscreenModal">
			<div class="modal-content case-open" style="border-radius: 0px; scroll-y">
					<div class="container-fluid border p-0 m-0" ><button type="button" class="close bg-danger  btn-sm p-1" data-dismiss="modal" >&times;</button>
				</div>
	<!--
				<div class="modal-header bg-dark">
					<h4 class="modal-title text-light">Create a Study case </h4>
					<button type="button" class=" btn-circle btn-sm btn-danger" data-dismiss="modal" >&times;</button>
				</div>
	-->
				<div class="modal-body p-0">               

						<?php include('cases/caseform.php'); ?>
				</div>

	<!--
				<div class="modal-footer bg-dark">
	<button type="button" class="btn btn-danger " data-dismiss="modal">Close</button>
				</div>
	-->

			</div>
		</div>
	</div><!-- modal -->
	<div id="reference_modal" class="modal fade mb-5">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header bg-dark">
					<h4 class="modal-title text-light">New Reference Physician /  Facility   </h4>
					<button type="button" class=" btn-circle btn-sm btn-danger" data-dismiss="modal" data-toggle="modal" data-target="#caseform_modal" data-backdrop="static" data-keyboard="false" >&times;</button>
				</div>
				<div class="modal-body reference_submit_feedback">
						<?php include('reference/referenceform.php'); ?>
				</div>

				<div class="modal-footer bg-dark">
	<!--                        <button type="button" class="btn btn-danger " data-dismiss="modal">Close</button>-->
				</div>

			</div>
		</div>
	</div><!-- modal -->
	<div id="assign_modal" class="modal fade mb-5">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header bg-gradient-dark">
					<h4 class="modal-title text-light">Assign Case </h4>
					<button type="button" class=" btn-circle btn-sm btn-danger" data-dismiss="modal" >&times;</button>
				</div>
				<div class="modal-body ">

						<?php include('cases/caseassignform.php'); ?>
				</div>

				<div class="modal-footer bg-gradient-dark">
	<!--                        <button type="submit" class="btn btn-danger assign_form_submit " >Assign</button>-->
				</div>

			</div>
		</div>
	</div><!-- modal -->
	<div id="assign_us_modal" class="modal fade mb-5">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header bg-gradient-warning">
					<h4 class="modal-title text-light">Assign Ultrasound Case </h4>
					<button type="button" class=" btn-circle btn-sm btn-danger" data-dismiss="modal" >&times;</button>
				</div>
				<div class="modal-body ">

						<?php include('cases/caseassignform_us.php'); ?>
				</div>

				<div class="modal-footer bg-gradient-warning">
	<!--                        <button type="submit" class="btn btn-danger assign_form_submit " >Assign</button>-->
				</div>

			</div>
		</div>
	</div><!-- modal -->
	<div id="case_open_modal" class="modal left fade "  tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content case-open no-radius">

					<div class="modal-header">
						<h4 class="modal-title" id="myModalLabel">Left Sidebar</h4>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

					</div>

					<div class="modal-body" >
						<div id="case_client_show"></div>

						<div id="case_folder"></div>

					</div>

				</div><!-- modal-content -->
			</div><!-- modal-dialog -->
		</div><!-- modal -->
	<div id="case_editor_modal" class="modal fade "  tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog large" role="document">
				<div class="modal-content no-radius">

					<div class="modal-header">
						<h4 class="modal-title" id="myModalLabel"></h4>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

					</div>

					<div class="modal-body" id="case_editor" >

					</div>

				</div><!-- modal-content -->
			</div><!-- modal-dialog -->
		</div><!-- modal -->

	
<script src="./vendor/datatables/jquery.dataTables.min.js"></script>
<script src="./vendor/datatables/dataTables.bootstrap4.min.js"></script>
<style>
	.table td  {
	padding: 0.0rem;
	vertical-align: middle;
	font-size: 0.8em;
	}
	.table th  {
	padding: 0.5rem;
	vertical-align: middle;
	font-size: 0.9em;
	}
		#hierarchy
	{
		width: 480px;
	}
	.foldercontainer, .file, .noitems
	{
		display: block;
		padding: 5px 5px 5px 20px;
	}
	.folder
	{
		color: #4e73df;
	}
	.file
	{
		color:#000;
	}
	.folder, .file
	{
		cursor: pointer;
	}
	.noitems
	{
		display: none;
		pointer-events: none;
	}
	.folder:hover,.file:hover
	{
		background: #F4F4F4;
	}
	.folder:before, .file:before
	{
		padding-right: 10px;
	}
</style>

</html>
