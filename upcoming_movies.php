<?php
include('config.php');
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
      <meta charset="utf-8">
      <title>Upcoming Movies</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
      <style type="text/css">

 
</style>
</head>
  <body>
    
    <div class="content">

        <?php include('navbar.php');?>

    </div>
    <div class="content">

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
			font:bold;
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
			<h2 class= "title" style="color:#000;">Upcoming Movies</h2>
			<?php
        
          	$qry2 = mysqli_query($con,"select movie_to_add,image_upcoming from employee order by rand()");
						
          	while($m = mysqli_fetch_array($qry2))
                {
                    ?>
						<div class = "image">
							<div><img id = "pic" src="<?php echo $m['image_upcoming'];?>">
							<?php echo $m['movie_to_add'];?></div>
						</div>
				
  	    		<?php } ?>
			</div>
			<div class="clear"></div>	
	</body>	
			


    </div>

  </body>
</html>
