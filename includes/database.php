<?php
$servername = "localhost";
$username = "root";
$password = "123";
$database = "envWebb";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database)
or die('Error connecting to MySQL server.');

// Check connection
if (!$conn) {
    echo "error in connn";
}
?>
