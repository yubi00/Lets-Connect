
<?php
session_start();

if(isset($_SESSION['msg']))
{
	$message=$_SESSION['msg'];
}

?>

<h3 class="col-md-12 text-center">login</h3>
    <div class="container">
    <form action="login/form_process.php" method="post">
<div class="col-md-6 col-md-offset-3"><div class="well">
<div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user
glyphicon "></i></span>
  
  <input type="text" name="txt_name" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
</div>
</br>
<div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user
glyphicon "></i></span>
  
  <input type="password" name="txt_password" class="form-control" placeholder="Password" aria-describedby="basic-addon1">
</div>
<div class="text-center form-group">
</br>
<button type="submit" name="btn_submit" class="btn btn-primary btn-block">Sign in</button>or
<a href="signup.php">SignUp</a>
</div>

</div>
</div>
</form>
<?php 
session_destroy();
?>
