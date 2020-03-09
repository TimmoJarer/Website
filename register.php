<?php
include("connect.php");

$Username = $_POST["Username"];
$Password = $_POST["Password"];
$Name = $_POST["name"];
$Surname = $_POST["surname"];
$DOB = $_POST["DOB"];

$register_query = "INSERT INTO users (Username, Password) VALUES ('$Username', '$Password')";
$create_profile = "INSERT INTO profiledata (Name, Surname, DOB) VALUES('$Name','$Surname','$DOB')";

$register_response = mysqli_query($connection, $register_query);
$profile_response = mysqli_query($connection, $create_profile);

if($register_response){
	echo("Account created successfully!");
}


?>