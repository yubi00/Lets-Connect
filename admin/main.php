<?php session_destroy(); ?>
<?php require_once("adminsession.php"); ?>
<?php require_once("db_connection.php"); ?>


<html>
	<head>
		<title>Admin Panel</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
	</head>
	<body>
		<nav class="w3-sidenav w3-collapse w3-white w3-card-2 w3-animate-left" style="width:200px;">
			<a href="javascript:void(0)" onclick="w3_close()" 
			  class="w3-closenav w3-large w3-hide-large">Close &times;</a>
			  <a href="manage_posts.php">Manage user posts</a>
			  <a href="manage_user.php">Manage users</a>
			  <a href="manage_advertisement.php">Manage Advertisement</a>
			  <a href="manage_themes.php">Manage themes</a>
		</nav>

		<div class="w3-main" style="margin-left:200px">
		<header class="w3-container w3-teal">
		  <span class="w3-opennav w3-xlarge w3-hide-large" onclick="w3_open()">&#9776;</span>
		  <h2>LETS CONNECT </h2>
		  <?php
				$user = $_SESSION['username'];
				echo "<h4> Hello! ". $user. "</h4>";
			?>
			<a href="admin_logout.php"><button class="w3-btn">logout</button></a>
		</header>

		<div class="w3-container w3-text-black">
			<h3>ADMIN DASH BOARD</h3>
		  
		  
		  
		  
		  
		</div>

		<footer class="w3-container w3-teal">
		  <h5>Footer</h5>
		  <p>Footer information goes here</p>
		</footer>
			 
		</div>

		<script>
		function w3_open() {
			document.getElementsByClassName("w3-sidenav")[0].style.display = "block";
		}
		function w3_close() {
			document.getElementsByClassName("w3-sidenav")[0].style.display = "none";
		}
		</script>
     
     
	</body>
</html>
<?php
	if(isset($connection))
	{
		mysql_close($connection);
	}
?>
