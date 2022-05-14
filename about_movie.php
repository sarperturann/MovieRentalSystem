<?php include('navbar.php');
	$qry2=mysqli_query($con,"select * from tbl_movie where movie_id='".$_GET['id']."'");
	$movie=mysqli_fetch_array($qry2);
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
		<h3 class="title"><?php echo $movie['movie_name']; ?></h3>	
			<div class = "image">
				<img id = "pic" src="<?php echo $movie['image']; ?>" alt=""/> 
				<p class="p-link" style="font-size:15px"><b>Cast : </b><?php echo $movie['cast']; ?></p>
				<p class="p-link" style="font-size:15px"><b>Release Date : </b><?php echo date('d-M-Y',strtotime($movie['release_date'])); ?></p>
				<p style="font-size:15px"><?php echo $movie['desc']; ?></p>
				<a href="<?php echo $movie['video_url']; ?>" target="_blank" class="watch_but" style="text-decoration:none;">Watch Trailer</a>
			</div>
			
			<div class="clear"></div>		
		</div>
	<div class="clear"></div>		
</div>
</body>