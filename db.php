<?php
  $servername = "localhost";
  $username = "root";
  $password = "password";
  $dbname = "db_hotel";

  // Connect
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn && $conn->connect_error) {
  echo "Connection failed: " . $conn->connect_error;
  }
?>
