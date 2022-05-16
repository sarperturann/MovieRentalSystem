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
	<style type="text/css">
		.image{
			float:left;	
			width:250px;
			padding:20px;
		}

		.image #pic{
			width:100%;
			height:auto;
		}
		.container{
			max-width:1200px;
			margin:auto;
			overflow:auto;
            display:flex;
            flex-direction: column;
		}

        .listWrapper{
            display:flex;
            margin: 30px 100px 30px 30px;
            flex-direction: column;

        }

        .listTitle{
            display:flex;
            font-size: 16px; 
            color:teal;
            text-shadow: 2px 2px teal;
            font-size: 35px;
            line-height: 72px;
            margin-left: 60px;
            font-weight: bold;
        }

        .listMovies{
            display:flex;
        }

        .listObj{
            display:flex;
            border: 1px solid #B7C8D5;
            width: 100px;
            height:100px;
            box-sizing: border-box;
            border-radius: 1px;
        }
        .btn {
			border-radius: 50px;
			background-color: DodgerBlue;
			border: none; 
			color: white;
			padding: 12px 16px; 
      margin: 200px;
			font-size: 16px; 
			cursor: pointer; 
		}
		.btn:hover {
			background-color: RoyalBlue;
		}

        .createNewList{
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

        .listTitlem{
       margin:1px;
       font:bold;
       color : black;
       font-size: large;
        }
	</style>
</head>
  <body>
  <div class="content">


</div>
			<div class="container">	
            <div class = "listTitle">
                            LISTS
                            </div>

            <?php
            
        $sql = 'SELECT * FROM list_user INNER JOIN includes_movie INNER JOIN movie';

        $sql2 = 'SELECT DISTINCT list_name FROM list_user INNER JOIN includes_movie INNER JOIN movie';


        $sql3 = 'SELECT DISTINCT movie_name FROM list_user JOIN includes_movie JOIN movie';

          	$qry2 = mysqli_query($con,$sql);
                        
             $qry3 = mysqli_query($con,$sql2);

             $qry4 = mysqli_query($con,$sql3);

          	while($m = mysqli_fetch_array($qry3))
                {
                    $m2 = mysqli_fetch_array($qry2)
                    ?>
                    <div class= "listWrapper">
                        <a class= listTitlem>
                    <?php echo $m2['list_name'];?>
                    </a>
                            <div class="listMovies">
                                <div class="listObj">

                                <?php
                                  $m3 = mysqli_fetch_array($qry4)?>

                                  <?php
                                   echo $m3['movie_name'];?>

                                </div>

                                <div class="listObj">

                                <?php
                                  $m3 = mysqli_fetch_array($qry4)?>

                                  <?php
                                   echo $m3['movie_name'];?>

                                </div>

                               
                                <div class="listObj">
                                <?php
                                  $m3 = mysqli_fetch_array($qry4)?>

                                  <?php
                                   echo $m3['movie_name'];?>

                                </div>

                                
                                <div class="listObj">
                                <?php
                                  $m3 = mysqli_fetch_array($qry4)?>

                                  <?php
                                   echo $m3['movie_name'];?>

                                </div>
                                
                                <div class="listObj">
                                <?php
                                  $m3 = mysqli_fetch_array($qry4)?>

                                  <?php
                                   echo $m3['movie_name'];?>

                                </div>
                               
                                <div class="listObj">
                                <?php
                                  $m3 = mysqli_fetch_array($qry4)?>

                                  <?php
                                   echo $m3['movie_name'];?>

                                </div>
                         
                                <div class="listObj">
                                <?php
                                  $m3 = mysqli_fetch_array($qry4)?>

                                  <?php
                                   echo $m3['movie_name'];?>

                                </div>
                                </div>

                            </div>
						
                    </div>
                  <?php } ?>
                  
                  
            </div>
            
            <a class= btn href="create_list.php" target="_self">
                        CREATE A NEW LIST
                </a>
			
	</body>	
			
