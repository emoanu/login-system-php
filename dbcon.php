<?php
// $host='localhost';
// $username='root';
// $password='';
// $dbname='login';
// $con=mysqli_connect($host,$username,$password,$dbname);
$con = mysqli_connect("localhost","root","","login");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
