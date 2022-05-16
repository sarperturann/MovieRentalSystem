<?php
include('config.php');
session_start();
$email = $_POST["Email"];
$pw = $_POST["Password"];
$qry=mysqli_query($con,"select * from user_tbl where username='$email' and password='$pw'");

if(mysqli_num_rows($qry))
{
    $user=mysqli_fetch_array($qry);
    //if($user['userType'] == 1 )
    //{
        // customer logged in
        $_SESSION['user']=$user['userID'];
        $_SESSION['userName'] = $user['username'];
        if(isset($_SESSION['user']))
        {
            header('location:index.php');
        }
    //} else {
        // employee logged in
    //}
} else {
    $_SESSION['error']="Login Failed!";
    header("location:login.php");
}
?>