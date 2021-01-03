<?php
define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_DATABASE", "contact_system");

$userEmail = $_POST['userEmail'];
$password = $_POST['password'];

//Create connection
$conn = mysql_connect(DB_SERVER , DB_USER, DB_PASSWORD);

//Check connection
if (!$conn) {
    die('Could not connect: ' . mysql_error());
}
// if($conn->connect_error){
// 		die("Connection failed".$conn->connect_error);
// }

echo "connected successfully";

mysql_select_db(DB_DATABASE, $conn) or die(mysql_error());

// $userEmail = stripslashes($userEmail);
// $password = stripslashes($password);
// $userEmail = $conn->real_escape_string($userEmail);
// $password = $conn->real_escape_string($password);

//Query username and password for user
$result = mysql_query("SELECT * FROM users WHERE userEmail = '$userEmail' AND password = '$password'")
or die("Failed to query database".mysql_error());

$row = mysql_fetch_array($result);

if($row['userEmail'] == $userEmail & $row['password'] == $password){
	echo "Welcome ".$row['username'];
}else{
	echo "Failed to login";
}

// $conn->close();
?> 