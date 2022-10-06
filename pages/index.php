<?php 
    ob_start ();
    session_start();  
	if (!isset($_SESSION['username'])) {
        header('Location: ../index.php');
    }
	if ($_SESSION['type']=="admin") {
        header('Location: ../admin/index.php');
    }
	date_default_timezone_get('Asia/Manila'); 
    include '../inc/dbc.inc.php';
    include '../inc/comments.php';
$date = date("Y-m-d", strtotime("+8 HOURS"));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include('links.php');?>
    <title>Record Management System</title>
<style>
  #alert_popover
  {
   display:block;
   position:absolute;
   bottom:60px;
   left:50px;
  }
  .wrapper {
    display: table-cell;
    vertical-align: right;
    height: auto;
    width:200px;
  }
  .alert_default
  {
   color: #333333;
   background-color: white;
   border-color: #cccccc;
  }
  </style>
</head>
<body>
    <?php include 'topnav.php'; ?>
    <section id= "wrapper">
        <?php include 'sidenav.php'; ?>
        <div id= "page-content-wrapper" class= "page-content ml-auto bg-white">
            <div class="container-fluid">
			 <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class=" title text-center"><h4>CEIT Extension Services</h4></div>
                            <p class= "lead text-center bg-white p-2 shadow-sm">
                                Extension Program is a function within the CEIT that offers classes to local residents interested 
                                in learning new skills or information and designed to educate entire communites.
                            </p>
                        </div>
                    </div>
                <div class="row mt-2">
                    <div class="col-12">
                        <div class=" title">
                            <h4 class="">Announcements</h4>
                        </div>
                        <div class="bg-light">
						    <?php 
    				            require '../inc/dbc.inc.php';
	 $row1 = $conn->query("SELECT * from announcement where posted_at >= '$date' ORDER BY posted_at DESC LIMiT 4") or die(mysqli_error());
	 $rows = $row1->num_rows;
		if ($rows > 0) {
    				            while($fetch1 = $row1->fetch_assoc()){
                                    $date = $fetch1['posted_at'];	
    				        ?>
                                <div class="border-bottom p-3">
                                    <span class="font-weight-bold" style="color: #0093e0;"><?php echo date('F d, Y', strtotime($date))?></span>
                                    <h3 class="font-weight-bold mt-0 text-success"><?php echo $fetch1['name'];?></h3>
                                    <p class="m-0 text-justify px-2"><?php echo $fetch1['body'];?></p>
                                </div>
                            <?php 
		}}
		else {
			?> <p class="m-0 text-justify px-2">No recent Announcements</p>
		<?php }
                            ?>
                            <a class="text-warning font-bold px-3" href="list-of-announcements.php">View All Announcements</a>
                        </div>
                    </div>
                </div>
                <div class="jumbotron bg-transparent py-3 px-1">
                    <div class="row">
                        <div class="col-12">
                            <div class=" title"><h4>Schedules</h4></div>
                                <?php 
                                    require '../inc/dbc.inc.php';
						            $row1 = $conn->query("SELECT * FROM `events` ORDER BY `start_event` DESC LIMIT 5") or die(mysqli_error());
    					            while($fetch1 = $row1->fetch_assoc()){
                                        $date1 = $fetch1['start_event'];	
                                        $date2 = $fetch1['end_event'];	
                                ?>
                                <div class="border-bottom d-flex align-items-center">
                                    <div class="events-date text-uppercase text-center">
                                        <?php echo date('M', strtotime($date1))?>
                                        <div><?php echo date('d', strtotime($date1)) ?></div>
                                    </div>
                                    <div class="d-inline-block pl-3 event-li">
                                        <h3 class="font-weight-bold mt-0">
                                            <?php echo $fetch1['title']; ?>
                                        </h3>
                                         <p>  <?php echo date('M d, Y', strtotime($date1)) ?> -  <?php echo date('M d, Y', strtotime($date2)) ?> 
										<br>
                                        <?php echo date('h:m a', strtotime($date1)) ?> -  <?php echo date('h:m a', strtotime($date2)) ?> 
                                        </p>
                                    </div>
                                </div>
                                <?php
                                    }
                                ?>
                                <div class="pb-2">
                                    <a class="text-warning font-bold" href="list-of-schedules.php">View All Schedules</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		
	</section>
	<?php include '../inc/pop_up.php' ; ?>
    <?php 
        include 'scripts.php'; 
    ?>
	
</body>
</html>
