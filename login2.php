<?php include('include/link.php');?>
<?php include('include/menu.php');?>

<div class="container" style="height:300px;">
<?php
session_start();

if(isset($_SESSION['msg']))
{
	$message=$_SESSION['msg'];
}

?>
<h3 style="color:red; margin-left:300px;"><?php echo $message; ?></h3>
<?php include('login/form.php');?>
</div>



<?php include('include/footer.php');?>
<?php include('include/footer1.php');?>