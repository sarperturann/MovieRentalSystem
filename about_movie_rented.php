<?php include('navbar.php');
	$purchase_id = rand();

	if(isset($_POST['name']) & isset($_POST['card_number']) & isset($_POST['exp_date']) & isset($_POST['cvc'])){
			
        $insert = "INSERT INTO purchase (purchase_ID, purchase_date, purchase_expiration_date, purchase_price) VALUES ('$purchase_id', '1', '1', '1')";

        if(mysqli_query($con,$insert)){
            echo "Succesful insert";
        }
        else{
            echo "insertion failed";
        }

        $insert2 = "INSERT INTO rent_movie (purchase_ID, movieID, userID) VALUES ('$purchase_id', '".$_GET['id']."' ,'1')";

        if(mysqli_query($con,$insert2)){
            echo "Succesful insert2";
        }
        else{
            echo "insertion failed";
        }
    }
	$qry111=mysqli_query($con, "select *
							from review_movie NATURAL JOIN movie_review NATURAL JOIN movie
							where movie.movieID ='".$_GET['id']."' ");

	$review_delete=mysqli_fetch_array($qry111);



	if(isset($_POST['filter6']) ){
			
        $update = "UPDATE movie_review SET review_rating = '".$_POST['filter6']."' WHERE '".$review_delete['movieID']."'= '".$_GET['id']."'";

        if(mysqli_query($con,$update)){
            echo "Succesful update";
        }
        else{
            echo "insertion update";
        }

    }


	$qry2=mysqli_query($con, "select * from movie where movieID='".$_GET['id']."'");
	$qry3=mysqli_query($con, "select * from movie_actors where movieID='".$_GET['id']."'");
	$qry4=mysqli_query($con, "select * from movie_directors where movieID='".$_GET['id']."'");
	$qry5=mysqli_query($con, "select * from movie_award where movieID='".$_GET['id']."'");
	$qry6=mysqli_query($con, "select * from movie_genres where movieID='".$_GET['id']."'");
	
	$qry7=mysqli_query($con, "select R2.review_comment
							from review_movie R, movie_review R2
							where R.movieID='".$_GET['id']."' AND R2.reviewID=R.reviewID");

	$qry8=mysqli_query($con, "select R2.review_rating
							from review_movie R, movie_review R2
							where R.movieID='".$_GET['id']."' AND R2.reviewID=R.reviewID");

	$qry9=mysqli_query($con, "select R2.review_date
							from review_movie R, movie_review R2
							where R.movieID='".$_GET['id']."' AND R2.reviewID=R.reviewID");

	$qry10=mysqli_query($con, "select U.username
							from review_movie R, movie_review R2, user_tbl U, customer C
							where R.userID=C.userID AND R2.reviewID=R.reviewID AND U.userID=C.userID");
	

	$movie=mysqli_fetch_array($qry2);
	$movie_directors=mysqli_fetch_array($qry4);
	$movie_award=mysqli_fetch_array($qry5);
	$movie_genres=mysqli_fetch_array($qry6);

	$qry777 =mysqli_query($con, "select * from rent_movie");


	?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
		.poster {
			width: 60.2%;
			max-width:100%;
  			float: left;
			display:block;
			margin: 0;
		}
		.about_movie {
			width: 100%;
			display: block;
			float: right;
			margin: 0% 0 0% 2.6%;
  		}
		.mov_info_container{
			display:flex;
		}
		img {
			height: 100%;
			width: 100%;
			object-fit: contain;
		}
		.about-p {
			font-size: 12px;
			line-height: 20px;
			color: #313131;
			line-height: 1.8em;
		}
		.clear {
			clear: both;
		}
		.reviews{
			width: 90%;
			max-width: 1240px;
			margin: 0 auto;
			
			display: grid;
			
			grid-template-columns: 1fr;
			grid-template-rows: auto;
			grid-gap: 20px;
		}
		.review-style{
			background: ghostwhite;
			text-decoration: none;
			color: #444;
			box-shadow: 0 2px 5px rgba(0,0,0,0.1);
			display: flex;
			flex-direction: column;
			min-height: 100%;
			
			position: relative;
			top: 0;
			transition: all .1s ease-in;
		}
		.buttons-container{
			position:relative;
			width: 100%;
			display: block;
			float: right;
			margin: 0% 0 0% 2.6%;
		}
		.two-three-buttons{
			display: block;
			flex-direction: column;
			align-items: center;
		}
		.btn {
			border-radius: 50px;
			background-color: DodgerBlue;
			border: none; 
			color: white;
			padding: 12px 16px; 
			font-size: 16px; 
			cursor: pointer; 
		}
		.btn:hover {
			background-color: RoyalBlue;
		}
		.watch-button{
			border-radius: 50px;
			background-color: red;
			border: none; 
			color: white;
			padding: 12px 16px; 
			font-size: 16px; 
			cursor: pointer; 
		}
	</style>
</head>
<body>
<div class="container">
		<h3 class="title"><?php echo $movie['movie_name']; ?></h3>	
		<div class="mov_info_container">
			<div class = "poster">
				<img id = "pic" src="<?php echo $movie['image']; ?>" alt=""/> 
			</div>
			<div class="about_movie">
				<p class="about-p" style="font-size:15px"><b>Director : </b><?php echo $movie_directors['movie_director']; ?></p>
				<p class="about-p" style="font-size:15px"><b>Cast : </b>
				<?php 
				while( $movie_actors=mysqli_fetch_array($qry3)){
					?>
					<?php echo $movie_actors['movie_actor'];?>
					<?php
				}
				?></p>
				<p class="about-p" style="font-size:15px"><b>Movie Production Year: </b><?php echo $movie['movie_production_year']; ?></p>
				<p class="about-p" style="font-size:15px"><b>Description : </b><?php echo nl2br($movie['movie_desc']); ?></p>
				<p class="about-p" style="font-size:15px"><b>Genre : </b><?php echo $movie_genres['movie_genre']; ?></p>
				<p class="about-p" style="font-size:15px"><b>Awards : </b><?php echo $movie_award['movie_award']; ?></p>
				<div class="buttons-container">
					<div class="two-three-buttons">
						<a class="watch-button" href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target="_self">Watch Movie</a>
						<button type="button" class="btn"><i class="fas fa-thumbs-up"></i></button>
					</div>
					<br>
					<button type="button" class="btn">Recommend Movie to a Friend!</button>
                    <br><br>
					<form id="form" method="post">
						<select name="filter6">
						<option value="">---Select Rating---</option>
						
						<option value="1"><?php echo "1" ?> </option>
						<option value="2"><?php echo "2" ?> </option>
						<option value="3"><?php echo "3" ?> </option>
						<option value="4"><?php echo "4" ?> </option>
						<option value="5"><?php echo "5" ?></option>
								
						</select>   

						<button class= "button" class="btn" type="submit" >Rate</button>
						</form>	
				</div>
			</div>
		</div>

		<br>
		<div class="mov_review_info">
			<div class = "reviews">
				<br>
				<h3 class="reviews" >Reviews </h3>
				<div class="review-style">			
					<?php
						while($movie_reviews=mysqli_fetch_array($qry7)){
							$movie_rating=mysqli_fetch_array($qry8);
							$movie_rating_date=mysqli_fetch_array($qry9);
							$customers=mysqli_fetch_array($qry10);
							?>
							<p class="about-p" style="font-size:15px"><b><?php echo $customers['username'];?></b></p>
							<p class="about-p" style="font-size:15px"><b>Rating :</b><?php echo $movie_rating['review_rating']; ?></p>
							<p class="about-p" style="font-size:15px"><?php echo $movie_reviews['review_comment']; ?></p>
							<p class="about-p" style="font-size:15px"><?php echo $movie_rating_date['review_date']; ?></p>
							<hr>
							<?php
						}
					?>


				</div>
			</div>
		</div>		
</div>
<div class="clear"></div>		
</div>
</body>