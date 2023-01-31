<?php
  require '../vendor/autoload.php';
    require '../inc/dbc.inc.php';

  $options = array(
    'cluster' => 'ap1',
    'useTLS' => true
  );
  $pusher = new Pusher\Pusher(
    '82e41125844fd15dbcd5',
    '346f4f64ad0e6fa47f96',
    '1489115',
    $options
  );
  $date = date("Y-m-d");
  $name = $_POST['name'];
    $email = $_POST['email'];
$query= "INSERT INTO `notification` (`notif_id`, `notif_desc`, `notif_date`) VALUES (' ', '$name', '$date')";
						$result=$conn->query($query);
						$conn->close();

  $data = array(
  'name' => $name,
  'email' => $email
  );
  $pusher->trigger('my-channel', 'my-event', $data);

?>

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

  <form  method="post">
  <div class="form-group">
    <label for="email"> Name:</label>
    <input type="text" class="form-control" name="name">
  </div>
  <div class="form-group">
    <label for="pwd">Email:</label>
    <input type="text" class="form-control" name="email">
  </div>
  <div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
</body>
<script src="../assets/js/core/jquery-3.6.0.min.js"></script>
  <script src="../assets/js/core/jquery-3.6.0.js"></script>-
  <script src="https://js.pusher.com/7.2/pusher.min.js"></script>
  
  <script>

    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('82e41125844fd15dbcd5', {
      cluster: 'ap1'
    });

    var channel = pusher.subscribe('my-channel');
    channel.bind('my-event', function(data) {
      alert(JSON.stringify(data));
    });
  </script>


</body>