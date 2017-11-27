<div class="container">
<div class="col-sm-2" >
 <a href="index.php"><img src="img/logo.png" width="200" height="100" class="img-responsive" ></a>
 

</div><!--end of container-fluid-->
<div class="col-md-10" style="background-color:white">

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
       
        <li><a href="donateitem.php">Donate item</a></li>
		<li><a href="wishitem.php">WISH ITEM <span class="glyphicon glyphicon-envelope"></span></a>
		</li>
		<li><a href="displaywish.php">View wishlist <span class="glyphicon glyphicon-envelope"></span></a>
		</li>
		<li><a href="finalmap.php">FIND ITEMS <span class="glyphicon glyphicon-envelope"></span></a>
		</li>
		<li><a href="signup.php">SIGNUP <span class="glyphicon glyphicon-envelope"></span></a>
		</li>
        <li class="dropdown">
          <a href="login2.php">LOGIN <span class="glyphicon glyphicon-envelope"></span></a>  
         </li>
		 
       <li><a href="login/logout.php">LOGOUTS<span class="glyphicon glyphicon-envelope"></span></a></li>
       <li><a href="contact_form.php">contact<span class="glyphicon glyphicon-envelope"></span></a></li>
       
       <?php
			session_start();
			$username = $_SESSION['user'];
			$sid = $_SESSION['id1'];
			
			?>
		
			<li><a href="login2.php">
			<?php 
			if(isset($sid))
			{
				echo "Welcome ".$username;
			}
			?></a></li>
		  
	
      </ul>
      <form class="navbar-form navbar-left" role="search" >
        <div class="form-group"  >
          <input type="text" class="form-control" placeholder="Search " >
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
         
      </form>
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>



</div><!--end of col-md-10-->


</div><!--end of container fluid-->