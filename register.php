<?php
	include('conn.php');
	session_start();
	function check_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$username=check_input($_POST['username']);
		
		if (!preg_match("/^[a-zA-Z0-9_]*$/",$username)) {
			$_SESSION['sign_msg'] = "You are not allowed to use space and special characters for username!"; 
			header('location: signup.php');
		}
		
		else{
			
		$fusername=$username;
		
		$password = check_input($_POST["password"]);
		$fpassword=md5($password);
		$fname = check_input($_POST["name"]);
		
		mysqli_query($conn,"insert into `user` (uname, username, password, access) values ('$fname', '$fusername', '$fpassword', '2')");
		
		$_SESSION['msg'] = "Hello " . $username . ", " . " Registration successful. Please login to connect with us"; 
		header('location: index.php');
		}
	}
?>
