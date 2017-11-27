<?php require_once("adminsession.php"); ?>
<?php require_once("db_connection.php"); ?>
<?php confirm_logged_in(); ?>


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
	
				$user = $_SESSION['admin_username'];
				if(isset($user))
				{
					echo "<h4> Hello! ". $user. "</h4>";
				}
			?>
			<a href="admin_logout.php">logout</a>
		</header>

		<div class="w3-container w3-text-black">
			<h3>MANAGE USERS</h3>
			<table class="w3-table w3-striped w3-border">
			<thead>
			<tr class="w3-red">
			  <th>Image</th>
			  <th>Name</th>
			  <th>Address</th>
			   <th>Gender</th>
			  <th>Delete user</th>
			 
			</tr>
			</thead>
		  
		  <?php
				//retrieving clients information from a database
				$result_array = mysql_query("SELECT * FROM signup1");
				if(!result_array)
				{
					die("query failed");
				}
			
				while($row=mysql_fetch_array($result_array))
				{
					$id = $row['id'];
					echo "<tr>";
					echo "<td>";
					echo '<img height="300" width="400" src="../signup/img/'.$row['image'].'">';
					echo "</td>";
					echo "<td>".$row['username'];
					echo "</td>";
					echo "<td>".$row['address'];
					echo "</td>";
					echo "<td>".$row['gender'];
					echo "</td>";
					echo "<td>";
					
				?>
					

					<a href="edit_user.php?id=<?php echo$row['id']?>"onclick="return confirm('Are you sure you want to delete this user?')"><button class="w3-btn w3-teal">Delete</button></a>			
			<?php	
                    echo "</a>";
					echo "</td>";
					echo "</tr>";
		
					
				}
				
				
				
			?>	
		  
		  
		  
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
