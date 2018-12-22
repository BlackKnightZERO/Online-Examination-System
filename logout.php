<?php include_once('connection.php'); ?>

<?php

	
	session_start();

	// remove all session variables
	session_unset();

	// destroy the session
	session_destroy(); 


	header('location: sign_up_log_in.php');
	exit;




?>