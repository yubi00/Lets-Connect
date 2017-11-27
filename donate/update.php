<?php

include('../connection.php');

if(isset($_GET['id']))
{
	$id=$_GET['id'];
	echo $id;
	
	$query="SELECT * FROM donate where id=$id";
	$run=mysql_query($query);
	
	if(!$run)
	{
		die("Could not select $id");
	}
	else
	{
		echo "hello";
	}
	$fetch_row=mysql_fetch_assoc($run);
	
	
}


?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<style>
.read
{
	padding:20px;
	background:red;
	width:500px;
	color:white;
}

</style>

<body>
<h1>UPDATE</h1>
<!------------------update form--------------------------->



<
<form action="update_action.php?id=<?php echo $id ?>" method="post" enctype="multipart/form-data">
	
    Name:<br/>
    <input type="text" name="txt_name" value="<?php echo $fetch_row['name'] ?>"/><br/>
    
    Gender:<br/>
    <input  <?php echo ($fetch_row['gender']=="male")?"checked":""; ?> type="radio" name="txt_gender" value="male" />Male<br/>
    
    <input <?php echo ($fetch_row['gender']=="female")?"checked":""; ?> type="radio" name="txt_gender" value="female" />Female<br/>
    
    Upload:<br/>
    <input type="file" name="file" /><img src="img/<?php echo $fetch_row['image'] ?>" height="30" /><br/>
    Choose:<br/>
    <select name="txt_code">
    	<option value="+977" <?php echo ($fetch_row['country_code']=="+977")?"selected":"" ?>>Nepal +977</option>
    	<option value="+044" <?php echo ($fetch_row['country_code']=="+044")?"selected":"" ?>>UK +044</option>
    	<option value="+001" <?php echo ($fetch_row['country_code']=="+001")?"selected":"" ?>>US +001</option>
    	<option value="+061" <?php echo ($fetch_row['country_code']=="+061")?"selected":"" ?>>Australia +061</option>
    </select><br />
    
    Content<br />
    <textarea name="txt_content" ><?php echo $fetch_row['content'] ?></textarea><br/>
    
    <input type="submit"  name="btn_update" value="Update.."/>
    
</form>




</body>
</html>