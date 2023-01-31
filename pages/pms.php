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
                <h6 class="text-white text-capitalize ps-3">Preventive Maintenance Masterlist</h6>
              </div>
			  
            </div>
            
					  <div class="card-body px-0 pb-2">	
              <div class="table-responsive p-0">
			   
                <table class="table align-items-center mb-0" id="pms">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Client Name</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Machine</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder ps-2">Turnover / Coverage Date</th>
						<th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder ps-2">Completion</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Frequency</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
					 <?php
							
							$query = mysqli_query($conn, "select contract.contract_id, contract.client_id, contract.machine_type, contract.model, contract.frequency, contract.count, contract.total, 
							contract.turn_over,contract.coverage, contract.status, clients.client_name, clients.client_address, clients.contact_person, clients.contact_email, clients.imglink, 
							machine_type.machine_name from ((contract left join clients on contract.client_id = clients.client_id) left join machine_type on contract.machine_type = machine_type.machine_id) where contract.status !='CONTRACT EXPIRED';");
							while($fetch = mysqli_fetch_array($query)){	
						$percentage = 1;
								if ($fetch['contract_id'] !="" ){
								$percentage  = (($fetch['total'] - $fetch ['count']) / $fetch['total']) * 100;
							}
							
						?>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="<?php echo $fetch['imglink'] ?>" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm"><?php echo $fetch['client_name']?></h6>
                            <p class="text-xs text-secondary mb-0"><?php echo $fetch['client_address']?></p>
                          </div>
                        </div>
                      </td>
				
					 
                   
					  
					  <td>
					      <h6 class="mb-0 text-sm"><?php echo $fetch['model']?></h6>
                        <p class="text-xs font-weight-bold mb-0"><?php echo $fetch['machine_name']?></p>
                      
                      </td>
							
                      <td class="align-middle text-center text-sm">
					  <a href="#" data-bs-toggle="modal" data-bs-target="#pmsScheds<?php echo  $fetch['contract_id'] ?>"> <p class="mb-0 text-secondary">
                        <span class="badge badge-sm bg-gradient-success"><?php echo date("m-d-Y", strtotime($fetch['turn_over']))." / ".date("m-d-Y", strtotime($fetch['coverage']))?></span>
						<p class="text-xs text-secondary mb-0"><?php echo $fetch['status']?></p>
						</a>
                      </td>
                        
                      <td class="align-middle text-center">
  <?php 
$contract_id = $fetch['contract_id'];
					  if ($count = 0) {
						  $percenage = 100;
					  }
					  ?>
                     
					
                        <div class="progress-wrapper w-75 mx-auto">
                          <div class="progress-info">
                            <div class="progress-percentage">
                              <span class="text-xs font-weight-bold"><?php echo number_format($percentage)."%" ?></span>
                            </div>
                          </div>
                          <div class="progress">
         <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="<?php echo number_format($percentage)?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo number_format($percentage)?>%;"></div>
                          </div>
                        </div>
					
				
                      </td>
  <td>
                        <p class="text-xs font-weight-bold mb-0"><?php echo $fetch['frequency']?></p>
                      
                      </td>
							
				
                      <td class="col-md-4">
                      	<button  class="btn btn-block bg-gradient-secondary mb-3" data-bs-toggle="modal" data-bs-target="#con<?php echo $contract_id?>">
							View Logs
						  </button>
						   <?php require '../inc/addClientMachineModal.php '  ; ?>
						
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
  
  <?php 
  include '../inc/pms_sched.php' ;?>
  <!--   Core JS Files   -->

  <script src="../assets/js/plugins/script.js"></script>
<script>
	 var scheds = $.parseJSON('<?= json_encode($sched_res) ?>')
  </script>
 <script>
 $(document).ready(function () {
		$('#pms').DataTable({
            "responsive": true
        });
	});
	 $(document).ready(function () {
		$('#dataTable1').DataTable({
            "responsive": true
        });
	});
	 $(document).ready(function () {
		$('#pms_master').DataTable({
            "responsive": true
        });
	});
	 $(document).ready(function () {
		$('#p_done').DataTable({
            "responsive": true
        });
	});
		$(function () {
        $("#profile").click(function () {
            if ($(this).is(":checked")) {
                $("#other").removeAttr("disabled");
				     $("#other1").removeAttr("disabled");
				$("#depart").attr("hidden", "hidden");
		     } else {
                $("#other").attr("disabled", "disabled");
				 $("#other1").removeAttr("disabled");
				 $("#address").attr("disabled", "disabled");
				 $("#depart").removeAttr("hidden");
                $("#depart").focus();
				
            }
        });
    });

 </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.0.4"></script>
</body>

</html>