
<?php

define("HOST","latcs7.cs.latrobe.edu.au");
define("PASSWORD","helloworld");
define("USERNAME","18040483");
define("DB","18040483");

//mysql_connect(HOST,USERNAME,PASSWORD,DB) or die(mysql_error());
//echo("connected");
$connection=mysql_connect(HOST,USERNAME,PASSWORD,DB);

if(!$connection)
{
	die("NOT Connected....");
}
else
{
	
}
mysql_select_db(DB) or die(mysql_error());


?>