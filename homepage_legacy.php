<?php
$UN = "root";
$PW = "";
$DB = "PC2";
$SN = "localhost";

$MSN = "localhost\\i1";
$conninfo = array("Database"=>"localhost");

$connection = mysqli_connect($SN,$UN,$PW,$DB);
#$connection = sqlsrv_connect($MSN,$conninfo);

if(!$connection){
	echo("Test");
}
else{
	echo("Connection established Successfully!");
}


?>

<!DOCTYPE html>
<html>
<head>
</head>
<body>
<table>
<form action="formhandler.php" method="post">
<tr>
<th>Name:</th> <th><input type="text" name="name"></th>
</tr>
<tr>
<th>Password:</th> <th><input type="password" name="password"></th><th><button>Login</button></th>
</tr>
</form>
</table>
</body>
</html>

