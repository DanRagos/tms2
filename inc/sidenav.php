  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xlkl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="../inc/pages/dashboard.php" target="_blank">
        <img src="../image/icon.jpg" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">KVP Management System</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white
		  <?php  echo (basename($_SERVER['PHP_SELF'] )== "dashboard.php")?  "bg-gradient-primary active" : "";?>" href="../pages/dashboard.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white <?php  echo (basename($_SERVER['PHP_SELF'] )== "clients.php")?  "bg-gradient-primary active" : "";?>" href="../pages/clients.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Clients</span>
          </a>
        </li>
		<li class="nav-item">
         <a data-bs-toggle="collapse" href="#schedule" class="nav-link text-white <?php  echo (basename($_SERVER['PHP_SELF'] )== "schedule.php")?  "bg-gradient-primary active" : "";?>"" aria-controls="dashboardsExamples" role="button" aria-expanded="false">
<i class="material-icons-round opacity-10">date_range</i>
<span class="nav-link-text ms-2 ps-1">Schedule</span>
</a>
<div class="collapse" id="schedule" style="">
<ul class="nav ">
<li class="nav-item active">
<a class="nav-link text-white <?php  echo (basename($_SERVER['PHP_SELF'] )== "calendar.php")?  "bg-gradient-primary active" : "";?>"  href="../pages/calendar.php">
<span class="sidenav-mini-icon"> C </span>
<span class="sidenav-normal  ms-2  ps-1">Calendar</span>
</a>
</li>
<li class="nav-item ">
<a class="nav-link text-white <?php  echo (basename($_SERVER['PHP_SELF'] )== "service.php")?  "bg-gradient-primary active" : "";?>"  href="../pages/service.php">
<span class="sidenav-mini-icon"> S </span>
<span class="sidenav-normal  ms-2  ps-1"> Service Done </span>
</a>
</li>
<li class="nav-item ">
<a class="nav-link text-white <?php  echo (basename($_SERVER['PHP_SELF'] )== "pms.php")?  "bg-gradient-primary active" : "";?>"  href="../pages/pms.php">
<span class="sidenav-mini-icon"> P </span>
<span class="sidenav-normal  ms-2  ps-1"> PMS Masterlist </span>
</a>
</li>
</ul>
</div>
        </li> 	
        
        <li class="nav-item">
          <a class="nav-link text-white <?php  echo (basename($_SERVER['PHP_SELF'] )== "report.php")?  "bg-gradient-primary active" : "";?>" href="../pages/report.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">view_in_ar</i>
            </div>
            <span class="nav-link-text ms-1">Reports</span>
          </a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link text-white <?php  echo (basename($_SERVER['PHP_SELF'] )== "notifications.php")?  "bg-gradient-primary active" : "";?>"  href="../pages/notifications.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">notifications</i>
            </div>
            <span class="nav-link-text ms-1">Notifications</span>
          </a>
        </li>
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account pages</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white <?php  echo (basename($_SERVER['PHP_SELF'] )== "profile.php")?  "bg-gradient-primary active" : "";?>" href="../pages/profile.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">person</i>
            </div>
            <span class="nav-link-text ms-1">Profile</span>
          </a>
        </li>
		<?php if ($_SESSION['type'] != 'Viewer'){ ?>
		 <li class="nav-item">
          <a class="nav-link text-white <?php  echo (basename($_SERVER['PHP_SELF'] )== "users.php")?  "bg-gradient-primary active" : "";?> " href="../pages/users.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">person</i>
            </div>
            <span class="nav-link-text ms-1">Users Management</span>
          </a>
        </li>
		<?php
		}
		if (!isset($_SESSION['username'])) {
        header('Location: ../index.php');
    ?>
        <li class="nav-item">
          <a class="nav-link text-white " href="../pages/sign-in.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">login</i>
            </div>
            <span class="nav-link-text ms-1"><?php echo $username ?></span>
          </a>
        </li>
		<?php }	?>
        
      </ul>
    </div>
    <div class="sidenav-footer position-absolute w-100 bottom-0 ">
      <div class="mx-3">
        <a class="btn bg-gradient-primary mt-4 w-100" href="javascript:;" type="button">KVP Healthcare INC</a>
      </div>
    </div>
  </aside>