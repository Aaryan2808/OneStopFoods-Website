<<?php
$host="localhost";
$username="root";
$password="";
$db_name="CUSTOMERDATABASE";
$con=mysqli_connect($host,$username, $password, $db_name);
if(!$con){
    die("Connect Failed: ".mysqli_connect_error());

}
else{
    echo "\nConnect Successfully\n";

}
$sql="CREATE TABLE CustomerDatai1s1(
  Name varchar(30),
  EMail varchar(30),
  Phone integer(10),
  message varchar(100)
  )";
    if(mysqli_query($con, $sql))
    {
        echo "\nTable created successfully";
    }
    else
    {
        echo "Error creating table: ";
        mysqli_error($con);
    }?>
