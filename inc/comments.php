<?php
    //Edit Comment
    function editComments($conn) {
        if (isset ($_POST['commentSubmit'])) {
        $cid= $_POST['cid'];
        $uid= $_POST['uid'];
        $date= $_POST['date'];
        $message= $_POST['message'];
    	$sql="update comments SET message= '$message', date = '$date' where cid='$cid' ";
    	$result = $conn->query($sql);
		if ($_SESSION['type']!="admin") {
                 				echo "
				<script>alert('Edited')</script>
				<script>window.location = '../user/communication.php'</script>
				";
						}
						else {
						echo "
				<script>alert('Edited')</script>
				<script>window.location = '../admin/communication.php'</script>
				";    
						}
    	
        }
    }
    //Delete Comment
    function deleteComments($conn) {
        if (isset ($_POST['commentDelete'])) {
            $cid= $_POST['cid'];
    	    $sql="delete from comments  where cid='$cid' ";
    	    $result = $conn->query($sql);
    	    header("Location:communication.php");
    	
		}
    }
    //Insert Comment
    function setComments($conn) {
        if (isset ($_POST['commentSubmit'])) {
            $uid= $_POST['uid'];
            $date = date("Y-m-d H:i:s", strtotime("+8 HOURS"));
            $message= $_POST['message'];
            $sql="insert into comments (uid, date, message) values ('$uid', '$date', '$message')";
            $result = $conn->query($sql);
            header("Location:communication.php");
        }
    }
?>