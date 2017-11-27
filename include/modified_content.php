
<!--------start of content---------------->
<div class="container">
<?php

include('connection.php');
$query="SELECT * from signup1 s inner join donate1 d on d.user_id=s.id";
//$query="select * from donate1";
$execute=mysql_query($query);
?>

<div class="container">
<div class="well" style="background-color:#D057C0;">
<div class="row">
 <?php 
while($row=mysql_fetch_assoc($execute))
{
	
	?>
  
  <div class=" col-md-4" style="background-color:#E92492;">
  
 
  
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
                    
                    
         <p> donate_by:<?php echo $row['username'] ?> </p>    
                    
                    
                   
 <a href="login2.php" class="btn btn-danger" role="button">REQUEST</a></p>
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