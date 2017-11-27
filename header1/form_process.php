
<?php
include('../connection.php');
session_start();

if(isset($_POST['btn_submit']))
{
	$name=$_POST['txt_name'];
	$password=$_POST['txt_password'];
	echo "<br>".($name);
	echo "<br>".($password);
	echo "<br>";
	/*
	$query="INSERT INTO login(username,password) values('$name','$password')";
	$execute=mysql_query($query);
	if(!$execute)
	{
	die("could not insert data");	
	}
	else
	{
		echo("data inserted");
		print_r ($execute);
	}
	*/
	
	$sql=  "SELECT *
            FROM CUSTOMER
            WHERE username = '$name' AND
                  password = '$password'";
				  $query=mysql_query($sql,$connection);
				  $row=mysql_fetch_array($query);
				  $id=$row['id'];
				  $db_password=$row['password'];
				  echo $db_password;
				  
		//print_r($execute1);
		if($password == $db_password)
		{
			header("Location:login_success.php");
			die("connected to database");
			
		}
		else
		{
			echo("sorry");
		}
	
	/*
	
	if($name!=&& $_POST['txt_password']!="mi")
	{
		$_SESSION['msg']="Username or password incorrect";
		header("Location: form.php");
	}
	else//if correct..
	{
		$_SESSION['user']=$_POST['txt_name'];
		header("Location: login_success.php");
	}
	*/
}
else
{
	header("Location: form.php");
}

?>
