<?php 
require '../inc/dbc.inc.php';
require '../pages/pajax.php' ;?>

<!DOCTYPE html>
<head>
  <title>Pusher Test</title>
  <body> 
  <h1>Pusher Test</h1>
  <p>
    Try publishing an event to channel <code>my-channel</code>
    with event name <code>my-event</code>.
  </p>
  <h2> Inset </h2> 
<?php 
	  $mysql = mysqli_query($conn, "Select * from notification");
?>
  <table class="table table-condensed">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody id= "result"> 

  
    
    </tbody>
  </table>

</body>

<script>

</script>

