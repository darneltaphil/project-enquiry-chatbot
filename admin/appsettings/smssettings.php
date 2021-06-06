<?php 
//include('connect.php');
$sms_req=mysqli_query($dbc,"select * from sms where sms_id=1");
 $sms_res=mysqli_fetch_array($sms_req);
?>
<div class="card">
  <h5 class="card-header">SMS Settings</h5>
  <div class="card-body">
	  
	  
	  <form>
  <div class="form-group row">
    <label for="sender_id" class="col-sm-4 col-form-label">SMS sender ID</label>
    <div class="col-sm-8">
      <input type="sender_id" class="form-control" id="sender_id" placeholder="" value="<?php echo $sms_res['sms_sender_id'];?>" readonly>
	  </div>
  </div>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-4 col-form-label">SMS sent</label>
    <div class="col-sm-6">
      <input type="sms_sent" class="form-control" id="sms_sent" placeholder="" value="<?php echo $sms_res['sms_count'];?> out of " readonly>
    </div>
  </div>
  
  
  <div class="form-group row">
    <div class="col-sm-10">
	<div class="input-group-append">
				<div id="request_send_id" class="btn btn-primary ">REQUEST SENDER ID</div> 
			</div>
    </div>
  </div>
</form>
  </div>
</div>