<?php require_once("adminsession.php"); ?>
<?php require_once("db_connection.php"); ?>
<?php
	//delete form processing
	
		$did=$_GET['did'];
		echo $did;
		
		if(isset($did))
		{
			$delete_data="DELETE FROM donate1 WHERE donate_id={$did} LIMIT 1";
			$delete_query= mysql_query($delete_data);
			
			
			
			if(!$delete_query)
			{
				echo "query failed";
			}
	 

	
			//if delete process successful, redirect to user page
			header("Location: manage_posts.php");
			
		
	
		}

?>