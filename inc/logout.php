<?php
	require_once 'dbc.inc.php';

	session_start();
	
	$_SESSION = NULL;
	$_SESSION = [];
	session_unset();
	session_destroy();
	
	echo "<script type='text/javascript'>
		alert('Logout Successfully!');
		document.location='../index.php';
	</script>";
?>