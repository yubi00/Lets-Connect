<html>
<head>
<title>
</title>
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css"/>
<link href="../css/font-awesome.css" rel="stylesheet" type="text/css"/>
<link href="../css/style1.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript"  src="../js/jquery-1.11.2.js"></script>
<script type="text/javascript" src="../js/bootstrap.js"></script>
</head>
<body>
<?php
session_start();
$message="";
if(isset($_SESSION['msg']))
{
	$message=$_SESSION['msg'];
}

?>
<h3><?php echo $message; ?></h3>
<h3 class="col-md-12 text-center">login</h3>
    <div class="container">
    <form action="form_process.php" method="post">
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
  
  <input type="text" name="txt_password" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
</div>
<div class="text-center form-group">
</br>
<button type="submit" name="btn_submit" class="btn btn-primary btn-block">Sign in</button>or
<a href="#">SignUp</a>
</div>

</div>
</div>
</form>
<?php 
session_destroy();
?>
    </div>
<div class="container">
    <div class="well">
        <p class="text-center">
    <button class="btn btn-default" data-toggle="modal" data-target="#loginModal">Login</button>
</p>

<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h5 class="modal-title">Login</h5>
            </div>

            <div class="modal-body">
                <!-- The form is placed inside the body of modal -->
                <form id="loginForm" method="post" class="form-horizontal">
                    <div class="form-group">
                        <label class="col-xs-3 control-label">Username</label>
                        <div class="col-xs-5">
                            <input type="text" class="form-control" name="username" placeholder="username"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-xs-3 control-label">Password</label>
                        <div class="col-xs-5">
                            <input type="password" class="form-control" name="password" placeholder="password" />
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-5 col-xs-offset-3">
                            <button type="submit" class="btn btn-primary">Login</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


        
    </div>
</div>
</body>
</html>