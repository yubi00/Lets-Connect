<?php
include('connection.php');

session_start();
if(isset($_POST['btn_submit']))
{
	session_start();
	$code=$_POST['txt_code'];
	$name=$_POST['txt_name'];
	$price=$_POST['txt_price'];
	$contact=$_POST['txt_contact'];
	
   $file_name=$_FILES['file']['name'];
 $temp_name=$_FILES['file']['tmp_name'];

 $area=$_POST['txt_area'];
 //$id2 = $_SESSION['id1'];
 echo $name."<br>";
 echo $email."<br>";
// echo $gender."<br>";
 echo $area;
 echo "motherfucker";
 echo $id1;
 $id2= $_SESSION['id1'];
 

$query="INSERT INTO wish(code,name,price,contact,image,area,user_id) values ('$code','$name','$price','$contact','$file_name','$area','$id2')";
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
				echo'image cannot be uploaded in folder';
				}
		echo ("Data Successfully...REGISTERD...");
	header("Location:displaywish.php");
		
	}
}
else
{
	echo("is button not post");
}
?>