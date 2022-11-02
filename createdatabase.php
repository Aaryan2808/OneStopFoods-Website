<?php
$host="localhost";
$username="root";
$password="";
$db_name="test";
$con=mysqli_connect($host,$username,$password,$db_name);
if(!$con){
  die("Connection Failed: ".mysqli_connect_error());
}
else{
  echo "\n Connection Successfull\n";
}
$sql="Create Database CUSTOMERDATABASE";
if(mysqli_query($con,$sql))
echo "\nDatabase Created Successfully\n";
else {
echo "\n Database not created, error occured";
mysqli_error($con);
}
mysqli_close($con);
?>
