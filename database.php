<?php
$server="localhost";
$user="root";
$pw="";
$conn=mysqli_connect($server,$user,$pw);
if(!($conn))
echo "could not establish the connection";
else {
  echo "connection established<br>";
  $sql="CREATE DATABASE A017_DB";
  if(mysqli_query($conn,$sql))
  echo "database created successfully<br>";
  mysqli_close($conn);
}
?>
