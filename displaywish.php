<?php include('include/link.php');?>
<?php include('include/menu.php');?>
<div class ="container">
<div class="well">

<!--------start of content---------------->
<div class="container">
<?php

include('connection.php');
$query="SELECT s.username,w.code,w.name,w.price,w.contact,w.image,w.area from signup1 s inner join wish w on w.user_id=s.id";
//$query="select * from donate1";
$execute=mysql_query($query);
?>

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
                    
                    
         <p>WISHED BY:<?php echo $row['username'] ?> </p>    
                    
                    
                   
 <a href="login2.php" class="btn btn-success" role="button">RESPOND TO REQUEST ITEM</a></p>
      </div>
       
    </div>
    
  </div>
 <?php
    }
    ?>
  </div>
    
</div><!--end of well-->
</div><!--end of container-->
</div>
<!--end of content--------------------------------------->
</div>
</div>

<?php /*include('include/content.php');*/?>

<?php include('include/footer.php');?>
<?php include('include/footer1.php');?>