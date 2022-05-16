<?php
include('config.php');
$sql1 = "SELECT  `movie_actor` FROM `movie_actors` ;";
$movie_actors = mysqli_query ($con, $sql1);

$sql2 = "SELECT DISTINCT `movie_director` FROM `movie_directors` ;";
$movie_directors = mysqli_query ($con, $sql2);

$sql3 = "SELECT DISTINCT `movie_genre` FROM `movie_genres` ;";
$movie_genres = mysqli_query ($con, $sql3);

$sql4 = "SELECT DISTINCT `movie_award` FROM `movie_award` ;";
$movie_awards = mysqli_query ($con, $sql4);

$sql5 = "SELECT DISTINCT `movie_production_year` FROM `movie` ;";
$movie_pro_year = mysqli_query ($con, $sql5);


$sql6 = "SELECT movie_award FROM movie_award group by movie_award";

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
      <meta charset="utf-8">
      <title>Movie Rental Home Page</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
      <style type="text/css">
        .sub-btn2{
        background-color: #0000;
        border:none;
        margin-left:10px;
      }

      select{
        margin-left:40px;
      }

      .content2{
        margin-top:20px;
        margin-left:40px;
        margin-bottom:10px;
      }
 
</style>
</head>
  <body>
  

    <div class="content1">

        <?php include('navbar.php');?>

    </div>
    <div class ="content2">
    <form id="form" action="process_filters.php" method="post">
            <select name="filter">
              <option selected value="">---Select Movie Actor---</option>
              <?php
                while ($query1 = mysqli_fetch_array(
                                    $movie_actors,MYSQLI_ASSOC)):;

                    ?>
                        <option value="<?php echo $query1['movie_actor'];
                        ?>">
                                  <?php echo $query1['movie_actor'];?>
                        </option>
                    <?php
                  endwhile;
                  ?>
            </select>
            
            <select name="filter2">
              <option value="">---Select Movie Director---</option>
              <?php
                while ($query2 = mysqli_fetch_array(
                                    $movie_directors,MYSQLI_ASSOC)):;

                    ?>
                        <option value="<?php echo $query2['movie_director'];
                        ?>">
                                  <?php echo $query2['movie_director'];?>
                        </option>
                    <?php
                  endwhile;
                  ?>
            </select>

            <select name="filter3">
              <option value="">---Select Movie Genre---</option>
              <?php
                while ($query3 = mysqli_fetch_array(
                                    $movie_genres,MYSQLI_ASSOC)):;

                    ?>
                        <option value="<?php echo $query3['movie_genre'];
                        ?>">
                                  <?php echo $query3['movie_genre'];?>
                        </option>
                    <?php
                  endwhile;
                  ?>
            </select>

            <select name="filter4">
              <option value="" >---Select Movie Award---</option>
              
              <?php
                while ($query4 = mysqli_fetch_array(
                                    $movie_awards,MYSQLI_ASSOC)):;

                    ?>
                        <option value="<?php echo $query4['movie_award'];?>">
                            <?php echo $query4['movie_award'];?>
                        </option>
                    <?php
                  endwhile;
                  ?>
            </select>
            
            <select name="filter5">
              <option value="">---Select Movie Year---</option>
              <?php
                while ($query5 = mysqli_fetch_array(
                                    $movie_pro_year,MYSQLI_ASSOC)):;

                    ?>
                        <option value="<?php echo $query5['movie_production_year'];
                        ?>">
                                  <?php echo $query5['movie_production_year'];?>
                        </option>
                    <?php
                  endwhile;
                  ?>
            </select>   

            <button class= "sub-btn2" type="submit" ><i class="fa fa-search fa-lg" ></i></button>    
      </div>

    <div class="content3">

          <?php include('movie_list.php');?>

    </div>

  </body>
</html>
