
<!--------start of content---------------->
<div class="container">
<?php

include('connection.php');
$query="SELECT * from advertisement";
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
  
  <div class=" col-md-3">
  
 
  

    
    
    
    
    
  
    <marquee behavior="scroll" direction="left">
   <?php  
echo '<img height="150" src="admin/advertisement/'.$row['image'].'">';
     ?>
	</marquee>
 
       

    
  </div>
 <?php
    }
    ?>
  </div>
    
</div><!--end of well-->
</div><!--end of container-->
</div>
<!--end of content--------------------------------------->