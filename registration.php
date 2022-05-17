<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>User Registration</title>
    <style>
        section {
            background-image: inherit;
            position: fixed;
            bottom: 0;
            right: 0;
            left: 0;
            top: 0;
        }
  </style>

</head>
<body>
<section>
    <!--action="<?php echo $_SERVER['PHP_SELF'];?>"-->
    <div class="d-flex justify-content-center" style="margin-top: 5%">
        <div class="card w-50">
            <h2 class="d-flex justify-content-center" style="margin-top: 3%; margin-bottom: 3%">User Registration</h2>
            <form style="width: 75%; margin: auto" method="post" name="registrationForm">
                <div class="form-group">
                     <label for="signUpUsername">Username</label>
                     <input type="username" class="form-control" name="signUpUsername" placeholder="Enter your username">
                </div>
                <div class="form-group">
                    <label for="signUpEmail">Email Address</label>
                    <input type="email" class="form-control" name="signUpEmail" placeholder="Enter your email address">
                </div>
                <div class="form-group">
                    <label for="signUpPassword">Password</label>
                    <input type="password" class="form-control" name="signUpPassword" placeholder="Enter your password">
                </div>
                <div class="d-flex justify-content-around">
                    <button style="margin-bottom: 3%; background-color: #2ED3DB" type="submit" class="btn btn-primary" name="register" ><a class="text-dark">Register</a></button>
                    <button style="margin-bottom: 3%; background-color: #5FFBF1" type="button" class="btn btn-primary" name="back-to-main"><a class="text-dark">Go To Main Page</a></button>
                </div>
            </form>
        </div>

    </div>
</section>
</body>
<?php
    session_start();
    include('config.php');
    if(isset($_POST["register"]))
    {
      $signUpUsername = $_POST["signUpUsername"];
      $signUpEmail = $_POST["signUpEmail"];
      $signUpPassword = $_POST["signUpPassword"];
      mysqli_query($con,"insert into user_tbl values('DEFAULT', '1', '$signUpUsername','$signUpPassword','$signUpEmail')");
      $id=mysqli_insert_id($con);
      mysqli_query($con,"insert into customer values($id)");
      $_SESSION['user']=$id;
      header('location:index.php');
    }
?>
</html>