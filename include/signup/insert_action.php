<?php
include('../connection.php');

if(isset($_POST['btn_submit']))
{
	$name=$_POST['txt_name'];
	$email=$_POST['txt_email'];
	$address=$_POST['txt_add'];
	$lati=$_POST['lati'];
	$longi=$_POST['longi'];
	$username=$_POST['txt_username'];
	$password=$_POST['txt_password'];
	
	
	 $file_name=$_FILES['file']['name'];
 $temp_name=$_FILES['file']['tmp_name'];
 $gender=$_POST['txt_gender'];
 $area=$_POST['txt_area'];
 echo $name."<br>";
 echo $email."<br>";
 echo $gender."<br>";
 echo $area;
 

$query="INSERT INTO signup1(name,email,address,lati,longi,username,password,image,gender,area) values ('$name','$email','$address','$lati','$longi','$username','$password','$file_name','$gender','$area')";
	 $execute=mysql_query($query);
	echo $name;
	if(!$execute)
	{
		die("Could not insert the data..");
	}
	else
	{
		if(move_uploaded_file($temp_name,"img/".$file_name))
		{
			echo("image present");}
			else
			{
				echo'image cannot be uploaded in folder';}
				
				
		 echo '<script language="javascript">';
		  echo 'alert("You are registered successfully")';  //not showing an alert box.
		  echo '</script>';
		  
		  header("Location: ../index.php");

			
		
		
		
	}
}
else
{
	echo("is button not post");
}
?>