<?php
define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_DATABASE", "contact_system");

//Create connection
$conn = mysqli_connect(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE);

//Check connection
if($conn->connect_error){
		die("Connection failed".$conn->connect_error);
}
echo "connected successfully";

$conn->close();
?>
