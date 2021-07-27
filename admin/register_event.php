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
  $type=$_POST['type'];
  $title=$_POST['title'];
  $status=$_POST['status'];
  $sponsor=$_POST['sponsor'];
  $duration=$_POST['duration'];
  $date=$_POST['date'];
  $place=$_POST['place'];
  $organizer=$_POST['organizer'];

  $query = "INSERT INTO event_details (id,event_type, title, status, sponsored_by, duration, dates, place, organizer)
  VALUES ('$Id','$type', '$title', '$status', '$sponsor', '$duration', '$date', '$place', '$organizer')";



if (!mysqli_query($dbconnect, $query)) {
        die('An error occurred. Your review has not been submitted.');
    } else {
      
 header('location: add_event.htm');

    }

}
if(isset($_POST['update'])) {
  $Id=$_POST['id'];
  $type=$_POST['type'];
  $title=$_POST['title'];
  $status=$_POST['status'];
  $sponsor=$_POST['sponsor'];
  $duration=$_POST['duration'];
  $date=$_POST['date'];
  $place=$_POST['place'];
  $organizer=$_POST['organizer'];

  $query = "update event_details set event_type='$type', title='$title', status='$status', sponsored_by='$sponsor', duration='$duration', dates='$date', place='$place', organizer='$organizer' where id= '$Id' ";



if (!mysqli_query($dbconnect, $query)) {
        die('An error occurred. Your review has not been submitted.');
    } else {
      
 header('location: update_event.php');

    }

}

?>


