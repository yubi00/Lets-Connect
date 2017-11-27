
<?php
	session_start();
	
	function logged_in() {
		return isset($_SESSION['id1']);
	}
	
	function confirm_logged_in() {
		if (!logged_in()) {
			header("Location: index.php");
			exit;
		}
	}
	
	
	
	
?>

<?php confirm_logged_in(); ?>
