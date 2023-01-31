<?php
require '../vendor/autoload.php';


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
$query= "INSERT INTO `notification` (`notif_id`, `notif_user`, `notif_name`, `notif_desc`, `notif_date`) VALUES (' ', '$notif_user', '$notif_name','$notif_desc','$notif_date')";
						$result=$conn->query($query);
						$conn->close();

  $data = array(
  'notif_user' => $notif_user,
  'name' => $notif_name,
  'notif_desc' => $notif_desc,
  'notif_date' => $notif_date,
  
  );
  $pusher->trigger('my-channel', 'my-event', $data);
 
?>