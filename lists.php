<?php
include'config.php';
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
           
		}

        .listWrapper{
            display:flex;
            margin: 30px 100px 30px 30px;
            flex-direction: column;

        }

        .listTitle{
            display:flex;
        }

        .listMovies{
            display:flex;
        }

        .listObj{
            display:flex;
            border: 1px solid #B7C8D5;
            width: 50px;
            height:50px;
            box-sizing: border-box;
            border-radius: 1px;
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
	</style>
</head>
  <body>
  <div class="content">

<?php include('navbar.php');?>

</div>
			<div class="container">	
			<?php
        
          	$qry2 = mysqli_query($con,"select * from movie order by rand()");
						
          	while($m = mysqli_fetch_array($qry2))
                {
                    ?>
                    <div class= "listWrapper">
						<div class = "listTitle">
                            Rented Movies
                            </div>
                            <div class="listMovies">
                                <div class="listObj">
                                film1
                                </div>
                                <div class="listObj">
                                film2
                                </div>
                                <div class="listObj">
                                film3
                                </div>
                                <div class="listObj">
                                film4
                                </div>
                                <div class="listObj">
                                film5
                                </div>
                                <div class="listObj">
                                film6
                                </div>
                                <div class="listObj">
                                film7
                                </div>

                            </div>
						
                    </div>
                  <?php } ?>
                  
                  
            </div>
            
            <button class= createNewList>
                        CREATE A NEW LIST
                  </button>
			
	</body>	
			
