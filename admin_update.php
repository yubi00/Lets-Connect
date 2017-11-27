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
    <li><a href="#">manage post:   <span class="glyphicon glyphicon-edit"></span></a></li>
  </ul>

</div>
</div>
<div class="col-md-7">
<div class="well">


<?php

include('connection.php');
echo "hi";

if(isset($_GET['id']))
{
	$id=$_GET['id'];
	echo $id;
	
	$query="SELECT * FROM donate1 where donate_id=$id";
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

<div class="donate">
<div class="container">
<div class="panel-group" style="margin-top:50px;">
<div class="panel panel-primary">
      <div class="panel-heading text-center">POST OR DONATE ITEMS</div>
      <div class="panel-body">
      <p>items details</p>
      
      
      <!-- Registration form - START -->
      <div class="col-md-5">
      <?php echo"ladpoooooo".$id; ?>
<form action="update_action.php?id=<?php echo $id ?>" method="post" enctype="multipart/form-data">
          <div class="form-group">
        <label for="sel1">Select list:</label>
        <select class="form-control" name="txt_code" id="sel1">
          <option value="book" <?php echo ($fetch_row['code']=="book")?"selected":"" ?>>books</option>
          <option value="electronics" <?php echo ($fetch_row['code']=="electronics")?"selected":"" ?>>electronics</option>
          <option value="clothes" <?php echo ($fetch_row['code']=="clothes")?"selected":"" ?>>clothes</option>
          <option value="jewelery" <?php echo ($fetch_row['code']=="jewellery")?"selected":"" ?>>jewellery</option>
        </select>
      </div>
           
               <!-- <div class="well well-sm"><strong><span class="glyphicon glyphicon-asterisk"></span>Required Field</strong></div>-->
                <div class="form-group">
                    <label for="InputName">Enter name of items</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="txt_name" id="InputName" placeholder="Enter Name of items"  value="<?php echo $fetch_row['name'] ?>"required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="InputName">Price</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="txt_price" id="price" placeholder="Enter price"  value="<?php echo $fetch_row['price'] ?>"required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
               
                 <div class="form-group">
                    <label for="InputName">Contact Number</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="txt_contact" id="InputName" placeholder="Enter contact"  value="<?php echo $fetch_row['contact'] ?>"required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                 </div><!---this is an extra div for making anothercolumn-->
                <div class="form-group">
                    <label for="file">upload</label>
                 
                     <input type="file" name="file" /><img src="donate/img/<?php echo $fetch_row['image'] ?>" height="30" /><br/>
                       
                    </div>
            
      
                
                <div class="form-group">
                    <label for="InputMessage">Desription</label>
                    <div class="input-group">
                        <textarea name="txt_area" id="InputMessage" class="form-control" rows="5" value="<?php echo $fetch_row['name'] ?>"required></textarea>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                
                
                
              
        
             
                
                
                <input type="submit" name="btn_update" id="submit" value="Submit" class="btn btn-info pull-right">
            
        </form>
        </div><!--end of col-md-5-->
        
        

<!-- Registration form - END -->


      
      
      
      </div>
    </div>
    </div>
</div><!--end of container-->




<!---------------------------------------------------ddddd------------------>
</div>
</div>
</div>
</div>
<?php include('include/footer.php');?>
<?php include('include/footer1.php');?>