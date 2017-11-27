<?php require_once("adminsession.php"); ?>
<?php require_once("db_connection.php"); ?>
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