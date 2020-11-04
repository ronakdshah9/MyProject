<?php
$server="localhost";
$user="root";
$pw="";
$dbname="A017_DB";
$conn=mysqli_connect($server,$user,$pw,$dbname);
if (!($conn))
echo "could not establish the connection";
else {
  $sql="CREATE TABLE A017_table (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(20) NOT NULL,
  password VARCHAR(20) NOT NULL,
  name VARCHAR(20) NOT NULL,
  email VARCHAR(15))";
  if(mysqli_query($conn,$sql))
  echo "Table created successfully<br>";
  else {
    echo "Table could not be created";
  }
  mysqli_close($conn);
}
?>
