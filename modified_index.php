<?php include('include/link.php');?>
<?php include('include/modified_menu.php');?>
<?php
session_start();



if(isset($_SESSION['user']))
{
	$user=$_SESSION['user'];
	
}
else
{
	
}



?>


<?php include('include/carousal.php');?>

<?php include('include/content1.php');?>
<?php include('include/modified_content.php');?>
<?php include('include/youtube.php');?>
<?php include('include/footer.php');?>
<?php include('include/footer1.php');?>