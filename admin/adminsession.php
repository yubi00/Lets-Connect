<?php
	session_start();
	
	function logged_in() {
		return isset($_SESSION['admin_id']);
	}
	
	function confirm_logged_in() {
		if (!logged_in()) {
			header("Location: ../index.php");
			exit;
		}
	}
	
	
	
	
?>

