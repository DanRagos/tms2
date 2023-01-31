<?php 
require '../inc/dbc.inc.php'?> 
<?php 
	  $mysql = mysqli_query($conn, "Select * from notification");
?>
  <?php 
  while($row = mysqli_fetch_array($mysql)){	?>
  <tr>
    <td><?php echo $row['notif_id']?></td>
    <td><?php echo $row['notif_id']?></td>
    <td><?php echo $row['notif_id']?></td>
  </tr>
  <?php }?>
  <script src="../assets/js/core/jquery-3.6.0.min.js"></script>
  <script src="../assets/js/core/jquery-3.6.0.js"></script>
  <script src="https://js.pusher.com/7.2/pusher.min.js"></script>
 
  <script>

    // Enable pusher logging - don't include this in production
 
	 $.ajax({url: "pajax.php", success: function(result){
    $("#result").html(result);
  }});
  </script>