<?php require_once("db_connection.php"); ?>
<?php require_once("adminsession.php"); ?>
<?php require_once("functions.php"); ?>



<?php
	 $user_id = $_SESSION['id1'];
	 if(isset($_SESSION['id1']))
		{
			 echo $id."session id";
		}
	
	  
	 $donor_id = $_GET['donor_id'];
	 echo "lamo". $donor_id;
	 echo $donor_id."get id";
	$comment = $_POST['comment'];
	
	$comment_length = strlen($comment);
		
		//insert query
		$query = mysql_query("INSERT INTO donor_comment(comments, donor_id, user_id) VALUES ('$comment','$donor_id','$user_id')");
		
		if(!query)
		{
			die("insert query failed");
		}
		else
		{
			echo "query succeed" ;

				
?>	
 <a href="donor_profile.php?id=<?php echo $donor_id ?>"onclick="return confirm('ARE YOU SURE..')" role="button">COMMENTS.PHP</a> 				
		<?php
        }
?>
				
