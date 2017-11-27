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
<div class="col-md-9">
<div class="well">

<?php
session_start();
$id3=$_SESSION['id1'];
include('connection.php');
$query="SELECT * from donate1";
//echo "mother fucker".$id3;

$execute=mysql_query($query);
?>




<!---------------------------------------------------DISPLAY TGHE [PRODUCTS--------------------->


 <?php 
while($row=mysql_fetch_assoc($execute))
{
	
	?>
  
  <div class=" col-md-9">
 <!----start of table-->
  <table class="table">
    <thead>
      <tr>
        <th>image</th>
        <th>code</th>
        <th>name</th>
         <th>price</th>
        <th>contact</th>
        <th>image</th>
        
        <th>area</th>
        <th>id</th>
         
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php  
echo '<img height="140" src="donate/img/'.$row['image'].'">';
     ?></td>
        <td><?php echo $row['code'];?></td>
        <td><?PHP echo $row['name'];?></td>
        <td><?php echo $row['price'];?></td>
        <td><?PHP echo $row['contact'];?></td>
        <td><?php echo $row['image'];?></td>
        <td><?PHP echo $row['area'];?></td>
        <td><?PHP echo $row['donate_id'];?></td>
        
      </tr>
      
    </tbody>
  </table>
 
    <p><a href="admin_deletepost.php?id=<?php echo $row['donate_id']?>"onclick="return confirm('ARE YOU SURE..')" class="btn btn-primary" role="button">DELETE</a> 
    <a href="admin_update.php?id=<?php echo $row['donate_id']?>" class="btn btn-success" role="button">UPDATE</a></p>
     
 
   </div>
 
 <!----------end of another------->
 

 
 <?php
    }
    ?>
  
    



<!--------------------end of products---------------------------------------------------->
        
        
        
        
        
     
  
 







</div>
</div>
</div>
</div>

<?php include('include/footer.php');?>
<?php include('include/footer1.php');?>