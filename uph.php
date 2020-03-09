<?php session_start(); 
include("connect.php");

$uph_id = $_SESSION['User'];

$profile_query = "SELECT * FROM profiledata WHERE UserID = '$uph_id'";
$profile_query_response = mysqli_query($connection, $profile_query);
$User_profile = mysqli_fetch_array($profile_query_response);



?>
<iDOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="mystyle.css">
<script type="text/javascript" src="scripts.js"></script>
</head>
<body>
<div id="formo"></div>
<div>Welcome <?php echo $_SESSION["Name"];?><br></div>
<div id="name">Name: <?php echo $User_profile["Name"]; ?><br></div>
<div id="surname">Surname:<?php echo $User_profile["Surname"]; ?><br></div>
<div id="DOB">Date of Birth: <?php echo $User_profile["DOB"]; ?><br></div>
<input id="CPB" type="submit" value="Update Profile" onclick="profilestatus()">
<div id="formc"></div>


<div id="logout"><form action="logout.php"><input type="submit" value="Logout"></form></div>
</body>
</html>