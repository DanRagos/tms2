<?php
session_start();
 if (!isset($_SESSION['username'])) {
        header('Location: ../index.php');
    }
require '../inc/dbc.inc.php'; 
include '../inc/modals.php' ;

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
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../image/icon.jpg">
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/daterangepicker.css">
	
  <title>
    KVP - PMS
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
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
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">PMS</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">PMS</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            
          </div>
	<?php include '../inc/topnav.php' ?>
    <!-- End Navbar -->
	
     <div class="container-fluid py-3">
      
   
     
   <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
			  <?php 
			  $month = date('m');
			   $month2 = date('F');
			  $year = date('Y');
			  ?>
                <h6 class="text-white text-capitalize ps-3">Service done for Year <?php echo $year ?></h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center justify-content-center mb-0" id="pms_master">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Client Name</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Unit</th>
					   <th class="text-uppercase text-secondary text-xxs font-weight-bolder  opacity-7 ps-2">Date of Service</th>
                       <th class="text-uppercase text-secondary text-xxs font-weight-bolder  opacity-7 ps-2">View</th>
                     
                    </tr>
                  </thead>
		
  
                  <tbody>
				  <?php 
				  $query1 = mysqli_query($conn, "SELECT pms.pms_id, pms.schedule_id, pms.service_date, pms.service_problem, pms.service_diagnosis, pms.service_done, pms.remarks, pms.service_by, schedule.client_id,schedule.model, schedule.contract_id, schedule.model, schedule.guest, clients.client_name, clients.client_address from (((pms inner join schedule on pms.schedule_id = schedule.schedule_id) left join clients on
				  schedule.client_id = clients.client_id) left join machine_type on schedule.machine_type = machine_type.machine_id)
  where YEAR (service_date) =  $year GROUP BY service_date");
							while($fetch = mysqli_fetch_array($query1)){	
											 if ($fetch['guest']) {
		$guest = $fetch['guest'];
		 $last_space = strrpos($guest, ' / ');
$clientAddress = substr($guest, $last_space + 2);
$clientName = substr($guest, 0, $last_space - 1);
	   }
	   else {
		   $clientName = $fetch['client_name'];
		     $clientAddress = $fetch['client_address'];

	   }
						
							
				  ?>
                    <tr>
                      <td>
                         <div class="d-flex px-2 py-1">
                          <div>
                            <img src="../image/uploads/mv santiago.webp" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm"><?php echo  $clientName?></h6>
                            <p class="text-xs text-secondary mb-0"><?php echo $clientAddress?></p>
                          </div>
                        </div>
                      </td>
					   <td>
                        <span class="text-xs font-weight-bold"><?php echo $fetch['model']?></span>
                      </td>
					  <td>
                        <span class="text-xs font-weight-bold"><?php echo $fetch['service_date']?></span>
                      </td>
					  
                      <td class="align-middle">
					  <?php if ($_SESSION['type'] != 'Viewer') { ?>
                        <button class="btn btn-link text-secondary mb-0 " data-bs-toggle="modal" data-bs-target="#viewPms<?php echo  $fetch['pms_id']?>">
                          <i class="fa fa-ellipsis-v text-xs"></i>
                        </button>
					  <?php } ?>
						<?php require '../inc/modals.php' ?>
                      </td>
                    </tr>
							<?php } ?>
                  </tbody>
                </table>
              </div>
			  
            </div>
          </div>
        </div>
      </div>

   
    </div>
  </main>
  <script src="../assets/js/core/popper.min.js"></script>
  <?php include '../inc/scripts.php' ?>

 <script>
 $(document).ready(function () {
		$('#pms_master').DataTable({
			order:[2,'desc'],
			 stateSave: true,
        });
	});

		

 </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.0.4"></script>
</body>

</html>