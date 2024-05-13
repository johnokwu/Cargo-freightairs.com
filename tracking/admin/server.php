<?php


// Create connection
$conn = mysqli_connect('127.0.0.1:3306', 'u257513287_express_user', 'bC&63z8n+^3?', 'u257513287_express_data');

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



#$chat_id = '-1001494654627';
#$bot_token = '1418953624:AAGKgxKhMTIld9gq0gxHjm7pDqDU76If_Z0';
