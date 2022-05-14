<?php
    $host = "127.0.0.1";
    $user = " ";                     
    $pass = " ";                                  
    $db = " ";
    //$port = 3308;
    //$con = mysqli_connect($host, $user, $pass, $db, $port)or die(mysql_error());

    $con = new mysqli($host,  $user, $pass, $db);
    if($con -> connect_errno){
    echo "Failed to connec to MySQL: (" . $mysqli -> connect_errno . ") " . $mysqli -> connect_errno;
}
?>