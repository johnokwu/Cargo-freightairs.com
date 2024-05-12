<?php


// Create connection
$conn = mysqli_connect('127.0.0.1:3306', 'u257513287_qqs_user', 'I0o+^MAv4R', 'u257513287_qqs_data');

// Check connection
/* if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully"; */

function saiful($tring)
{
  $string = stripslashes($string);
  $string = strip_tags($string);
  $string = htmlspecialchars($string);
  //  $string = mysqli_real_escape_string($conn, $string);
  return $string;
}
