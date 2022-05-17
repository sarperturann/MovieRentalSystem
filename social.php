<?php
include'config.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
      <meta charset="utf-8">
      <title>Profile </title>
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
			background-color: #F43D96;
			border: none; 
			color: white;
			padding: 12px 16px; 
      margin: 5px;
			font-size: 16px; 
			cursor: pointer; 
            margin: 10px 10px 10px 66pc;
		}
		.btn:hover {
			background-color: darkred;
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

<?php
    $sql2 = 'SELECT username FROM user_tbl NATURAL JOIN adds_friend ';
    $sql = 'SELECT * FROM user_tbl NATURAL JOIN adds_friend WHERE ';
    $result = mysqli_query($con, $sql2);
    $m = mysqli_fetch_array($result);
?>

.Background{

box-sizing: border-box;
display:flex;
}

</style>
</head>
  <body>
  <?php include('navbar.php');?>

  <div class='reviewsWrapper'>  
            Friends

            <div class='reviewBox'>
           <div class='reviewUp'>
               <div class='revName'>
               <?php echo $m['username'];?>
               </div>
               <a class='btn' href="" target="_self">
        Remove Friend
        </a>

           </div>
           <div class='reviewDesc'>
         
           </div>
            </div>

            <div class='reviewBox'>
           <div class='reviewUp'>
               <div class='revName'>
               <?php echo $m['username'];?>
               </div>
               <a class='btn' href="" target="_self">
        Remove Friend
        </a>

           </div>
           <div class='reviewDesc'>
         
           </div>
            </div>

            <div class='reviewBox'>
           <div class='reviewUp'>
               <div class='revName'>
               <?php echo $m['username'];?>
               </div>
               <a class='btn' href="" target="_self">
        Remove Friend
        </a>

           </div>
           <div class='reviewDesc'>
         
           </div>
            </div>

            <div class='reviewBox'>
           <div class='reviewUp'>
               <div class='revName'>
               <?php echo $m['username'];?>
               </div>
               <a class='btn' href="" target="_self">
        Remove Friend
        </a>

           </div>
           <div class='reviewDesc'>
         
           </div>
            </div>

            <div class='reviewBox'>
           <div class='reviewUp'>
               <div class='revName'>
               <?php echo $m['username'];?>
               </div>
               <a class='btn' href="" target="_self">
        Remove Friend
        </a>

           </div>
           <div class='reviewDesc'>
         
           </div>
            </div>

    </div>
    
  </body>
</html>
