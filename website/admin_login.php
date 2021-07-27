<?php
session_start();
$hostname = "localhost";
$username = "root";
$password = "";
$db = "db1";

$dbconnect=mysqli_connect($hostname,$username,$password,$db);


$username=$_POST['Username'];
  $password=$_POST['Password'];


$query="SELECT * FROM userinfo WHERE username='$username' && password='$password'";
$result=mysqli_query($dbconnect,$query);
$num=mysqli_num_rows($result);
if(!$num)
{
echo "<script>alert('register first bro!');
 window.location.href=' http://localhost/new_computin_lab/admin_login.htm';</script>";
}
else{
header('location: http://localhost/new_computin_lab/admin_dashboard.htm');
}
?>

