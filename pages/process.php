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

  $data = $name.' ' . $email;
  $pusher->trigger('my-channel', 'my-event', $data);

?>
