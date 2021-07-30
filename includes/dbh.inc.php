<?php

// $serverName = "localhost";
// $dBUsername = "root";
// $dBPassword = "root";
// $dBName = "phpproject01";
// // DB_CONNECTION=mysql;
// // DB_HOST=localhost;
// // DB_PORT=8889;
// // DB_DATABASE=some;
// // DB_USERNAME=root;
// // DB_PASSWORD=root;

// $conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

// if (!$conn) {
//     die("connection failed " . mysqli_connect_error());
// }



  $db_host = 'localhost';
  $db_user = 'root';
  $db_password = 'root';
  $db_db = 'information_schema';
 
  $mysqli = @new mysqli(
    $db_host,
    $db_user,
    $db_password,
    $db_db
  );
	
  if ($mysqli->connect_error) {
    echo 'Errno: '.$mysqli->connect_errno;
    echo '<br>';
    echo 'Error: '.$mysqli->connect_error;
    exit();
  }

  echo 'Success: A proper connection to MySQL was made.';
  echo '<br>';
  echo 'Host information: '.$mysqli->host_info;
  echo '<br>';
  echo 'Protocol version: '.$mysqli->protocol_version;

  $mysqli->close();

?>