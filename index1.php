<?php include('include/link.php');?>
<?php include('include/menu.php');?>
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
<?PHP
session_start();
$user=$_SESSION['user'];
	
	?>


<?php include('include/carousal.php');?>
<?php include('include/menu1.php');?>
<?php include('include/content.php');?>
<?php include('include/youtube.php');?>
<?php include('include/footer.php');?>
<?php include('include/footer1.php');?>