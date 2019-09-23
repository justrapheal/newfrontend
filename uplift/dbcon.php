<?php
// $timezone = date_default_timezone_set("Africa/Abuja");
$servername = "localhost";
$username = "root";
$password = "";
$db= "come";
$conn = new mysqli($servername,$username,$password,$db);
if($conn->connect_error){
    die("connection error ".connect_error);
}
echo "ok";
?>