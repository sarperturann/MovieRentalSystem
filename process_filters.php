<?php include('navbar.php'); 

$query1=mysqli_query($con,"	(select DISTINCT *
                            from movie NATURAL JOIN movie_actors NATURAL JOIN movie_award NATURAL JOIN movie_directors NATURAL JOIN movie_genres
                            where movie_actor='".$_POST['filter']."' AND movie_director='".$_POST['filter2']."'
                            AND movie_genre='".$_POST['filter3']."' AND movie_award='".$_POST['filter4']."' 
                            AND movie_production_year='".$_POST['filter5']."'
                            group by movie_name)
                            ");	

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
	<style type="text/css">
		.movie{
			float:left;	
			width:250px;
			padding:20px;
		}

		.movie #pic{
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
		<h2 class= "title" style="color:#000;">Filter Results </h2>
				
			<?php 

				while($mo_ac = mysqli_fetch_array($query1) )
				{ 
                    ?>
							<div class = "movie">
								<div><a href="about_movie.php?id=<?php echo $mo_ac['movieID'];?>"><img id = "pic" src="<?php echo $mo_ac['image'];?>"></a>
                                <h3><a href="about_movie.php?id=<?php echo $mo_ac['movie_name'];?>"><?php echo $mo_ac['movie_name'];?></a></h3> </div>
							</div>
					
				<?php } ?>
			</div>
		<div class="clear"></div>		
	</div>
</body>
