<?php include('navbar.php');
 
	$qry1=mysqli_query($con, "select * from movie where movieID='".$_GET['id']."'");
	$movie=mysqli_fetch_array($qry1);

	?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>  
	<style type="text/css">
    .mainscreen
    {
        min-height: 100vh;
        width: 100%;
        display: flex;
        flex-direction: column;
        background-color: #DFDBE5;
        color:#963E7B;
    }
    .card {
        width: 40rem;
        margin: auto;
        background: white;
        position:center;
        align-self: center;
        top: 50rem;
        border-radius: 1.5rem;
        box-shadow: 4px 3px 20px #3535358c;
        display:flex;
        flex-direction: row;
        
    }
    .product {
        object-fit: cover;
        width: 20em;
        height: 20em;
        border-radius: 100%;
    }
    .middle {
        background-color: #ffffff;
        width: 35rem;
        border-bottom-right-radius: 1.5rem;
        border-top-right-radius: 1.5rem;
        padding: 1rem 2rem 3rem 3rem;
    }
    p{
        display:block;
        font-size: 1.1rem;
        font-weight: 400;
        margin: .8rem 0;
    }
    .inputbox
    {
        color:#030303;
        width: 100%;
        padding: 0.5rem;
        border: none;
        border-bottom: 1.5px solid #ccc;
        margin-bottom: 1rem;
        border-radius: 0.3rem;
        color: #615a5a;
        font-size: 1.1rem;
        font-weight: 500;
        outline:none;
    }
    .expcvc {
        display:flex;
        justify-content: space-between;
        padding-top: 0.6rem;
    }
    .expcvc_date{
        padding-right: 1rem;
    }
    .expcvc_cvc{
        padding:0 1rem;
    }
    .button{
        background:DodgerBlue;
        padding: 15px;
        border: none;
        border-radius: 50px;
        color: white;
        font-weight: 400;
        font-size: 1.2rem;
        margin-top: 10px;
        width:100%;
        letter-spacing: .11rem;
        outline:none;
    }
    .button:hover
    {
        transform: scale(1.05) translateY(-3px);
        box-shadow: 3px 3px 6px #38373785;
    }
    h1{text-align: center;}
    .anchor-button{
        background:DodgerBlue;
        padding: 15px;
        border: none;
        border-radius: 50px;
        color: white;
        font-weight: 400;
        font-size: 1.2rem;
        margin-top: 10px;
        width:100%;
        letter-spacing: .11rem;
        outline:none;
    }
    .center-it{
        text-align:center;
    }

	</style>
</head>
<body>
    <div class="mainscreen">
        <div class="card">
            <div class="middle">
            <form action="about_movie_rented.php?id=<?php echo $movie['movieID'];?>" method="post">
                <h1>Payment</h1>
                <h2>Payment Information</h2>
                <p>Cardholder Name</p>
                <input type="text" class="inputbox" name="name" required />
                <p>Card Number</p>
                <input type="number" class="inputbox" name="card_number" id="card_number" required />
            <div class="expcvc">
                <p class="expcvc_date">Expiry</p>
                <input type="date" class="inputbox" name="exp_date" id="exp_date" required />

                <p class="expcvc_cvc">CVC</p>
                <input type="password" class="inputbox" name="cvc" id="cvc" required />
            </div>
                <p></p>
                <div class="center-it">
                    <button class="anchor-button" target="_self">RENT MOVIE!</button>
                </div>
            </form>
            </div>
        </div>
    </div>
</body>


