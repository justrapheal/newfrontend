<?php
include 'dbcon.php';
session_start();
$myusername = $_SESSION['signed_in'];
$query = "SELECT * FROM patienttb WHERE email = '$myusername' ";
$sql = mysqli_query($conn, $query);

$row = mysqli_fetch_array($sql,MYSQLI_ASSOC);
$fname = $row['FirstName'];
$lname = $row['LastName'];
$phone = $row['PhoneNumber'];
$email = $row['email'];
$pictures = "<img src= 'images/".$row['picture']."alt=images'>";
$password = $row['Pwd'];
$gender = $row['gender'];
$firstname = $row['firstname'];
if (!isset($_SESSION['signed_in'])){
    header("location:register.php");
}
?>