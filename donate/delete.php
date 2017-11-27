<?php
include('../connection.php');
if(isset($_GET['id']))
{
	$id=$_GET['id'];
	
	$query="DELETE FROM donate1 where donate_id=$id ";
	echo $id;
	
	$run=mysql_query($query);
	
	if(!$run)
	{
		die("Could not delete...");
	}
	else
	{
		echo("$id has been deleted suceufully");
			header("Location:../donateitem.php");
}

	
}

?>