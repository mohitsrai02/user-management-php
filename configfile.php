<?php

$conn = mysqli_connect('127.0.0.1','root','','instapost');

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully<br>";

?>