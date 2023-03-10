<?php 
session_start();
	require_once '../inc/dbc.inc.php';
	if(isset($_POST['signup'])) {
		if($username ='') {
				echo "<script> alert('Complete your details') </script>
						<script>window.location = '../index.php'</script>
				";
		}
		
		$email=$_POST['email'];
		$username=$_POST['username'];
		$password=$_POST['password'];
		$cpassword=$_POST['cpassword'];
		if ($password==$cpassword) {
							$query= "select * from users WHERE email='$email' OR username='$username'";
							$query_run = mysqli_query($conn,$query);
							if(mysqli_num_rows($query_run)>0)
					{
						// there is already a user with the same username
						echo "<script> alert('Username or email already exists.. try another username') </script>
						<script>window.location = '../index.php'</script>
				";
					}
							
					
				}
				
			else { 
			echo "
				<script>alert('Password not match')</script>
				<script>window.location = '../index.php'</script>
				";
			}
	}
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
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <style>
  .avatar{
			width: 200%;
			height: 200%;
			border-radius: 50%;
			position: relative;
			text-align: center;
		}
  </style>
  <title>
    Material Dashboard 2 by Creative Tim
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
  <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.0.4" rel="stylesheet" />
</head>

<body class="">
  
  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-100">
        <div class="container">
          <div class="row">
            <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 start-0 text-center justify-content-center flex-column">
              <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center" style="background-image: url('../assets/img/illustrations/illustration-signup.jpg'); background-size: cover;">
              </div>
            </div>
            <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5">
              <div class="card card-plain">
                <div class="card-header">
                  <h4 class="font-weight-bolder">Sign Up</h4>
                  <p class="mb-0">Complete your profile <?php echo $username ?></p>
				  <center>  <img id="uploadPreview" src="../avatar.png" class="avatar" > </center>
                </div>
				
					
                <div class="card-body">
				
                  <form method = "POST" action="../inc/complete_profile.php" enctype="multipart/form-data"autocomplete="off">
				 <b>  <label class="form-label">Upload your Profile Picture</label></b>
				  <div class="input-group input-group-outline mb-3">
				
                     
                      	<input class="form-control" type="file" name="imglink" id="imglink" aria-describedby="inputGroupFile" accept=".jpg, .jpeg, .png" onchange="PreviewImage()"required>
                    	
                    </div>
					<input type="hidden" name ="username" value= <?php echo $username ?> >
						<input type="hidden" name ="email" value= <?php echo $email ?> >
							<input type="hidden" name ="password" value= <?php echo $password ?> >
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label">Firstname</label>
                      <input name = "firstname" type="text" class="form-control">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label">Lastname</label>
                      <input type="text" name = "lastname"class="form-control">
                    </div>
                   
                    <div class="form-check form-check-info text-start ps-0">
                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                      <label class="form-check-label" for="flexCheckDefault">
                        I agree the <a href="javascript:;" class="text-dark font-weight-bolder">Terms and Conditions</a>
                      </label>
                    </div>
                    <div class="text-center">
                      <button type="submit" name="complete_profile" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">Sign Up</button>
                    </div>
                  </form>
                </div>
                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                  <p class="mb-2 text-sm mx-auto">
                    Already have an account?
                    <a href="../index.php" class="text-primary text-gradient font-weight-bold">Sign in</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
 <?php include '../inc/scripts.php' ?>
  <script>
  	function PreviewImage() {
        	var oFReader = new FileReader();
        	oFReader.readAsDataURL(document.getElementById("imglink").files[0]);
        	oFReader.onload = function (oFREvent) {
            	document.getElementById("uploadPreview").src = oFREvent.target.result;
			};
		};
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