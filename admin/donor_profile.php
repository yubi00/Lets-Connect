<?php require_once("db_connection.php"); ?>
<?php require_once("adminsession.php"); ?>
<?php require_once("functions.php"); ?>



<?php 
		if(isset($_SESSION['user']))
		{
			echo "Welcome ".$_SESSION['user'];
		}
		else
		{
			redirect_to("../index.php");
		}
		echo "<br/>";
		$donor_id = $_GET['donor_id'];
		echo $donor_id. "</br>";

		$query = "SELECT * FROM signup1 WHERE id=$donor_id";
		
		$result = mysql_query($query);
		if(!result)
		{
			die("query failed");
		}
		
		while($row=mysql_fetch_assoc($result))
		{
			
			echo "Donor name: ".$row['name'];
			echo "<br/>";
			
			echo"Donor email: " .$row['email'];
			echo "<br/>";
			
			echo"Donor Address: " .$row['address'];
			echo "<br/>";
			
			echo"About Donor: </br> " .$row['description'];
			echo "<br/>";
		}
		
		
		

?>



<html>
<head>
<meta charset="utf-8">
<title>Commen Sectiont</title>
</head>

<body>
	
	<form action="comment_process.php" method="post" enctype="multipart/form-data">
    
        <textarea name="comment" cols="100" rows="3">Post your comment here....</textarea><br/>
       <!-- <input type="submit" value="Comment" name="submit">-->
    </form>
    
     <?php
        $count_query = "SELECT count(*) from donor_comment";
        $result = mysql_query($count_query);
        
        while($row=mysql_fetch_assoc($result))
        {
            $no_comment = $row['count(*)'];
            
        }
        echo "<h1>". $no_comment.  " comments</h1>";
		$donor_id = $_GET['donor_id'];
		echo "hi man".$donor_id ;
		
    ?>
    
    <p><a href="comment_process.php?id=<?php echo $donor_id?>"onclick="return confirm('ARE YOU SURE..')" >comment please</a>
</body>
</html>




