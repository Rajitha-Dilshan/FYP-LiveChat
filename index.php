<!DOCTYPE html>
<html>
<head>
	<title>SEGi Live Chat</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="shortcut icon" href="img/favicon-icon/favsegi.ico">
		<meta name="viewport" content="width=device-width,initial-scale=1">
<style>
body {
  background-image: url('img/segikl.png');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
  background-position: center;
}
/* Transparent login */
.container{
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%,-50%);
    padding: 20px 25px;
    width: 350px;
	height:430px;

     background-color: rgba(0,0,0,.7);
    box-shadow: 0 0 10px rgba(255,255,255,.3);
}
.container h2{
    text-align: left;
    color: #90caf9;
    margin-bottom: 25px;
    text-transform: uppercase;
	font-size: 25px;

}

.container form input{
    width: calc(100% - 20px);
    padding: 8px 10px;
    margin-bottom: 15px;
    border: none;
    background-color: transparent;
    border-bottom: 2px solid #2979ff;
    color: white;
    font-size: 16px;
}
.container label{
    text-align: left;
    color: #90caf9;
}
/* Transparent login */
</style>
</head>
<body>

<div class="container">
	<div id="login_form">
		<h2><center><span class="glyphicon glyphicon-lock"></span> Please Login</center></h2>
		<hr>
		<form method="POST" action="login.php">
		<label>Username:</label> <input type="text" name="username" class="form-control" required>
		<div style="height: 10px;"></div>		
		<label>Password:</label> <input type="password" name="password" class="form-control" required> 
		<div style="height: 10px;"></div>
		<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-log-in"></span> Login</button>&nbsp;&nbsp;<label>No account?</label> <a href="signup.php"> Sign up</a>
		
		</form>
		<div style="height: 15px;"></div>
		<div style="color: #ff0a0a; font-size: 15px; font-weight: bold;">
			<center>
			<?php
				session_start();
				if(isset($_SESSION['msg'])){
					echo $_SESSION['msg'];
					unset($_SESSION['msg']);
				}
			?>
			</center>
		</div>
	</div>
</div>
</body>
</html>
