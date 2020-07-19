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
/* Transparent signup */
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

/* Transparent signup */

	 /* #signup_form{
		width:350px;
		height:430px;
		position:relative;
		top:50px;
		margin: auto;
		padding: auto;
	}  */
</style>
<script> //Checking username availability
    function checkAvailability() {
    $("#loaderIcon").show();
    jQuery.ajax({
    url: "check_availability.php",
    data:'username='+$("#username").val(),
    type: "POST",
    success:function(data){
    $("#user-availability-status").html(data);
    $("#loaderIcon").hide();
    },
    error:function (){}
    });
    }
</script>

<script type="text/javascript">

</script>
</head> 
<body>

<div class="container">
	<div id="signup_form">
		<h2><center><span class="glyphicon glyphicon-user"></span>Create an Account</center></h2>
		<hr>
		<form method="POST" action="register.php">
		<label>Name:</label> <input type="text" name="name" class="form-control" required>
		<div style="height: 10px;"></div>
		<label>Username:</label> <input type="text" name="username" class="form-control" id="username" onBlur="checkAvailability()" required>
		<span id="user-availability-status" style="font-size:16px;"></span> <!-- username cannot be duplicated -->
		<div style="height: 10px;"></div>		
		<label>Password:</label> <input type="password" name="password" class="form-control" required> 
		<div style="height: 10px;"></div>
		<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Sign Up</button> <a href="index.php"> Back to Login</a>
		</form>
		<div style="height: 15px;"></div>
		<div style="color: white; font-size: 15px;">
			<center>
			<?php
				session_start();
				if(isset($_SESSION['sign_msg'])){
					echo $_SESSION['sign_msg'];
					unset($_SESSION['sign_msg']);
				}
			?>
			</center>
		</div>
	</div>
</div>
</body>
</html>