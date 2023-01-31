   <?php
   require '../vendor/autoload.php'; 
 


   ?>
          <ul class="navbar-nav  justify-content-end">
		  
            <li class="nav-item d-flex ps-3 align-items-center">
			
              <a href="javascript:;" class="nav-link text-body font-weight-bold px-0">
			   <span class="d-sm-inline d-none"><?php echo $_SESSION['username'] ?></span>
              <img src= "<?php echo $_SESSION['imglink'] ?>" class=" ml-2 me-sm1 mb-2 img-fluid" style="width: 50px; height: 50px; border-radius: 50%;">
               
              </a>
            </li>
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>
            <li class="nav-item px-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0">
                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
              </a>
            </li>
			
			
            <li class="nav-item dropdown pe-2 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-bell cursor-pointer"></i>
              </a>
              <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton"> 
			  <?php
	$nav = mysqli_query($conn, "SELECT notification.notif_id, notification.notif_user, notification.notif_name, notification.notif_desc, notification.notif_date, users.imglink from notification inner join users on notification.notif_user = users.mem_id ORDER BY notif_id DESC LIMIT 5");
							while($fnav = mysqli_fetch_array($nav)){
								$notif_name = $fnav['notif_user'];
								$notif_desc = $fnav['notif_desc'];
								
			  ?>
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      <div class="my-auto">
                        <img src="<?php echo $fnav['imglink'];?>" class="avatar avatar-sm  me-3 ">
                      </div>
                      <div class="d-flex flex-column justify-content-center">
					 
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold"><?php echo $fnav['notif_desc']." "?></span>
                        </h6>
					
                        <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                      <?php  echo date('d F, Y h:i A', strtotime($fnav['notif_date']));?>
                        </p>
                      </div>
                    </div>
                  </a>
                </li>
							<?php }?>
                <li class="mb-2">
                  <a class="dropdown-item border-radius-md" href="../pages/notification.php">
                    <div class="d-flex py-1">
                      
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-1">
                          <span class="font-weight-bold">See More
                        </h6>
                       
                      </div>
                    </div>
                  </a>
                </li>
			
                
              </ul>
			  
            </li>
				 <li class="nav-item d-flex align-items-center">
			
              <a href="#" class="nav-link text-body font-weight-bold px-0"  data-bs-toggle="modal" data-bs-target="#logout">
              
                <span class="d-sm-inline d-none">LOGOUT</span>
              </a>
            </li>
          </ul>
		  
      </div>
    </nav>
	 <div class="position-fixed bottom-1 end-1 z-index-2">
        <div class="toast fade hide p-2 mt-2 bg-gradient-info"  role="alert" aria-live="assertive" id="successToast" aria-atomic="true">
          <div class="toast-header bg-transparent border-0">
            <i class="material-icons text-white me-2">
        check
      </i>
            <span class="me-auto text-white font-weight-bold"><div id = "name"><?php  ?> </div> </span>
            <small class="text-whiteme-auto text-white font-weight-bold"><div id="date"> </div></small>
            <i class="fas fa-times text-md text-white ms-3 cursor-pointer" data-bs-dismiss="toast" aria-label="Close"></i>
          </div>
          <hr class="horizontal light m-0">
          <div class="toast-body text-white" id="notif_desc">
            Hello, world! This is a notification message.
          </div>
        </div>
        </div>
		 <div class="col-md-4">   
    <div class="modal fade" id="logout" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
      <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h6 class="modal-title font-weight-normal">Your attention is required</h6>
            <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="py-3 text-center">
             
              <h4 class="text-gradient text-danger mt-4">Are you sure you want to logout?</h4>
              <p><?php echo $_SESSION['firstname'];?></p>
            </div>
          </div>
          <div class="modal-footer">
            <a type="submit" href="../inc/logout.php" class="btn btn-white">YES</a>
            <button type="button" class="btn btn-link ml-auto" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  </div>
	  <script src="https://js.pusher.com/7.2/pusher.min.js"></script>
	<script>
	   Pusher.logToConsole = true;

    var pusher = new Pusher('82e41125844fd15dbcd5', {
      cluster: 'ap1'
    });

    var channel = pusher.subscribe('my-channel');
    channel.bind('my-event', function(data) {
		         var name = (JSON.stringify(data.name));
				var notif_desc = (JSON.stringify(data.notif_desc));
var notif_date = (JSON.stringify(notif_date));				
			 $("#name").html( name );
			  $("#date").html( notif_date );
			   $("#notif_desc").html( notif_desc );
			
      $('#successToast').toast('show');
    });
	</script>