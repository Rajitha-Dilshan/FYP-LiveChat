<?php 
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','chat_system');

try
{
$conn = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}

//checking username availablity
if(($_POST["username"])) {
	$username= $_POST["username"];
	
	
	
$sql ="SELECT username FROM user WHERE username=:username";
$query= $conn -> prepare($sql);
$query-> bindParam(':username', $username, PDO::PARAM_STR);
$query-> execute();
$results = $query -> fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query -> rowCount() > 0)
{
echo "<span style='color:red'> Username already exists!</span>";
 echo "<script>$('#submit').prop('disabled',true);</script>";
} else{
	
	echo "<span style='color:green'> Username available for Registration</span>";
 echo "<script>$('#submit').prop('disabled',false);</script>";
}

}


?>
