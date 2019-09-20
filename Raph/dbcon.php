<?php

$servername = "localhost";
$username = "root";
$password = "";
$db= "upliftdb";
$conn = new mysqli($servername,$username,$password,$db);
if($conn->connect_error){
    die("connection error ".connect_error);
}
echo "";

?>