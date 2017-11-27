<?php require_once("adminsession.php"); ?>
<?php require_once("db_connection.php"); ?>

<?php
	//delete form processing
	
		$id=$_GET['id'];
		
		if(isset($id))
		{
			$delete_data="DELETE FROM signup1 WHERE id={$id} LIMIT 1";
			$delete_query=mysql_query($delete_data, $connection);
			//deleting corressponding records of the deleted user 
			
			$delete_posts="DELETE FROM donate1 WHERE user_d={$id} ";
			//mysql_query($delete_comments, $connection);
		 
			
			//if delete process successful, redirect to user page
			header("Location: manage_user.php");
			
		
	
		}

?>


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
			  <a href="manage_posts">Manage user posts</a>
			  <a href="manage_user.php">Manage users</a>
			  <a href="manage_advertisement.php">Manage Advertisement</a>
			  <a href="manage_themes.php">Manage themes</a>
		</nav>

		<div class="w3-main" style="margin-left:200px">
		<header class="w3-container w3-teal">
		  <span class="w3-opennav w3-xlarge w3-hide-large" onclick="w3_open()">&#9776;</span>
		  <h2>LETS CONNECT </h2>
		  <?php
				$user = $_SESSION['admin_username'];
				if(isset($user))
				{
					echo "<h4> Hello! ". $user. "</h4>";
				}
			?>
			<a href="admin_logout.php">logout</a>
		</header>

		<div class="w3-container w3-text-RED">
			<h3>UPDATE USERS</h3>
			<?php echo $id ?>
		  
		</div> 
		
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
