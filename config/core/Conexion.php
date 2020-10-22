<?php

require_once("../../config/config.php");


// Create connection
$conn = new mysqli(HOST, USER, PASSWORD, NAME_BD);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


?>
