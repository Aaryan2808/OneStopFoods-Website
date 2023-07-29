<?php
$a = isset($_GET["Name"]);
$b = isset($_GET["EMail"]);
$c = isset($_GET["Phone"]);
$d = isset($_GET["message"]);
$host='localhost';
$user='root';
$password='';
$dbname='CUSTOMERDATABASE';
$con=mysqli_connect($host,$user,$password,$dbname);
if(!$con)
die("connection issue".mysqli_connect_error());
else
echo "connected successfully";
$sql="INSERT INTO CustomerDatai1s1 (Name, EMail, Phone, message)
VALUES ('$a', '$b', '$c', '$d')";
if(mysqli_query($con,$sql))
echo "Mr/Mrs $a have registered with email $b their Contact Number is $c and their message is $d ";
else
echo "entry not created";
mysqli_close($con);
?>
