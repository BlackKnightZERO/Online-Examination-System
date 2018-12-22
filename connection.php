<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "online_exam_sys";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>