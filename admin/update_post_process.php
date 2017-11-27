<?php require_once("adminsession.php"); ?>
<?php require_once("db_connection.php"); ?>
<?php require_once("functions.php"); ?>

<?php
	//edit form processing
	if(isset($_POST['submit']))
	{
		$did = $_GET['did'];
		$item_name = $_POST['item_name'];
		$item_desc = $_POST['item_desc'];
		$imagename=$_FILES['image']['name'];
		$targetdir = "../donate/img/";
		 $target_file = $targetdir . basename($imagename);
	  
 		$temp_name=$_FILES['image']['tmp_name'];
		
		//Modifying the old records with the new one
		$edit_query = "UPDATE donate1 SET
					name= '$item_name', image='$imagename', area='$item_desc'
					WHERE donate_id=$did";
					
		             
		$edit_result = mysql_query($edit_query);
		if($edit_result)
		{
			
			move_uploaded_file($temp_name, $target_file);
			echo ("Data Successfully...UPDATED...");
			redirect_to("manage_posts.php");
	
		}
		else
		{
			die("query failed");
		}
		
	}


?>