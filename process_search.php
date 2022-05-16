<?php include('navbar.php'); 
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
		<h2 class= "title" style="color:#000;">Search Result for ' <?php echo $_POST['search'] ?> ' </h2>
				
			<?php $qry2=mysqli_query($con," select DISTINCT movie_name, movieID, image
											from movie NATURAL JOIN movie_actors NATURAL JOIN movie_directors
											where movie_name='".$_POST['search']."' 
											OR movie_director = '".$_POST['search']."'
											OR movie_actor = '".$_POST['search']."'
											OR movie_name LIKE '%".$_POST['search']."%'
											OR movie_director LIKE '%".$_POST['search']."%'
											OR movie_actor LIKE '%".$_POST['search']."%'
									
									");			
				while($m = mysqli_fetch_array($qry2))
				{ ?>
							<div class = "image">
								<div><a href="about_movie.php?id=<?php echo $m['movieID'];?>"><img id = "pic" src="<?php echo $m['image'];?>"></a>
								<h3><a href="about_movie.php?id=<?php echo $m['movieID'];?>" ><?php echo $m['movie_name'];?></a></h3></div>
							</div>
					
				<?php } ?>
			</div>
		<div class="clear"></div>		
	</div>
</body>
