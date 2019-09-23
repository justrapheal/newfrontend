<?php
 require 'dbcon.php';
if (isset($_REQUEST['email'])) {
  
    // strip_tags
    //ucfirst
    
    $fname = strip_tags($_REQUEST['fname']);//removes html tags
    $fname= ucfirst($strtolower($fname));
    $fname= ucfirst($strtolower($fname));

    $lname = strip_tags($_REQUEST['lname']);
    $lname= ucfirst($strtolower($lname));
    $email = $_REQUEST['email'];
    if(filter_var($enail, FILTER_VALIDATE_EMAIL)) /* removes illegal characters from your email*/
    {

    }
    else{
        die('wrong email format ');
    }
    $phone = $_REQUEST['phoneNumber'];
    $gender = $_REQUEST['gender'];

    $date = date("Y-m-d"); 
  
//sha1($_REQUEST['myPassword']); for harshing pass but its outdated and not too secured
    $password =  strip_tags($_REQUEST['password']);
    
    
    $picture = $_FILES['picture']['name'];
   
    $sql = "SELECT * FROM patienttb WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    $count = mysqli_num_rows($result);
    if($count == 1){
        die("a user already exist");
        
    }
     $query = "INSERT INTO `patienttb` (FirstName,LastName,PhoneNumber,email,Images,Pwd,gender) VALUES('$fname', '$lname', '$phone', '$email','$picture','$password','$gender')";
     $uploadfile = $_FILES["picture"] ["tmp_name"];
     $target = "images/".basename ($picture);
     move_uploaded_file($uploadfile,$target);
     $result = mysqli_query($conn,$query);
     if($result){
        $msg = "you have successfully registered";
        echo $msg; 
    }
    else{
        echo "error".$SQL.mysqli_error($db);
    }
     
   
}
?>