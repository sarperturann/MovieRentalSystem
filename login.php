<!DOCTYPE html>
<html lang="en" dir="ltr">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
<style type="text/css">
body{
  font-family: 'Open Sans', sans-serif;
  margin: 0 auto 0 auto;  
  width:100%; 
  text-align:center;
  margin: 20px 0px 20px 0px;   
}

p{
  font-size:12px;
  text-decoration: none;
  color:#ffffff;
}

h1{
  font-size:1.5em;
  color:#525252;
}

.box{
  background:white;
  width:300px;
  border-radius:6px;
  margin: 0 auto 0 auto;
  padding:0px 0px 70px 0px;
  border: #fe68fe 4px solid; 
}

.email{
  background:#ecf0f1;
  border: #ccc 1px solid;
  border-bottom: #ccc 2px solid;
  padding: 4px;
  width:250px;
  color:#AAAAAA;
  font-size:1em;
}

.password{
  border-radius:4px;
  background:#ecf0f1;
  border: #fe68fe 1px solid;
  padding: 8px;
  width:250px;
  font-size:1em;
}

.btn{
    display: inline-block;
    border-radius: 50px;
	background-color: DodgerBlue;
    border: none; 
	color: white;
	padding: 12px 16px; 
	font-size: 16px; 
	cursor: pointer; 
}

.btn:hover{
  background:#fe68fe; 
}

.btn2{
    display: inline-block;
    border-radius: 50px;
    background-color:#3498db;
    border: none; 
	color: white;
	padding: 12px 16px; 
	font-size: 16px; 
	cursor: pointer; 
}

.btn2:hover{ 
    background:#fe68fe; 
}
h3{
    color:#525252;
    font-size:0.8rem;
    display:inline-block;
    padding:1px 10px;
}
	</style>
</head>
<body>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:700,600' rel='stylesheet' type='text/css'>
<form method="post" action="login_form.php">
    <div class="box">
        <h1>Login</h1>
        <h3 style="float:left">Email or Username:</h3>
        <input name="Email" type="text" size="25" placeholder="email or username" class="email"/>
        <h3 style="float:left">Password:</h3>
        <input name="Password" type="password" size="25" placeholder="password" class="password"/>
        <br>
        <br>
        <button type="submit" class="btn">Login</button>
        <br>
        <br>
        <button type="submit" class="btn2">Sign Up</button>
        <p style="color:black">Forgot your password? <u style="color:#fe68fe;">Click Here!</u></p>
    </div> 
</form>
</body>
  