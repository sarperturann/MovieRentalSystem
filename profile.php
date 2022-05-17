<?php
include'config.php';
include('navbar.php');
if(!isset($_SESSION['user']))
{
  header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
      <meta charset="utf-8">
      <title>Profile </title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
  

  .Background{

    box-sizing: border-box;
    display:flex;
    }


  .Meta{
  left: 9.12%;
  right: 11.31%;
  top: 69.97%;
  bottom: 13.51%;
  display:flex;
  justify-content: space-around;
  }

  .Header{
  left: 39.23%;
  right: 39.05%;
  top: 0%;
  bottom: 45.05%;
  flex: 1;
  padding: 50px 0px 50px 100px;

  }

  .userName{
  left: 39.23%;
  right: 39.05%;
  top: 41.14%;
  bottom: 51.65%;
  text-align: center;
  font-family: 'Roboto Mono';
  font-style: normal;
  font-weight: 500;
  font-size: 18px;
  line-height: 24px;
  margin: 20px auto auto auto;
  color: #FFFFFF;
  }


  .Upper{
      margin:auto auto auto auto;
      display:flex;
  }
  .UpperX{
      margin:auto auto auto auto;
      display:flex;
      flex-direction: column;
      padding: 50px 450px 50px 20px;
  }

  .Avatar{
  left: 35.00%;
  right: 37.00%;
  top: 0%;
  bottom: 70.37%;
  width: 112px;
  height: 112px;
  border-radius: 50%;
  display: block;
  margin: auto auto auto auto;
  }


 .BlueButton{
    color:#E5E5E5;
     background-color: #0093FF;
     text-align: center;
     padding: 3px 3px 3px 3px;
     margin: 5px;
     width: 170px;
    font-style: normal;
    font-weight: 100;
    font-size: 15px;
    line-height: 24px;
    border-radius: 15%;
 }

 .btn {
			border-radius: 50px;
			background-color: DodgerBlue;
			border: none; 
			color: white;
			padding: 12px 16px; 
      margin: 5px;
			font-size: 16px; 
			cursor: pointer; 
		}
		.btn:hover {
			background-color: RoyalBlue;
		}

 .nameU{
    text-align: center;
    margin: auto 20px 17px auto;
    font-style: normal;
    font-weight: 500;
    font-size: 30px;
    line-height: 24px;
    color: #0A0A0A;
 }

 .reviewsWrapper{
    display:flex;
    margin:50px;
    flex-direction: column;
 }

 .reviewBox{
    border: 1px solid #B7C8D5;
    box-sizing: border-box;
    border-radius: 4px;
    margin:7px;
 }
 .reviewUp{
    padding: 5px;
    display: flex;
 }

 .revName{
     margin: 3px;
 }
 .rating{
     margin: 3px;
 }
.reviewDesc{
    color:#292929;
    margin: 5px;
    width: 300px;
    font-style: normal;
    font-weight: 100;
    font-size: 15px;
    line-height: 24px;
    border-radius: 15%;
}

.delete-btn{
  float:right;
  display:inline-block;
  border-radius: 50px;
			background-color: DodgerBlue;
			border: none; 
			color: white;
			padding: 12px 16px; 
      margin: 5px;
			font-size: 16px; 
}
.delete-btn:hover {
			background-color: RoyalBlue;
		}


</style>
</head>
  <body>

  <?php
    $sql = 'SELECT * FROM user_tbl';
    $result = mysqli_query($con, $sql);
    $m = mysqli_fetch_array($result);
?>


  <?php
    $sql2 = 'SELECT * FROM movie_review INNER JOIN review_movie INNER JOIN movie';
    $result2 = mysqli_query($con, $sql2);
    $m2 = mysqli_fetch_array($result2);
    $m3 = mysqli_fetch_array($result2);
    $sq13= "SELECT * 
            FROM movie_review MR, movie M, review_movie RM 
            WHERE M.movieID = RM.movieID AND RM.reviewID=MR.reviewID AND RM.userID='".$_SESSION['user']."'";
    
    $result3 = mysqli_query($con, $sq13);
?>
  <div class="content">


</div>
        <div class='Background'>

        <div class='Header'>
        <img id = "pic" src="blackwidow.jpg" class='Avatar'>  </img>
        </div>

        <div class= 'UpperX'>
            <div class='Upper'>
            
        <p class='nameU' >
        <?php echo $_SESSION['userName'];?>
        </p>
        <a class='btn' href="" target="_self">
       
      EDIT PROFILE
        
        </a>

        </div>

        <div class='Meta'>
        <a class='btn' href="" target="_self">
        EDIT FAVORITE GENRES
        </a>
        <a class='btn' href="social.php" target="_self">
            
        FRIENDS      
    </a >

        <a class='btn' href="wallet.php" target="_self">
        WALLET
      </a>
        </div>

        </div>
      
        </div>
    <div class='reviewsWrapper'>    
            Reviews

            <?php      
              while( $try = mysqli_fetch_array($result3)){    
                      ?>
                            <div class='reviewBox'>

                      <div class='reviewUp'>
                      <div class='revName'>
                      <?php echo $try['movie_name'];?>
                  </div>
                  <div class='rating'>
                      <?php echo $try['review_rating'];?>
                      / 5
                  </div>
        
                </div>
                <?php
                $_SESSION['reviewID'] = $try['reviewID'];?>
                <form action="delete_review.php?id=<?php echo $try['reviewID'];?>" method="post">
                  <input class="delete-btn" type="submit" name="submit" value="X">
                </form>



                  <div class='reviewDesc'>
                  <?php echo $try['review_comment'];?>
                  </div>
              </div>
              <?php
              }
            ?>

    </div>
    
  </body>
</html>
