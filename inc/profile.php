<?php 
	session_start();
	require_once '../inc/dbc.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="shortcut icon" href="../image/CEIT-TIGERS-LOGO(1).png" type="image/gif" sizes="16x16"> 
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../bootstrap/js/jquery-3.4.1.js">
	<script src="https://code.jquery.com/jquery-1.8.2.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<style>
		* {
			font-family: 'Montserrat', sans-serif !important;
		}
		body {
			background-color: #FF8C00;
		}
		.avatar{
			width: 100px;
			height: 100px;
			border-radius: 50%;
			position: relative;
			text-align: center;
		}
	</style>
</head>
<body>
	<section>
	<div class="container text-center">
			<div class="card w-50 mx-auto shadow-lg">
                <div class="card-header">Welcome Extension Coordinator</div>
                <div class="card-body bg-light">
					<h3 class="card-subtitle">Please Complete Your Profile</h3>
					<img id="uploadPreview" src="../avatar.png" class="avatar" >
					<h3 class="card-subtitle text-muted my-2"><?php echo $_SESSION ['username'];?></h3>
					<?php 
    					require 'dbc.inc.php';
						$user=$_SESSION['username'];
						$row = $conn->query("SELECT * FROM `users` where username='$user'") or die(mysqli_error());
    					while($fetch = $row->fetch_assoc()){
							
    				?>
					<form method="POST" action="complete_profile.php" enctype="multipart/form-data">
						<div class="form-group input-group mb-3">
							<input class="form-control-file" type="file" name="imglink" id="imglink" aria-describedby="inputGroupFile" accept=".jpg, .jpeg, .png" onchange="PreviewImage()"required>
                    	</div>
						<div class="form-group input-group mb-3">
							<input type="hidden" name="mem_id" value="<?php echo $fetch['mem_id']; ?>">
                    	    <input autocomplete="off" type="text" class="form-control rounded" name="firstname" placeholder="Firstname" required>
                    	</div>
						<div class="form-group input-group mb-3">
                    	    <input autocomplete="off" type="text" class="form-control rounded" name="lastname" placeholder="Lastname" required>
                    	</div>
					
						<button class="btn rounded btn-success" type="submit" name="btnprofile"> Enter</button>
					</form>
					<?php 
						} 
					?>
				</div>
			</div>
		</div>
	</section>

	<script type="text/javascript">
		function PreviewImage() {
        	var oFReader = new FileReader();
        	oFReader.readAsDataURL(document.getElementById("imglink").files[0]);
        	oFReader.onload = function (oFREvent) {
            	document.getElementById("uploadPreview").src = oFREvent.target.result;
			};
		};
	 $(function () {
        $("#profile").click(function () {
            if ($(this).is(":checked")) {
                $("#other").removeAttr("disabled");
                $("#other").focus();
				$("#depart").attr("disabled", "disabled");
		     } else {
                $("#other").attr("disabled", "disabled");
				 $("#depart").removeAttr("disabled");
                $("#depart").focus();
				
            }
        });
    });
	</script>
</body>
</html>