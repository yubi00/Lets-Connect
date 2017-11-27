<?php include('include/link.php');?>
<?php include('include/menu.php');?>
<div class="container">
<div class="row">
<div class="col-md-3">

<div class="well" >


  
  <h2>ADMIN DASHBOARD</h2>
  

  <h3>Vertical Pills</h3>
  <ul class="nav nav-pills nav-stacked">
    <li class="active"><a href="admin_viewpost.php">view post:  <span class="glyphicon glyphicon-search"></span></a></li>
    <li><a href="#">view user:   <span class="glyphicon glyphicon-grain"></span></a></li>
    <li><a href="#">manage user:  <span class="glyphicon glyphicon-hourglass"></span></a></li>
    <li><a href="admin_managepost.php">manage post:   <span class="glyphicon glyphicon-edit"></span></a></li>
  </ul>

</div>
</div>
<div class="col-md-7">
<div class="well">
<?php

include('connection.php');
$query="SELECT s.username,d.code,d.name,d.price,d.contact,d.image,d.area from signup1 s inner join donate1 d on d.user_id=s.id";
//$query="select * from donate1";
$execute=mysql_query($query);
?>
<div class="col-md-4">
<div class="container">
<div class="well">
<div class="row">
 <?php 
while($row=mysql_fetch_assoc($execute))
{
	
	?>
  
  <div class=" col-md-2">
  
 
  
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
                    
                    
                   
 <a href="include/login2.php" class="btn btn-danger" role="button">REQUEST</a></p>
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


</div>
</div>
</div>
</div>
<!--------start of content---------------->


