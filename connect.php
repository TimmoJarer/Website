<?php
$UN = "root";
$PW = "";
$DB = "PC2";
$SN= "localhost";

$connection = mysqli_connect($SN,$UN,$PW,$DB);

if(!$connection){
	echo("Error! Could not connect to database.");
}

?>