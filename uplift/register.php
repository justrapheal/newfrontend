<?php
session_start();
require 'dbcon.php';




$fname = '';
$lname = '';
$email = '';
$email2 = '';
$password = '';
$password2 = '';
$date = '';
$fname = '';
$error_arry = array();


if(isset($_POST['subm'])){
$fname = strip_tags($_POST['fname']);//removes html tags
$fname= ucfirst(strtolower($fname));
$_SESSION['reg_fname'] = $fname;
$lname = strip_tags($_POST['lname']);
$lname= ucfirst(strtolower($lname));
$_SESSION['reg_lname'] = $lname;

$email = $_POST['email'];
$_SESSION['reg_email'] = $email;
$email2 = $_POST['email2'];
$_SESSION['reg_email2'] = $email2;

$password =strip_tags($_POST['password']);
$password2 = strip_tags($_POST['password2']);

$date = date("Y-m-d"); 
if($email == $email2){
echo 'ok';
if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    $email= filter_var($email,FILTER_VALIDATE_EMAIL);

    $emailcheck = "SELECT * FROM users WHERE email= '$email'";
    $emailsql = mysqli_query($conn,$emailcheck);
    $emailrow = mysqli_num_rows($emailsql);

    if($emailrow > 0){
        echo 'email already extis';
    } 
}
else{
    echo 'invalid email format';
}

}

else{
    echo 'email dont match';
}

if(strlen($fname) > 25 || strlen($fname ) < 2 ){
    echo 'fname too long or too short';
}
if(strlen($lname)> 25 || strlen($lname ) < 2 ){
    echo 'lname too long or too short';
}
if($password != $password2){
    echo 'email and password dont match';
}
else{
    if(preg_match('/[^A-Za-z0-9]/',$password)){
        array_push($error_arry,'your password can only contain english characters or num');
    }
}
if(strlen($password > 25 || strlen($password) < 5)){
    echo 'your password is too short or more than 25 characters';
}
if(!empty($password)){
    // $password = md5($password);
    //default profile
    $profile_pic = "images/default/default.png";
    $query = mysqli_query($conn, "INSERT INTO `users`(id,FirstName,LastName,PhoneNumber,email,images,Pwd,gender,signUpDate,num_post,num_likes,user_close,friend_array) VALUES( '7','$fname', '$lname', 'come', '$email', '$profile_pic', '$password', 'female', '$date', '0', '0', 'no', ',')");

}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="register.php" method="POST" enctype="multipart/form-data">
    
    <input type="text" name="fname" placeholder="fname" value= "<?php if(isset($_SESSION['reg_fname'])){
       echo $_SESSION['reg_fname'];
    }?>"requiered><br>
    <input type="text" name="lname"placeholder="name"requiered value= "<?php if(isset($_SESSION['reg_lname'])){
       echo $_SESSION['reg_lname'];
    }?>"><br>
    <input type="text" name="email"placeholder="email"requiered value= "<?php if(isset($_SESSION['reg_email'])){
       echo $_SESSION['reg_email'];
    }?>"><br>
    <input type="text" name="email2"placeholder="email"requiered value= "<?php if(isset($_SESSION['reg_email2'])){
       echo $_SESSION['reg_email2'];
    }?>" > <br>
    <input type="text" name="password"requiered><br>
    <input type="text" name="password2"requiered><br>
    <button type="submit" name="subm" > submit </button> <br>
   
    
    </form>
</body>
</html>