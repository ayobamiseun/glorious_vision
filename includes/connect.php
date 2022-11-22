<?php 
ini_set ('display_errors', 1);
ini_set ('display_startup_errors', 1);
error_reporting (E_ALL);


ini_set ('display_errors', 1);
ini_set ('display_startup_errors', 1);
$conn = new mysqli("localhost","root","","gloriousVision");

// Check connection
if ($conn -> connect_errno) {
  echo "Failed to connect to MySQL: " . $conn -> connect_error;
  exit();

}
?>



