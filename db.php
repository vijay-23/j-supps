<?php

$servername = "localhost";
$database = "u830442942_ecom_store";
$username = "u830442942_vijay";
$password = "Vijay1234";

// Create connection
$con = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

?>
