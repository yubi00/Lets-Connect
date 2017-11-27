<?php require_once("adminsession.php"); ?>
<?php require_once("db_connection.php"); ?>
<?php require_once("functions.php"); ?>


<?php
//insert form processing
	if(isset($_POST['submit']))
	{
		$add_name = $_POST['aname'];
		$targetdir = "advertisement/";
        $uploadOK = 1;
        $filesize = 2000000;
        $imagename=$_FILES['image']['name'];
        $target_file = $targetdir . basename($imagename);
        $imagefiletype = pathinfo($target_file,PATHINFO_EXTENSION);
        $tempimage=$_FILES['image']['tmp_name'];
		
		
		
		
        //CHECKS IF IMAGE FILE IS AN ACTUAL IMAGE OR FAKE IMAGE
        
		$check = getimagesize($tempimage);
		
		if($check == false)
		{
			echo "File is not an image <br/>";
			redirect_to("manage_advertisement.php");
			$uploadOK = 0;
		}
		else
		{	
				$uploadOK = 1;
			
        }
		//check if file already exists
		if(file_exists($targetfile))
		{
			echo "Sorry, file already exists.";
				redirect_to("manage_advertisement.php");
			$uploadOK = 0;
		}
		
		//check file size
		if($_FILES["image"]["size"] > $filesize)
		{
			echo "Sorry, your file too large";
			$uploadOK = 0;
		}
		//allow for certain file formats
		//allows for certian image formats
			if($imagefiletype != "jpg" && $imagefiletype != "JPG" && $imagefileType != "png" && $imagefiletype != "PNG" && $imagefiletype != "jpeg"
			&& $imagefiletype != "gif" ) 
            {
				echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed. </br/>";
					redirect_to("manage_advertisement.php");
				$uploadOk = 0;
			}
		//if everything is OK, try to upload file
		if($uploadOK == 0)
		{
			echo "sorry, your file was not uploaded <br/>";
				redirect_to("manage_advertisement.php");
		}
		else
		{
			 if (move_uploaded_file($tempimage, $target_file)) 
			{
				//echo "The file ". basename($imagename). " has been uploaded.";
                    
                 //if everythin is okay, store the client record to the database including the file name of image uploaded
                $query = "INSERT INTO advertisement(name,image)
                VALUES('$add_name','$imagename') ";
                $result = mysql_query($query);    
                if(!$result)
                {
                   echo "Failed to insert data to the database";
                }
                else
                {
                    echo "You are registered successfully <br/>";
					redirect_to("manage_advertisement.php");


                }
                 
			} 
			else 
			{
				echo "Sorry, there was an error uploading your file.";
				
			}
		}        
   
	}   
	
?>
<?php
	if(isset($connection))
	{
		mysql_close($connection);
	}
?>

