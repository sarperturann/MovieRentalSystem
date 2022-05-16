<?php
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
		.title{
			margin-top:20px;
			margin-bottom:10px;
			margin-left:20px;
		}

		.container{
			max-width:1200px;
			margin:auto;
			overflow:auto;
		}

	</style>
</head>
  <body>
		 		
			<div class="container">	
			<h2 class= "title" style="color:#000;">New Movies</h2>
			<?php
        	$moviePrinted = false;
			

          	$qry2 = mysqli_query($con,"select * from movie order by movie_name ASC");


			while(($m888 = mysqli_fetch_array($qry2)) == true)
                {  
					echo "hello1";
					$qry3 = mysqli_query($con,"select * from movie NATURAL JOIN rent_movie order by movie_name ASC");
					$moviePrinted = false;
					while($m777 = mysqli_fetch_array($qry3) ){

								if( $m888['movieID'] ==  $m777['movieID']){  
									$moviePrinted = true;
								?>
										<div class = "image">
											<div><a href="about_movie_rented.php?id=<?php echo $m888['movieID'];?>"><img id = "pic" src="<?php echo $m888['image'];?>"></a>
											<h3><a href="about_movie_rented.php?id=<?php echo $m888['movieID'];?>" ><?php echo $m888['movie_name'];?></a> </h3></div>
										</div>

								<?php }
								
						}
					
					if(($moviePrinted != true)){ ?>
												
								<div class = "image">
								<div><a href="about_movie.php?id=<?php echo $m888['movieID'];?>"><img id = "pic" src="<?php echo $m888['image'];?>"></a>
								<h3><a href="about_movie.php?id=<?php echo $m888['movieID'];?>" ><?php echo $m888['movie_name'];?></a> </h3></div>
								</div>
					
					<?php }
				}

		?>

			</div>
			<div class="clear"></div>	
	</body>	
			
