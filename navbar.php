<?php
  session_start(); 
    include('config.php');
    $userID = $_SESSION['user'];
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
      <meta charset="utf-8">
      <title>Dropdown Menu Bar</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
      <style type="text/css">
  *{
    margin: 0;
    padding: 0;
    list-style: none;
    text-decoration: none;
  }
  body{
    font-family: sans-serif;
  }
  nav .logo{
    color: white;
    text-shadow: 2px 2px #f0afe8;
    font-size: 35px;
    line-height: 72px;
    margin-left: 60px;
    font-weight: bold;
  }
  nav{
    height: 70px;
    background: #fe68fe;
    box-shadow:  0 2px 4px 0 rgba(0,0,0,.2);
  }
  nav ul{
    float: right;
    margin-right: 30px;
  }
  nav ul li{
    display: inline-block;
  }
  nav ul li a{
    font-weight: bold;
    color: white;
    display: block;
    padding: 0 20px;
    line-height: 50px;
    font-size: 20px;
    margin:8px;
    border-radius: 3px;
    background: #fe68fe;
    transition: .5s;
  }
  nav ul li a:hover,
  nav ul li a.active{
    background: #db30d8;
  }
  nav ul ul{
    position: absolute;
    visibility: hidden;
  }
  nav ul li:hover > ul{
    top: 70px;
    visibility: visible;
    transition: .2s linear;
  }
  nav ul ul li{
    width: 150px;
    display: list-item;
    position: relative;
  }
  nav ul i{
    color:black;
  }

  nav input[type=text] {
    border-radius: 3px;
    border: none;
    margin-top: 8px;
    margin-right: 16px;
    font-size: 17px;
  }

  nav ul a i, nav ul button i {
    color:white;
  }

  .search-box{
    float:left;
    margin-top:15px;
  }

  .sub-btn{
    background-color: #fe68fe;
    border:none;
  }
 
</style>
</head>
  <body>
    <nav>
      <a href="index.php"class="logo">MovieGiraffe</a>
         <ul>

          <form class = "search-box" action="process_search.php" method= "POST">
            <button class= "sub-btn" type="submit" ><i class="fa fa-search fa-lg" ></i></button>
            <input type="text" placeholder=" Search.." name="search"> 
          </form> 	

          <a href="index.php"><i class="fa fa-home fa-lg"></i></a>        
            <li><a href="upcoming_movies.php">UPCOMING</a></li>
            <li><a href="lists.php">LISTS</a></li>
            <li><a href="#">SOCIAL</a></li>
            <li>
               <a href="#"><i class="fa fa-user"></i> <?php echo htmlspecialchars($_SESSION['userName']);?> </a>
               <ul>
                  <li><a href="profile.php">Profile</a></li>
                  <li><a href="logout.php">LogOut</a></li>
               </ul>
            </li>
         </ul>
    </nav>

  </body>
</html>

