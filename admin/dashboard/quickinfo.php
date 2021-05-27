<?php 
$enquiries=mysqli_fetch_array(mysqli_query($dbc,"SELECT COUNT(botuser_id) as enquiries FROM enquiries"));
$users=mysqli_fetch_array(mysqli_query($dbc,"SELECT COUNT(botuser_id) as user FROM botusers"));
$questions=mysqli_fetch_array(mysqli_query($dbc,"SELECT SUM(botuser_questions) as questions FROM enquiries"));
?>
<style >
	.bg-wave{
		background: url(../img/waves.png)  no-repeat;
	}
	.bg-danger-wave{
		background: url(../img/wave-danger.png)  no-repeat;
	}
	.bg-dark-wave{
		background: url(../img/wave-dark.png)  no-repeat;
	}
	.bg-warning-wave{
		background: url(../img/wave-warning.png)  no-repeat;
	}
</style>
<!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-0">
                <div class="card-body bg-wave" >
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Enquiries</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $enquiries['enquiries'] ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-info-circle fa-3x text-gray-500"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-0">
                <div class="card-body bg-danger-wave" >
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Users</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $users['user'] ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user fa-3x text-gray-500"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
<!--
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-0">
                <div class="card-body bg-dark-wave">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Questions</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php echo $questions ?>%</div>
                        </div>
                        <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo $task ?>%" aria-valuenow="<?php echo $task ?>" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-briefcase fa-3x text-gray-500"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
-->

            <!-- Pending Requests Card Example -->

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-0">
                <div class="card-body bg-warning-wave" >
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Questions Asked</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $questions['questions'] ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-question fa-3x text-gray-500"></i>
                    </div>
                  </div>
                </div>
              </div>
          </div>
            </div>

