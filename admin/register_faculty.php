<?php

$hostname = "localhost";
$username = "root";
$password = "";
$db = "db1";

$dbconnect=mysqli_connect($hostname,$username,$password,$db);

if ($dbconnect->connect_error){

die("Database connection failed: " . $dbconnect->connect_error);
}

if(isset($_POST['register'])) {
  $Id=$_POST['id'];
  $Uname=$_POST['uname'];
  $Designation=$_POST['designation'];
  $Date=$_POST['birthday'];
  $Spec=$_POST['spec'];
  $Email=$_POST['email'];
  $Tel=$_POST['tel'];
  $Gender=$_POST['gender'];

  $query = "INSERT INTO facultyinfo (id, name, designation, date_of_joining, specialization, email, contact, gender)
  VALUES ('$Id', '$Uname', '$Designation', '$Date', '$Spec', '$Email', '$Tel', '$Gender')";



if (!mysqli_query($dbconnect, $query)) {
        die('An error occurred. Your review has not been submitted.');
    } else {
      
 header('location: add_faculty.htm');

    }

}
if(isset($_POST['update'])) {
  $Id=$_POST['id'];
  $Uname=$_POST['uname'];
  $Designation=$_POST['designation'];
  $Date=$_POST['birthday'];
  $Spec=$_POST['spec'];
  $Email=$_POST['email'];
  $Tel=$_POST['tel'];
  $Gender=$_POST['gender'];

  $query = "update facultyinfo set id='$Id', name='$Uname', designation='$Designation', date_of_joining='$Date', specialization='$Spec', email='$Email', contact='$Tel', gender='$Gender' where id='$Id'";



if (!mysqli_query($dbconnect, $query)) {
        die('An error occurred. Your review has not been submitted.');
    } else {
    header('location: update_faculty.php');
    }

}

?>


