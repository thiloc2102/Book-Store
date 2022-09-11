<?php
$connect = mysqli_connect("localhost","root","","bookstore");

// Check connection
if (mysqli_connect_errno())
  {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
	  // Change character set to utf8
	mysqli_set_charset($connect,"utf8");
	
?>