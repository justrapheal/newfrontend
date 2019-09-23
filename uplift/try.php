
<?php require 'dbcon.php';
if(isset($_POST['name'])){
$name = $_POST['name'];
$sql = "INSERT INTO `student` VALUES('4','$name')";

$query = mysqli_query($conn,$sql);
if($query){
    echo 'good';
}
else{
    echo 'error';
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
<form action="try.php" method="POST">
    <input type="text" name="name">
    <input type="submit" value="button" name="sub">
    </form>
</body>
</html>