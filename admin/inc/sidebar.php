
<ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">
<a class="sidebar-brand d-flex align-items-center justify-content-center" href=#>
                <div class="sidebar-brand-icon ">
                BOT
                </div 	>
                <div class="sidebar-brand-text mx-3"><sub>1.0.0 </sub></div>
                </a>
                		
				<?php  //echo '<span class="mx-3 my-1 text-white  animated fadeIn  delay-1s"><b> '.COMPANY_BRANCH.'</b></span>'?>
				<hr class="sidebar-divider my-0">
    <?php


$dashboard = '<li class="nav-item"><a class="nav-link" href="dashboard.php"><i class="fas fa-fw fa-tachometer-alt"></i><span>Dashboard</span></a></li>';
	
$workplacetitle='<hr class="sidebar-divider"><div class="sidebar-heading">My WorkSpace</div>';
//$patient = '<li class="nav-item"><a class="nav-link" href="client.php"><i class="fas fa-1x fa-list-alt"></i><span> Patient List</span></a></li>';
//$pricelist = '<li class="nav-item"><a class="nav-link" href="pricelist.php"><i class="fas fa-fw fa-tags"></i><span>Price List</span></a></li>';
$cases = '<li class="nav-item"><a class="nav-link" href="cases.php"><i class="fas fa-fw fa-folder-plus"></i>          <span>Reports</span></a></li>';
	
//$moneystorytitle='<hr class="sidebar-divider"><div class="sidebar-heading">Finance</div>';	
//$moneystory = '<li class="nav-item"><a class="nav-link" href="moneystory.php"><i class="fas fa-fw fa-money-bill-alt"></i><span>Money Story</span></a></li>';
//$rl_moneystory = '<li class="nav-item"><a class="nav-link" href="rl_moneystory.php"><i class="fas fa-fw fa-money-bill-alt"></i><span>Account</span></a></li>';
//$rg_moneystory = '<li class="nav-item"><a class="nav-link" href="rg_moneystory.php"><i class="fas fa-fw fa-money-bill-alt"></i><span>Account</span></a></li>';
	
$settingtitle='<hr class="sidebar-divider"><div class="sidebar-heading">My App </div>';
$settings = '
<li class="nav-item">
	<a class="nav-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo" href="#">
		<i class="fas fa-fw fa-sliders-h"></i><span>Settings</span>
	</a>
				<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
				  <div class="bg-white py-2 collapse-inner rounded">
						<a class="collapse-item" href="settings.php"><span class="fas fa-1x fa-cogs text-primary"></span> General Settings</a>
						<a class="collapse-item" href="#pricing.php"><span class="fas fa-1x fa-list-alt text-primary"></span> Check Update</a>
				  </div>
				</div>
</li>';
//$accesscontrol    = '<li class="nav-item"><a class="nav-link" href="accesscontrol.php"><i class="fas fa-fw fa-users-cog"></i><span>Access Control</span></a></li>';
$version = '<div class="nav-item about_app"><a class="nav-link" href="#"><i class="fas fa-fw fa-info"></i><span>Version</span></a></div>';
//SHOM MENU ITEMS BASED ON PERMISSION SETTINGS
$menu_table       = array($dashboard,
//						  $workplacetitle,
//						  $patient,
//						  $pricelist,
						  $cases,
//						  $moneystorytitle,
//						  $moneystory,
//						  $rl_moneystory, 
//						  $rg_moneystory,
//						  $settingtitle,
						  $settings
						 );
	
//$permission_query = "SELECT * FROM auth WHERE auth_user='".PASSPORT."'";
//$permission_exe   = mysqli_query($dbc, $permission_query);
//
//$row = mysqli_fetch_array($permission_exe);
	
for ($i = 2; $i < count($menu_table) + 2; $i++) {
//    if ($row[$i] == 1) {
        echo $menu_table[$i - 2];
//    } else {
//    }
    
}echo $version;

?>    
    
<hr class="sidebar-divider d-none d-md-block">

      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>
</ul> 
<!--<script src="../js/sb-admin-2.min.js"></script>-->
<!--
<hr class="sidebar-divider"><div class="sidebar-heading">My WorkSpace</div>
      <li class="nav-item">
		<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
		  <i class="fas fa-2x fa-user"></i>
		  <span>Clients</span>
		</a>
				<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
				  <div class="bg-white py-2 collapse-inner rounded">
					<div class="collapse-item AddNewClient" href="" data-toggle="modal" data-target="#AddNewClient_modal"><span class="fas fa-1x fa-user-plus text-primary"></span>	New Client</div>
					<a class="collapse-item" href="client.php"><span class="fas fa-1x fa-list-alt text-primary"></span> Client List</a>
				  </div>
				</div>
      </li>-->
