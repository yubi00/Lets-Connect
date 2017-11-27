
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
            FROM signup1
            WHERE username = '$name' AND
                  password = '$password'";
				  $query=mysql_query($sql,$connection);
				  $row=mysql_fetch_array($query);
				  $id=$row['id'];
				  $db_password=$row['password'];
				  echo $db_password;
				  echo "<br>";
				  echo "hi";
				  $_SESSION['user']=$row['username'];
				  echo $_SESSION['user'];
				 
				    $_SESSION['id1']=$id;
					echo $_SESSION['id1'];
		//print_r($execute1);
		 if($name=='admin' AND $password=='admin')
		{
			header("Location:../admin/index.php");
		}
		else if($password == $db_password)
		{
			
		
			header("Location:../index1.php");
			die("connected to database");
			
		}
		
		else
		{
			$_SESSION['msg']="Username or password incorrect";
		header("Location:../login2.php");
		}
	
	
}
else
{
	header("Location: form.php");
}

?>
