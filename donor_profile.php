<?php require_once("connection.php"); ?>


<?php include('include/link.php');?>
<?php include('include/menu.php');?>
<?php 
	session_start();
	if(!isset($_SESSION['id1']))
	{
		header("Location: login2.php");
	}
	
 ?>
<div class="container">
	
<div class="well">



<h2>About Donor </h2><br/>

<?php 
	$donor_id = $_GET['id'];
	
	$query = mysql_query("SELECT * FROM signup1 WHERE id=$donor_id LIMIT 1");
	if(!$query)
	{
		die("query failed");
	}
	
	
	if($row = mysql_fetch_array($query))
	{
		$name = $row['name'];		
		$area = $row['area'];
		 echo '<img height="100" width="100" src="signup/img/'.$row['image'].'">'; 
		 echo "<br/><br/>";
		echo "Donor Name: ". $name."</br>";
		echo "Donor Desc: ".$area."</br>";
	}



?>
<h2>Provide Feedback to this Donor </h2><br/>
<?php
	 $user_id = $_SESSION['id1'];
	 $donor_id = $_GET['id'];
	$comment = $_POST['comment'];
	
	$comment_length = strlen($comment);
	
	if($comment_length > 1000)
	{
		header("location: comment.php");
	}
	else
	{
		mysql_query("INSERT INTO donor_comment(comments,donor_id,user_id) VALUES ('$comment','$donor_id','$user_id')");
		
	}

?>

   
  



	<form action="donor_profile.php?id=<?php echo $_GET['id']; ?>" method="POST">
    
        <textarea name="comment" cols="100" rows="3"></textarea><br/>
        <input type="submit" value="Comment">
    </form>
    
     <?php
        $count_query = "SELECT donor_id, count(*) from donor_comment WHERE donor_id = $donor_id";
        $result = mysql_query($count_query);
        
        while($row=mysql_fetch_assoc($result))
        {
            $no_comment = $row['count(*)'];
            
        }
        echo "<h1>". $no_comment.  " comments</h1>";
		echo "<hr/>"
    ?>


<?php
	
	$find_comments = mysql_query("SELECT  * FROM donor_comment d,signup1 s  WHERE d.user_id = s.id AND d.donor_id=$donor_id ");
	
	while($row=mysql_fetch_assoc($find_comments))
	{
	    $username = $row['username'];	
		$comment = $row['comments'];
		
			
		echo "<table>";
        echo "<tr>";
        echo "<td rowspan=\"2\">";
		  echo '<img height="100" width="100" src="signup/img/'.$row['image'].'">'; 
          echo "</td>";
           echo "<td>";
		   echo "<h3>";
            echo " $username <br/> ";
			echo "</h3>";
            echo "</td>";
          echo "</tr>";
         
            echo "<tr>";
            echo "<td>";
              echo " </h3><br/>".$comment."<br/>";
            echo "</td>";
            echo "</tr>";
          
          echo "</table>";
		  echo "<br/>";
		  echo "<hr/>";
	}
	
	if(isset($_GET['error']))
	{
		echo "<p>1000 characters limit";
	}

?>

</div>

</div>
<div class="container"">

<?php include('include/footer.php');?>
<?php include('include/footer1.php');?>
</div>
