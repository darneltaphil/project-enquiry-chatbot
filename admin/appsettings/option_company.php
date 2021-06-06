<div class="col-lg-6 p-1">
<div class="card shadow col-md-12 p-0" >
  <div class="card-header m-0">PIN</div>
  <div class="card-body m-0">
    <h5 class="card-title"></h5>
    <p class="card-text display-4"><?php echo COMPANY_CODE ?> </p>
  </div>
</div>
<hr>
<form id="company_info" name="company_info">
  <div class="form-row">
	  <div class="form-group col-md-12">
      <label for="inputPassword4">Company Name</label>
      <input name="company_name" type="text" required="required" class="form-control" id="company_name" form="company_info" placeholder="Company Name" title="Company Name" autocomplete="off" value="<?php echo COMPANY_NAME  ?>" disabled>
    </div>
<!--
	  <div class="form-group col-md-3">
      <label for="inputPassword4">Pharmacy Unique Code</label>
      <input name="company_name" type="text" required="required" class="form-control" id="company_name" form="company_info" placeholder="Company Name" title="Company Name" autocomplete="off" value="<?php echo COMPANY_CODE  ?>" disabled>
    </div>
-->
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input name="company_email" type="email" disabled="disabled" required="required" class="form-control" id="company_email" form="company_info" placeholder="Email" title="Email" autocomplete="off" value="<?php echo COMPANY_EMAIL  ?>">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Mobile</label>
      <input name="company_mobile" type="text" disabled="disabled" required="required" class="form-control" id="company_mobile" form="company_info" placeholder="Mobile #" title="Mobile Number" autocomplete="off" value="<?php echo COMPANY_MOBILE  ?>">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input name="company_address" type="text" disabled="disabled" required="required" class="form-control" id="company_address" form="company_info" placeholder="1234 Main St" title="Address" autocomplete="off" value="<?php echo COMPANY_ADDRESS  ?>">
  </div>
  
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="company_city">City</label>
      <input name="company_city" type="text" disabled="disabled" required="required" class="form-control" id="company_city" form="company_info" title="City " value="<?php echo COMPANY_CITY  ?>">
    </div>

    <div class="form-group col-md-4">
      <label for="company_gps">GhanaPost-GPS</label>
      <input name="company_gps" type="text" disabled="disabled" class="form-control" id="company_gps" form="company_info" autocomplete="off" value="<?php echo COMPANY_GPS  ?>">
    </div>
  </div>
  
  <div id="update_company_info" class=" btn btn-primary invisible"><div class="fas fa-save fa-1x"></div> UPDATE</div>
  <div id="edit_company_info" class=" btn btn-light"><div class="fas fa-edit fa-1x"></div> EDIT</div>
</form>
</div>	
