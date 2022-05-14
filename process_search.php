<?php include('navbar.php'); ?>
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
				
			<?php $qry2=mysqli_query($con,"select DISTINCT movie_name,movie_id,image,from movie where movie_name='".$_POST['search']."'");			
				while($m = mysqli_fetch_array($qry2))
				{ ?>
							<div class = "image">
								<div><a href="about_movie.php?id=<?php echo $m['movieID'];?>"><img id = "pic" src="<?php echo $m['image'];?>"></a>
								<a href="about_movie.php?id=<?php echo $m['movieID'];?>" ><?php echo $m['movie_name'];?></a></div>
							</div>
					
				<?php } ?>
			</div>
		<div class="clear"></div>		
	</div>
</body>
