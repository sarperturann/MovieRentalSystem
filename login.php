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
  padding: 8px;
  width:250px;
  color:#AAAAAA;
  margin-top:10px;
  font-size:1em;
  border-radius:4px;
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
	</style>
</head>
<body>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:700,600' rel='stylesheet' type='text/css'>
<form method="post" action="login_form.php">
<div class="box">
<h1>Login</h1>
<input type="email" name="email" value="email" onFocus="field_focus(this, 'email');" onblur="field_blur(this, 'email');" class="email" />
<input type="password" name="email" value="email" onFocus="field_focus(this, 'email');" onblur="field_blur(this, 'email');" class="email" />
<br>
<br>
<a href="#"><div class="btn">Sign In</div></a> 
<br>
<br>
<a href="#"><div class="btn2">Sign Up</div></a> 
<p style="color:black">Forgot your password? <u style="color:#fe68fe;">Click Here!</u></p>
</div> 
</form>
</body>
  