<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?php
session_start();
$user="";
if(isset($_SESSION['user']))
{
	$user=$_SESSION['user'];
}



?>
<h1><?php echo "Welcome ".$user  ?></h1>
<a href="logout.php">LOGOUT</a>
</body>
</html>