<?php
include('config.php');
session_start();
$query = "DELETE FROM movie_review WHERE reviewID={$_SESSION['reviewID']} LIMIT 1";

if (mysqli_query($con, $query)) { 
?><?php
    		header('location:profile.php');?>
<?php
 }
?>