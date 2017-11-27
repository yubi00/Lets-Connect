
<?php require_once("db_connection.php"); ?>
<?php require_once("adminsession.php"); ?>
<?php require_once("functions.php"); ?>
<?php confirm_logged_in(); ?>


<?php
	//delete form processing
	
		$aid=$_GET['aid'];
		
		if(isset($aid))
		{
			$delete_data="DELETE FROM advertisement WHERE aid={$aid} LIMIT 1";
			$delete_query= mysql_query($delete_data, $connection);
	 

	
			//if delete process successful, redirect to user page
			header("Location: manage_advertisement.php");
			
		
	
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
				echo "<h4> Hello! ". $user. "</h4>";
			?>
			<a href="admin_logout.php">logout</a>
		</header>

			<div class="w3-container w3-blue">
            <h2>Add advertisement</h2>
            </div>
            
            <form  method="POST" enctype="multipart/form-data" class="w3-container w3-border w3-padding w3-border" action="add_advertisement.php">
            
            <p>
            <label>Advertisement Name</label>
            <input class="w3-input w3-border w3-validate" type="text" name="aname"></p><br/>
            
            <p>
            <label>Upload picture </label><br/><br/>
            <input type="file" name="image" class="w3-input w3-border"><br/><br/>
            <Button type="submit" class="w3-btn w3-teal" name="submit" >submit</Button>
           
            <p>
            
              
            
            </form>
           
           	<div>
            	<table class="w3-table w3-striped w3-border">
			<thead>
			<tr class="w3-red">
			  <th>Id</th>
			  <th>Image</th>
			  <th>Name</th>
			   <th>Update ad</th>
			  <th>Delete ad</th>
			 
			</tr>
			</thead>
            
             <?php
				//retrieving clients information from a database
				$result_array = mysql_query("SELECT * FROM advertisement");
				if(!result_array)
				{
					die("query failed");
				}
			
				while($row=mysql_fetch_array($result_array))
				{
					$id = $row['id'];
					echo "<tr>";
					echo "<td>".$row['aid'];
					echo "</td>";
					echo "<td>";
					echo '<img height="300" width="400" src="advertisement/'.$row['image'].'">';
					echo "</td>";
					
					echo "<td>".$row['name'];
					echo "</td>";
					
				
					echo "<td>";
                    
					
				?>
					<a href="update_advertisement.php?aid=<?php echo$row['aid']?>"><button class="w3-btn w3-teal">Update</button></a>	
                    </td>
					<td>
                    
					<a href="delete_advertisement.php?aid=<?php echo$row['aid']?>"onclick="return confirm('Are you sure you want to delete this user?')"><button class="w3-btn w3-teal">Delete</button></a>			
			<?php	
                    echo "</a>";
					echo "</td>";
					echo "</tr>";
		
					
				}
				
				
				
			?>	
		  </table>
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
