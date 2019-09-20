<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>


    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="register.css">

</head>

<body>
    <div class="container">

            <div class="form-row">
                    <div class="col-sm-9 col-md-9 col-lg-9 mx-auto">
<div class="card cardd my-5"> <div class="card-body cardd">
<form class=" border border-light p-5 " method="POST" enctype="multipart/form-data" >

        <h5 class="card-title text-center"><strong>Sign UP</strong></h5>

        <section class="form-row mb-4">
            <div class="col-md mb-4">
                <!-- firstName -->
                <input type="text" name="fname" id="firstName" class="form-control" placeholder="First name" required>
            </div>
            <div class="col-md">
                <!-- Last name -->
                <input type="text" name="lname" id="lastName" class="form-control" placeholder="Last name" required>
            </div>
        </section>




        <!-- Password -->
        <section class="form-row">
            <div class="col-md">
            <article class=" input-group-append">
        <input type="password" id="password" class="form-control" placeholder="Password" name="myPassword"> 
            <span class="btn btn-sm  btn-light input-group-text hide">Show</span>
        </article>
        
        <small id="pass" class="form-text text-muted mb-4">

            At least 8 characters and 1 digit
        </small>
</div>
    <!-- confirmPassword-->
        <article class="col-md">
        <input type="password" id="confirmPassword" class="form-control" placeholder="Confirm Password">
        <small id="confirmPass" class="form-text text-muted mb-4">
            At least 8 characters and 1 digit
        </small>
    </article>
    </section>

<!-- date and Gender  -->
    <section class="form-row">
    <article class="col-md">
            <input type="datetime" id="" class="form-control" name="mydob" placeholder="Enter Your DOB" id="dob" required>
            <small id="dateOfbirth" class="form-text text-muted mb-4">
                    Enter Your Date Of Birth
                </small>
            </article>

            <!-- gender -->
    <article class="col-md">
        <select name="myGender" id='gender' class="form-control">
            <option value="Enter" selected disabled>Choose Your Gender</option>
            <option value="Male">Male</option>
            <option value="Female" default>Female</option>
        </select>

        <small id="gend" class="form-text text-muted mb-4">
                    Enter Your Gender
                </small>
            </article>
        </section>


        <section class="form-row">
           <!-- E-mail -->
    <article class="col-md">
           <input type="email" id="email" class="form-control " name='email' placeholder="E-mail" required>
    <small id="emai" class="form-text texte-muted mb-4 text-center">
            Enter Your Valid Email
        </small>
    </article>
    <article class="col-md">
        <!-- Phone number -->
        <input type="tel" id="phoneNumber" name='phoneNumber'class="form-control" placeholder="Phone number">
        <small id="phn" class="form-text text-muted mb-4 text-center">
            Enter Your phoneNumber
        </small>
    </article>
    </section>

    <!-- photo uploadfield -->

       <input type="file" value="" name="myupload" class="form-control" id="upload">

        <!-- Sign up button -->
        <input type='button' class="btn btn-primary my-4 btn-block message_box" name='submit' id="submit" value = 'Sign in'>

        <!-- Social register -->
        <div class="text-center text-primary mt-2"> <a href="forgot.php">Already A Member ?</a> </div>
                <hr class="my-4">
        <div class="text-center">or sign up with:</div>
        <br />
    <div class="text-center">
        <a type="button" class="text-primary text-center mx-2">
                <i class="fab fa-facebook-f mr-2"></i>
        </a>
        <a type="button" class="text-primary mx-2">
            <i class="fab fa-twitter"></i>
        </a>
        <a type="button" class="text-primary mx-2">
            <i class="fab fa-linkedin-in"></i>
        </a>
        <a type="button" class="text-dark mx-2">
            <i class="fab fa-github"></i>
        </a>
    </div>

        <hr>

        <!-- Terms of service -->
        <p class="text-center mb-4 mt-4 ">By clicking
            <em>Sign up</em> you agree to our
            <a href="" target="_blank">terms of service</a>
    <hr>
    <script
src="https://code.jquery.com/jquery-3.4.1.min.js"
integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
crossorigin="anonymous"></script>
<script src="register.js">
</script>
    </form>
</div></div>
</div>
</div>
    </div>

    <!-- Default form register -->
</body>


<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</body>
</html>
