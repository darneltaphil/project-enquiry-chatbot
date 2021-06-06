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
						<!-- <a href="#" id="closed_case" class="btn btn-light btn-icon-split  my-1 shadow"  > 
							<span class="icon text-white-50">
							<i class="fas fa-expand fa-1x"></i>
							</span>
							<span class="text  ">Settings </span>
						</a> -->
					 </div>
			</div>
			
         </div>
			

          </div>

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
