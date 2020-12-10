<?php
define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_DATABASE", "contact_system");


$userEmail = $_POST['userEmail'];
$password = $_POST['password'];

//Create connection
$conn = mysqli_connect(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE);

//Check connection
if($conn->connect_error){
		die("Connection failed".$conn->connect_error);
}
echo "connected successfully";

//Query username and password for user
$result = mysql_query("SELECT * FROM users WHERE userEmail = '$userEmail' AND password = '$password'")
or die("Failed to query database".mysql_error());

$row = mysql_fetch_array($result);

if($row['userEmail'] == $userEmail & $row['password'] == $password){
	echo "Welcome ".$row['username'];
}else{
	echo "Failed to login";
}

$conn->close();
?>
