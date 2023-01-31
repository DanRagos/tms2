<?php
session_start();
 if (!isset($_SESSION['username'])) {
        header('Location: ../index.php');
    }
require '../inc/modals.php' ;
require '../inc/dbc.inc.php'; 


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


  
 
  <title>
    KVP - Clients
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
 <?php require '../inc/sources.php' ?>
</head>

<body class="g-sidenav-show  bg-gray-200">
  <?php require '../inc/sidenav.php' ?>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
	<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Clients</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Clients</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
           
          </div>
	<?php include '../inc/topnav.php' ?>
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-3">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Clients table</h6>
              </div>
			  
            </div>
			
            <div class="card-body px-0 pb-2">
			 <div class="m-1 ">
			 <?php if ($_SESSION['type'] !="Viewer") 
			{ ?>
                            <button type="button" class="btn btn-block bg-gradient-primary mb-3" data-bs-toggle="modal" data-bs-target="#addClient">
							<span><i class="fa fa-info-circle"></i></span>
                            <span> Add Clients</span>
                            </button>
							
							
                        </div>
			<?php } ?>		
              <div class="table-responsive p-0">
			   
                <table  class="table align-items-center mb-0" id="dataTable"><!-- id="dataTable" -->
                  <thead>
                    <tr>
					 <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No.</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Client Name</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Contact Person</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
				  					 <?php
									 $count = 0;
							$query = mysqli_query($conn, "SELECT * FROM `clients` order by client_id ") or die(mysqli_error());
							while($fetch = mysqli_fetch_array($query)){	
							$count++;
						?>
                    <tr>
  <td>
                        <p class="text-xs font-weight-bold mb-0"><?php echo $count?></p>
                     
                      </td>
                      
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
                        <p class="text-xs font-weight-bold mb-0"><?php echo $fetch['contact_person']?></p>
                        <p class="text-xs text-secondary mb-0"><?php echo $fetch['contact_email']?></p>
                      </td>
                      

                      <td class="align-middle">
					  <?php  $client_id = $fetch['client_id'];
					  if ($_SESSION['type'] !="Viewer") {
					  
					?>
						<button  class="btn btn-block bg-gradient-primary mb-1" data-bs-toggle="modal" data-bs-target="#upd1<?php echo  $client_id  ?>">
							Add	
						  </button>
						<button  class="btn btn-block bg-gradient-secondary mb-1" data-bs-toggle="modal" data-bs-target="#edit<?php echo  $client_id  ?>">
							Edit
						  </button>
						   <?php require '../inc/addClientMachineModal.php '  ; ?>
							
                      </td>
							<?php }?>
					
                    </tr>
							<?php }?>

                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">List of End Contracts this Month</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center justify-content-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Client</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Machine</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Coverage/ Turnover Date</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Completion</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody> 
				  <?php
				    $query1 = mysqli_query($conn, "select contract.contract_id, contract.client_id, contract.machine_type, contract.model, contract.frequency, contract.turn_over,contract.coverage, contract.status, clients.client_name, clients.client_address, clients.imglink, machine_type.machine_name from
					((contract left join clients on contract.client_id = clients.client_id) left join machine_type on contract.machine_type = machine_type.machine_id)
					where contract.status = 'CONTRACT EXPIRED';");
							while($fetch = mysqli_fetch_array($query1)){
				 
				  ?>
                    <tr>
                      <td>
                        <div class="d-flex px-2">
                          <div>
                            <img src="<?php echo $fetch ['imglink'] ?>" class="avatar avatar-sm rounded-circle me-2" alt="spotify">
                          </div>
                          <div class="my-auto">
                            <h6 class="mb-0 text-sm"><?php echo $fetch ['client_name'] ?></h6>
							   <p class="text-xs text-secondary mb-0"><?php echo $fetch['client_address']?></p>
                          </div>
                        </div>
                      </td>
                      <td>
                         <h6 class="mb-0 text-sm"><?php echo $fetch ['model'] ?></h6>
							   <p class="text-xs text-secondary mb-0"><?php echo $fetch['machine_name']?></p>
                      </td>
                      <td>
                        <span class="text-xs font-weight-bold"><?php echo $fetch ['coverage'].' - '.$fetch['turn_over'] ?></span>
                      </td>
                      <td class="align-middle text-center">
                        <div class="d-flex align-items-center justify-content-center">
                          <span class="me-2 text-xs font-weight-bold">100%</span>
                          <div>
                            <div class="progress">
                              <div class="progress-bar bg-gradient-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                            </div>
                          </div>
                        </div>
                      </td>
                      <td class="align-middle">
                        <button class="btn btn-link text-secondary mb-0">
                          <i class="fa fa-ellipsis-v text-xs"></i>
                        </button>
                      </td>
                    </tr>
							<?php } 
							?>
                  
                      
                     
                  </tbody>
                </table>
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
       
      </div>
    </div>
  </div>
  <!--   Core JS Files   -->
 <script src="../assets/js/core/popper.min.js"></script>
  <?php include '../inc/scripts.php' ?> 
  <script>
 
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
	
	$(document).ready(function () {
		$('#dataTable').DataTable({
            "responsive": true
        });
	});
	
	
	
$(function() {

  $('input[name="datefilter"]').daterangepicker({
      autoUpdateInput: false,
      locale: {
          cancelLabel: 'Clear'
      }
  });

  $('input[name="datefilter"]').on('apply.daterangepicker', function(ev, picker) {
      $(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));
  });

  $('input[name="datefilter"]').on('cancel.daterangepicker', function(ev, picker) {
      $(this).val('');
  });

});

$(function() {
  $('input[name="firstdate"]').daterangepicker({
    singleDatePicker: true,
    showDropdowns: true,
  });
});

</script>


  </script>

  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.0.4"></script>

 

</body>

</html>