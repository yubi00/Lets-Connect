<?php require_once("adminsession.php"); ?>
<?php require_once("db_connection.php"); ?>
<?php require_once("functions.php"); ?>

<?php
	//edit form processing
	if(isset($_POST['submit']))
	{
		$aid = $_GET['aid'];
		$add_name = $_POST['aname'];
		$imagename=$_FILES['image']['name'];
		$targetdir = "advertisement/";
		 $target_file = $targetdir . basename($imagename);
	  
 		$temp_name=$_FILES['image']['tmp_name'];
		
		//Modifying the old records with the new one
		$edit_query = "UPDATE advertisement SET
					name= '$add_name', image='$imagename'
					WHERE aid=$aid";
					
		             
		$edit_result = mysql_query($edit_query);
		if($edit_result)
		{
			
			move_uploaded_file($temp_name, $target_file);
			echo ("Data Successfully...UPDATED...");
			redirect_to("manage_advertisement.php");
	
		}
		else
		{
			die("query failed");
		}
		
	}


?>