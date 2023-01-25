<?php 

// define db
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'pijarcamp';

// connect
$db = mysqli_connect($server, $username, $password, $database);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

?>