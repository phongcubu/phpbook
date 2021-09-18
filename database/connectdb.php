<?php
$con = new mysqli("localhost","root","","php");

// Check connection
if ($con -> connect_errno) {
  echo "Failed to connect to MySQL: " . $con -> connect_error;
  exit();
}
//  đọc csdl sang danh utf8 
  mysqli_set_charset($con,"utf8");
?>