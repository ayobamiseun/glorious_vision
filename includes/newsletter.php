<?php
include 'includes/connect.php'
$news = "";
if( isset( $_REQUEST['news'])) {
  $news = $_REQUEST['news']; 
} 
// $news =  $_REQUEST['news'];


// Performing insert query execution
// here our table name is college
$sql = "INSERT INTO newsletter (email) VALUE ('$news')";

if(mysqli_query($conn, $sql)){
  // header("index.php");
} else{
  echo "ERROR: Hush! Sorry $sql. " 
      . mysqli_error($conn);
}

// Close co$conection
mysqli_close($conn);
?>