<?php 
session_start();
include("connect.php");
session_destroy();
header("location: http://localhost/pc2/homepage.php");

?>