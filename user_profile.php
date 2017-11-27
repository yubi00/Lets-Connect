<?php include('include/link.php');?>
<?php include('include/menu.php');?>
<?php include('db_connection.php'); ?>
<div class="container">
<div class="row">
    <div class="col-md-12">
    	<div class="well">
                                
                <?php 
                    $user_name = $_GET['username'];
                    echo $user_id;
                    
                    $query = "SELECT d.name,d.image,s.username,s.id FROM donate1 d  JOIN signup1 s ON s.id = d.user_id AND s.username  = '$user_name'";
                    $result = mysql_query($query);
                    
                    if(!$result)
                    {
                        die("query failed");
                    }
                    
                
                    while($row = mysql_fetch_assoc($result))
                    {
                        echo '<img height="200" width="200" src="donate/img/'.$row['image'].'">';
                        $id = $row['id'];
                        echo "<br/>";
                        $item_name = $row['name'];
                        echo $item_name."<br/>";
                        echo "Donated by: <a href=\"donor_profile.php?id=<?php echo $id; ?>\">" .$row[username]."</a>";
                        echo "<br/>";
                        
                        
                    }
                
                
                
                ?>        
        </div>
     </div>
</div>
</div>
<?php include('include/footer.php');?>
<?php include('include/footer1.php');?>