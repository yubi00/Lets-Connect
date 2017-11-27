<?php require_once("adminsession.php"); ?>
<?php require_once("db_connection.php"); ?>
<?php require_once("functions.php"); ?>

<?php
	if (logged_in()) {
		redirect_to("manage_user.php");
	}
	
	include_once("form_functions.php");
	
	//starting form processing 
	
	if (isset($_POST['submit'])) { // Form has been submitted.
		$errors = array();
		
		$username = trim(mysql_prep($_POST['username']));
		$password = trim(mysql_prep($_POST['password']));
		
		
		if ( empty($errors) ) {
			// Check database to see if username and the hashed password exist there.
			$query = "SELECT id, username ";
			$query .= "FROM admin ";
			$query .= "WHERE username = '{$username}' ";
			$query .= "AND password = '{$password}' ";
			$query .= "LIMIT 1";
			$result_set = mysql_query($query);
			confirm_query($result_set);
			if (mysql_num_rows($result_set) == 1) {
				// username/password authenticated
				// and only 1 match
				$found_user = mysql_fetch_array($result_set);
				$_SESSION['admin_id'] = $found_user['id'];
				$_SESSION['admin_username'] = $found_user['username'];
				
				redirect_to("manage_user.php");
			} else {
				// username/password combo was not found in the database
				$message = "* Username/password combination is incorrect.<br />";
			}
		} else {
			if (count($errors) == 1) {
				$message = "There was 1 error in the form.";
			} else {
				$message = "There were " . count($errors) . " errors in the form.";
			}
		}
		
	} else { // Form has not been submitted.
		if (isset($_GET['logout']) && $_GET['logout'] == 1) {
			$message = "You are now logged out.";
		} 
		$username = "";
		$password = "";
	}

?>


<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <head>
        <title>signup1 Panel</title>
		
    </head>
    <body class="w3-content" style="max-width:500px" bgcolor="#003366">
		<div class="w3-container">
			<img src="image/logo.png"/>
		</div>
		
		
       <div class="w3-container w3-light-blue w3-xlarge">
			<form action="index.php" method="post">
                        <fieldset>
                            <legend>Login details:</legend>
                       <table align="center">
					   <div class="w3-container w3-medium w3-text-red">
						<?php if (!empty($message)) {echo "<p class=\"message\">" . $message . "</p>";} ?>
                	
						<?php if (!empty($errors)) { display_errors($errors); } ?>
					   </div>
                        <tr>
                            <td> <label for = 'username'>Username:</label></td><td><input name="username" maxlength="30" type="text" value="<?php echo htmlentities($username); ?>"  /> </td>
                        </tr>
                        <tr>
                            <td><label for = 'password'>Password:</label></td><td><input name="password" maxlength="30" type="password" value="<?php echo htmlentities($password); ?>" /></td>
                        </tr>
                        <tr>
                            <td></td>
                        </tr>
                        <tr>
                            <td colspan="2"><input name="submit" type="submit" value="Login" class="w3-btn"/></td>
                        </tr>
                       </table>
                       </fieldset>
                   
                 </form>
		</div>
    </body>
</html>
<?php
	if(isset($connection))
	{
		mysql_close($connection);
	}
?>