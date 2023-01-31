<?php
session_start();
if (!isset($_SESSION['username'])) {
        header('Location: ../index.php');
    }
require '../inc/dbc.inc.php'; 
$month2 = date('F');
$year = date('Y');
$page = $_SERVER['PHP_SELF'];
$sec = "30";

?>
<!--
=========================================================
* Material Dashboard 2 - v3.0.4
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
   <!-- <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'"> -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <style>
  .scroll {
  height:600px;
  overflow-y: scroll;
}
  </style>

 
  <title>
   KVP Management System
  </title>
  <!--     Fonts and icons     -->
 <?php include '../inc/sources.php' ?>
</head>

<body class="g-sidenav-show  bg-gray-200">
<?php include '../inc/sidenav.php' ?>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
	<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Dashboard</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
          
          </div>
<?php include '../inc/topnav.php' ?>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
       <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
	   <?php require '../inc/dboard.php'; 
	   require '../inc/dboard_modals.php';
	   ?>
	   

<div class="container">
<div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 g-4">
       <div class="col">
		 <div class="card radius-4 border-start border-0 border-3 border-info">
			<div class="card-body">
				<div class="d-flex align-items-center">
					<div>
						<h3 class="mb-0 " style="color: #212529" >SERVICE SCHEDULE</h3>
						<h1 class="my-1 text-info"><?php echo $schedule_count?></h1>
						<p class="mb-0 font-13"></p>
					</div>
					<div class="widgets-icons-2 rounded-circle bg-gradient-scooter text-white ms-auto"><i class="fa fa-shopping-cart"></i>
					</div>
				</div>
			</div>
		 </div>
	   </div>
	   <div class="col">
		<div class="card radius-10 border-start border-0 border-3 border-danger">
		   <div class="card-body">
			   <div class="d-flex align-items-center">
				   <div>
					   <h3 class="mb-0" style="color: #212529" >SERVICE CALL</h3>
					   <h1 class="my-1 text-danger"><?php echo $service_call?></h1>
					   <p class="mb-0 font-13"></p>
				   </div>
				   <div class="widgets-icons-2 rounded-circle bg-gradient-bloody text-white ms-auto"><i class="fa fa-dollar"></i>
				   </div>
			   </div>
		   </div>
		</div>
	  </div>
	  <div class="col">
		<div class="card radius-10 border-start border-0 border-3 border-success">
		   <div class="card-body">
			   <div class="d-flex align-items-center">
				   <div>
					   <H3 class="mb-0 "style="color: #212529" >PMS</H3>
					   <h1 class="my-1 text-success"><?php echo $pms?></h1>
					   <p class="mb-0 font-13"></p>
				   </div>
				   <div class="widgets-icons-2 rounded-circle bg-gradient-ohhappiness text-white ms-auto"><i class="fa fa-bar-chart"></i>
				   </div>
			   </div>
		   </div>
		</div>
	  </div>
	  <div class="col">
		<div class="card radius-10 border-start border-0 border-3 border-warning">
		   <div class="card-body">
			   <div class="d-flex align-items-center">
				   <div>
					  <a href="#" data-bs-toggle="modal" data-bs-target="#pendCall"> <h3 class="mb-0 " style="color: #212529" >PENDING SERVICE CALL</h3> 
					   <h1 class="my-1 text-warning"><?php echo $pservice_call?></h1>
					   <p class="mb-0 font-13">Click to View</p>
					   </a>
				   </div>
				   <div class="widgets-icons-2 rounded-circle bg-gradient-blooker text-white ms-auto"><i class="fa fa-users"></i>
				   </div>
			   </div>
		   </div>
		</div>
	  </div> 
	   <div class="col">
		<div class="card radius-10 border-start border-0 border-3 border-warning">
		   <div class="card-body">
			   <div class="d-flex align-items-center">
				   <div>
					<a href="#" data-bs-toggle="modal" data-bs-target="#pendPms"> <h3 class="mb-0 " style="color: #212529" >PENDING PMS</h3> 
					   <h1 class="my-1 text-warning"><?php echo $ppms?></h1>
					   <p class="mb-0 font-13">Click to view</p>
					   </a>
				   </div>
				   <div class="widgets-icons-2 rounded-circle bg-gradient-blooker text-white ms-auto"><i class="fa fa-users"></i>
				   </div>
			   </div>
		   </div>
		</div>
	  </div> 
	    <div class="col">
		<div class="card radius-10 border-start border-0 border-3 border-warning">
		   <div class="card-body">
			   <div class="d-flex align-items-center">
				     <div>
					  	<a href="#" data-bs-toggle="modal" data-bs-target="#serviceDone">  <H3 class="mb-0 " style="color: #212529" >RESOLVED</h3>
					   <h1 class="my-1 text-warning "><?php echo $resolved?></h1>
					   <p class="mb-0 font-13">Click to view</p>
					   </a>
				   </div>
				   <div class="widgets-icons-2 rounded-circle bg-gradient-blooker text-white ms-auto"><i class="fa fa-users"></i>
				   </div>
			   </div>
		   </div>
		</div>
	  </div>
	  </div>
	
	</div>
	  <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 g-3">
	   <div class="col">
		<div class="card radius-10 border-start border-0 border-3 border-warning">
		   <div class="card-body">
			   <div class="d-flex align-items-center">
				   	<a href="#" data-bs-toggle="modal" data-bs-target="#contractExp">  <H3 class="mb-0 " style="color: #212529" >CONTRACT FOR EXPIRATION</h3>
					  <h1 class="my-1 text-warning "><?php echo $count_exp?></h1>
					     <p class="mb-0 font-13">Click to view</p>
				   <div class="widgets-icons-2 rounded-circle bg-gradient-blooker text-white ms-auto"><i class="fa fa-users"></i>
				   
				   </div>
			   </div>
		   </div>
		</div>
	  </div> 
	  </div>
</div>
      
       
      </div>
	  
	  <?php 
	 
				  $mysql = mysqli_query($conn, "SELECT pms.pms_id, pms.schedule_id, pms.service_date, pms.service_problem, pms.service_diagnosis, pms.service_done, pms.remarks, pms.service_by, schedule.client_id, schedule.status, schedule.guest, schedule.contract_id, schedule.model,
				  contract.contract_id, contract.count, contract.total, contract.status, clients.client_name, clients.client_address, clients.imglink, machine_type.machine_name from ((((pms inner join schedule on pms.schedule_id = schedule.schedule_id) 
				  left join machine_type on schedule.machine_type = machine_type.machine_id)
				  left join clients on schedule.client_id = clients.client_id) left join contract on schedule.contract_id = contract.contract_id )
  WHERE MONTH(service_date) = $month AND YEAR (service_date) =  $year  order by pms.service_date" );
  ?>
      <div class="row mb-4 m-4">
        <div class="col-lg-8 col-md-6 mb-md-0 mb-4">
          <div class="card">
            <div class="card-header pb-0">
              <div class="row">
                <div class="col-lg-6 col-7">
                  <h6>Service Done this<?php echo " ".$month2.", ".$year ?></h6>
                  <p class="text-sm mb-0">
                    <i class="fa fa-check text-info" aria-hidden="true"></i>
                    <span class="font-weight-bold ms-1"><?php echo $resolved_month?> done</span> this month
                  </p>
                </div>
                <div class="col-lg-6 col-5 my-auto text-end">
                  <div class="dropdown float-lg-end pe-4">
                    <a class="cursor-pointer" id="dropdownTable" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="fa fa-ellipsis-v text-secondary"></i>
                    </a>
                    <ul class="dropdown-menu px-2 py-3 ms-sm-n4 ms-n5" aria-labelledby="dropdownTable">
                      <li><a class="dropdown-item border-radius-md" href="javascript:;">Action</a></li>
                      <li><a class="dropdown-item border-radius-md" href="javascript:;">Another action</a></li>
                      <li><a class="dropdown-item border-radius-md" href="javascript:;">Something else here</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive">
                <table class="table align-items-center mb-0" id="service_done_table">
			
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Client</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Members</th>
					     <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Type</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Service Date</th>
					       <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Machine</th>
					  
                     
                    </tr>
                  </thead>
              
				 
                  <tbody>
				  <?php 
				
							while($row = mysqli_fetch_array($mysql)){	
							$clientName = $row['client_name'];
								$imglink = $row['imglink'];
								$type = 'PMS';
							if (!$row['client_id']) {
								$type = 'SVC';
		$guest = $row['guest'];
		 $last_space = strrpos($guest, ' / ');
$clientAddress = substr($guest, $last_space + 2);
$clientName = substr($guest, 0, $last_space - 1);
$imglink = "../image/uploads/mv santiago.webp";
	}
							$percentage = 1;
								if ($row['contract_id'] !="" ){
								$percentage  = (($row['total'] - $row ['count']) / $row['total']) * 100;
							}
							
							
						
							
				  ?>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="<?php echo $imglink?>" class="avatar avatar-sm me-3" alt="xd">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm"><?php echo $clientName?></h6>
							  <p class="text-xs text-secondary mb-0"><?php echo $clientAddress?></p>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="avatar-group mt-2">
                          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="<?php echo $row['service_by']?>">
                            <img src="<?php echo $imglink?>" alt="team1">
                          </a>
                       
                        </div>
                      </td>
					   <td class="align-middle text-center text-sm">
                        <span class="text-xs font-weight-bold"> <?php echo $type?> </span>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="text-xs font-weight-bold"> <?php echo $row['service_date']?> </span>
                      </td>
					 <td class="align-middle text-center text-sm">
                        <span class="text-xs font-weight-bold"> <?php echo $row['model']?> </span>
						 <p class="text-xs text-secondary mb-0"><?php echo $row['machine_name']?></p>
						
                      </td>
                    </tr>
							<?php } ?>
                   
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="card h-100">
            <div class="card-header pb-0">
              <h6>Schedule for this <?php echo $month2.", ".$year ?></h6>
              <p class="text-sm">
                <i class="fa fa-arrow-up text-success" aria-hidden="true"></i>
                <span class="font-weight-bold"><?php echo $count_sched?></span> this month
              </p>
            </div>
            <div class="card-body p-3 scroll">
              <div class="timeline timeline-one-side">
			<?php  $sched_query = mysqli_query($conn, "  select schedule.schedule_id, schedule.client_id, schedule.contract_id, schedule.guest, schedule.schedule_date,schedule.status, clients.client_name,
			clients.client_address, machine_type.machine_id from ((schedule left join clients on schedule.client_id = clients.client_id) INNER JOIN machine_type on machine_type.machine_id = 
			schedule.machine_type)  WHERE MONTH(schedule_date) = $month AND YEAR (schedule_date) =  $year AND schedule.status != '2' order by schedule.schedule_date DESC") or die(mysqli_error());
   while($sched_row = mysqli_fetch_array($sched_query)){
	    
	   
	   if($sched_row['contract_id']!='') {
		   $notif = "success";
		   $type = "( PMS )" ;
	   }
	   else {
		   $notif = "info" ;
		      $type = "( SERVICE CALL )" ;
	   }
	   if ($sched_row['guest']) {
		$guest = $sched_row['guest'];
		 $last_space = strrpos($guest, ' / ');
$clientAddress = substr($guest, $last_space + 2);
$clientName = substr($guest, 0, $last_space - 0);
	   }
	   else {
		   $clientName = $sched_row['client_name'];
		     $clientAddress = $sched_row['client_address'];

	   }
	 
   ?>
                <div class="timeline-block mb-3">
                  <span class="timeline-step">
                    <i class="material-icons text-<?php echo $notif ?> text-gradient">notifications</i>
                  </span>
                  <div class="timeline-content">
                    <h6 class="text-dark text-sm font-weight-bold mb-0"><?php echo $type. " " .$clientName.', '.$clientAddress?></h6>
                    <p class="text-secondary font-weight-bold text-xs mt-1 mb-0"><?php  echo date("F-d-Y", strtotime($sched_row['schedule_date']))?></p>
                  </div>
                </div> 
   <?php }?>
              
              </div>
            </div>
          </div>
        </div>
      </div>
   
    </div>
  </main>
  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="material-icons py-2">settings</i>
    </a>
    <div class="card shadow-lg">
      <div class="card-header pb-0 pt-3">
        <div class="float-start">
          <h5 class="mt-3 mb-0">Material UI Configurator</h5>
          <p>See our dashboard options.</p>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="material-icons">clear</i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0">
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class="mb-0">Sidebar Colors</h6>
        </div>
        <a href="javascript:void(0)" class="switch-trigger background-color">
          <div class="badge-colors my-2 text-start">
            <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
          </div>
        </a>
        <!-- Sidenav Type -->
        <div class="mt-3">
          <h6 class="mb-0">Sidenav Type</h6>
          <p class="text-sm">Choose between 2 different sidenav types.</p>
        </div>
        <div class="d-flex">
          <button class="btn bg-gradient-dark px-3 mb-2 active" data-class="bg-gradient-dark" onclick="sidebarType(this)">Dark</button>
          <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-transparent" onclick="sidebarType(this)">Transparent</button>
          <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
        </div>
        <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
        <!-- Navbar Fixed -->
        <div class="mt-3 d-flex">
          <h6 class="mb-0">Navbar Fixed</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
          </div>
        </div>
        <hr class="horizontal dark my-3">
        <div class="mt-2 d-flex">
          <h6 class="mb-0">Light / Dark</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
          </div>
        </div>
        <hr class="horizontal dark my-sm-4">
       
      </div>
    </div>
  </div>
 <script src="../assets/js/core/popper.min.js"></script>
  <?php include '../inc/scripts.php' ?>
   
  <script>
  	$(document).ready(function () {
		$('#service_done_table').DataTable({
            "responsive": true
        });
	});
    

  var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
		

	
  </script>
 

  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.0.4"></script>
</body>

</html>