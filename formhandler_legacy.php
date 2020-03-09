<?php
include("homepage.php");

echo $_POST["name"];
echo"<br>";
echo $_POST["password"];
echo "<br>";

$name = $_POST["name"];
$password = $_POST["password"];


$query = "SELECT name FROM Users WHERE name = '$name' AND password='$password'";

$response = mysqli_query($connection, $query);

$row = mysqli_fetch_array($response, MYSQLI_ASSOC);

$count = mysqli_num_rows($response);

if($count > 0){
	echo("Welcome, you've logged in successfully!");
}
else{
	echo("Error, wrong name or password");
}

/*
if(mysqli_query($connection, $query)){
	echo("Welcome $name");
}
else{
	echo("Error, wrong name or password");
}
*/
?>