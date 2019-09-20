<?php 
session_start();
require 'dbcon.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <link rel="stylesheet" href="login.css">
    
</head>
<body>

    <div class="container">
      <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
          <div class="card card-signin my-5">
            <div class="card-body">
              <h5 class="card-title text-center">Sign In</h5>
              <form class="form-signin" method="POST">
                <div class="form-label-group">

                  <!-- email -->
                        <label for="Email">Email address:</label>
                        
                  <input type="email" id="Email" name="email" class="form-control email" placeholder="Email address" required autofocus>
                 
                  
                </div>
                <!-- Password -->


                
                <label for="inputPassword">Password:</label>

                <div class="form-label-group">
                <article class=" input-group-append">
                  <input type="password" id="inputPassword" name="Pwd" class="form-control password" placeholder="Password" required>
                  <span class="btn btn-sm  btn-light input-group-text hide">Show</span>
                  </article>
                </div>

                

                <!-- sign up -->
                <button class="btn btn-lg btn-dark btn-block text-uppercase submit butto" type="submit" disabled="true">Sign in</button>

                <!-- forgot password -->
                <div class="text-center text-primary mt-2"> <a href="register.php">Already A Member ?</a> </div>
                <br class="my-4">
                <div class="text-center text-primary mt-2"> <a href="forgot.php">Forgot password ?</a> </div>
                <hr class="my-4">
                

                <!-- Google -->
                <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><a href="gmail.com"><i class="fab fa-google mr-2"></i> Sign in with Google</a></button>
                
                <!-- facebook -->
                <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"> <a href="facebook.com"><i class="fab fa-facebook-f mr-2"></i> Sign in with Facebook</a></button>
              
                <?php
                
                if($_SERVER["REQUEST_METHOD"]=="POST"){
                    $email = $_POST['email'];

                    $password = $_POST['Pwd'];

                    $msg = array();

                    $email = mysqli_real_escape_string($conn,$email);
                    $password = mysqli_real_escape_string($conn,$password);

                    $sql = "SELECT * FROM patienttb WHERE email ='$email' AND Pwd ='$password'";
                    $result = mysqli_query($conn,$sql);

                    $row = mysqli_fetch_array($result);
                    $count = mysqli_num_rows($result);
                    if($count == 1){
                        $_SESSION['signed_in'] = $email;
                        ?>
                        <script type='text/javascript'>
                        
                        window.location.href='register.php';
                        console.log('ok');
                        
                        </script>
                        <?php
                    
                }
                else{
                    echo "<p><br> Invalid Email or Password</p>";
                    }
                }
                ?>
                
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
  <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
  <script src="login.js"></script>
</body>
</html>