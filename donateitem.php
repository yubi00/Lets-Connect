
<?php include('session_fuction.php');?>

<?php

$id3=$_SESSION['id1'];
include('connection.php');
$query="SELECT * from donate1 where user_id=$id3";


$execute=mysql_query($query);
?>


<?php include('include/link.php');?>
<?php include('include/menu.php');?>

<div class="container">
<?php include('donate/donate1.php');?>
</div>
<!---------------------------------------------------DISPLAY TGHE [PRODUCTS--------------------->
<div class="container">
<div class="well">
<div class="row">
 <?php 
while($row=mysql_fetch_assoc($execute))
{
	
	?>
  
  <div class=" col-md-4">
  
 
  
    <div class="thumbnail">
   <?php  
echo '<img height="20" src="donate/img/'.$row['image'].'">';
     ?>
	  <div class="caption">
        <P>Category Name::<?php echo $row['code']."</br>";?></P>
        <p>Name of item:<?PHP echo $row['name']."</br>";?></p>
           <p>Price:$<?PHP echo $row['price']."</br>";?></p>
              <p>Contact Number:<?PHP echo $row['contact']."</br>";?></p>
                 <p>Name of product image:<?PHP echo $row['image']."</br>";?></p>
                    <p>Description:<?PHP echo $row['area']."</br>";?></p>
                    
                    
         <p> donate_id:<?php echo $row['donate_id']; ?> </p> 		 
                    
                    
                   
                    
        <p><a href="donate/delete.php?id=<?php echo $row['donate_id']?>"onclick="return confirm('ARE YOU SURE..')" class="btn btn-primary" role="button">DELETE</a> <a href="update.php?id=<?php echo $row['donate_id']?>" class="btn btn-success" role="button">UPDATE</a></p>
      </div>
       
    </div>
    
  </div>
 <?php
    }
    ?>
  </div>
    
</div><!--end of well-->
</div><!--end of container-->

<!--------------------end of products---------------------------------------------------->
        
        
        
        
        
     
  
 





<?php include('include/footer.php');?>
<?php include('include/footer1.php');?>
