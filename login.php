<?php
include("connect.php");
session_start();

$Username = $_POST["Username"];
$Password = $_POST["Password"];

$login_query = "SELECT * FROM Users WHERE Username = '$Username' AND Password='$Password'";


$login_response = mysqli_query($connection, $login_query);


$row_num = mysqli_num_rows($login_response);

if($row_num == 1){
	header( "Location: http://localhost/pc2/uph.php" );
}
else{
	echo("Wrong username or password, please try again.");
}

$User_data = mysqli_fetch_array($login_response);
$User_id = $User_data["UserID"];  
$_SESSION["User"] = $User_id;

$profile_query = "SELECT * FROM profiledata WHERE UserID='$User_id'";
$profile_query_response = mysqli_query($connection, $profile_query);
$User_profile = mysqli_fetch_array($profile_query_response);
$_SESSION["Name"] = $User_profile["Name"]; 

echo $_SESSION["User"]

?>

