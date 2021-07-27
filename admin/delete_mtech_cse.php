<?php

$hostname = "localhost";
$username = "root";
$password = "";
$db = "db1";

$dbconnect=mysqli_connect($hostname,$username,$password,$db);

if ($dbconnect->connect_error){

die("Database connection failed: " . $dbconnect->connect_error);
}
   $ids = $_GET['rollno'];
  $query = "DELETE from studentinfo where rollno = '$ids' ";



if (!mysqli_query($dbconnect, $query)) {
        die('An error occurred. Your review has not been submitted.');
    } else {
      
 header('location: edit_mtech_cse.php');

    }


?>