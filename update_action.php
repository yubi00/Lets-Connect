<?php
include('connection.php');
echo("hi");


if(isset($_POST['btn_update']))
{
	
	$id=$_GET['id'];
	
	$code=$_POST['txt_code'];
	$name=$_POST['txt_name'];
	$price=$_POST['txt_price'];
	$contact=$_POST['txt_contact'];
	
   $file_name=$_FILES['file']['name'];
 $temp_name=$_FILES['file']['tmp_name'];

 $area=$_POST['txt_area'];
 echo $name."<br>";
 
 echo $area;
 //donate(code,name,price,contact,image,area) values ('$code','$name','$price','$contact','$file_name','$area')";
 
	
	
$query="UPDATE donate1 SET code='$code', name='$name',price='$price',contact='$contact',image='$file_name' ,area='$area' WHERE donate_id=$id";
	
	
	
	$execute=mysql_query($query);
	
	if(!$execute)
	{
		ECHO("Could not update the data..");
	}
	else
	{
		move_uploaded_file($tem_loc,"donate/img/".$file_name);
		echo ("Data Successfully...UPDATED...");
		header("Location:donateitem.php");
	}
	
	
}




?>