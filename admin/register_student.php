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
  $reg=$_POST['regno'];
  $rollno=$_POST['rollno'];
  $name=$_POST['uname'];
  $age=$_POST['age'];
  $dob=$_POST['birthday'];
  $gender=$_POST['gender'];
  $address=$_POST['address'];
  $degree=$_POST['degree'];
  $course=$_POST['course'];
  $semester=$_POST['semester'];
  $company_placed=$_POST['company'];
  $designation=$_POST['desg'];
  $ctc=$_POST['ctc'];
  $email=$_POST['email'];
  $tel=$_POST['tel'];


  $query = "INSERT INTO studentinfo (registration_no, rollno, name, age, dob, gender, address, degree, course, semester, company_placed, designation, ctc, email, contact)
  VALUES ('$reg', '$rollno', '$name', '$age', '$dob', '$gender', '$address', '$degree', '$course', '$semester', '$company_placed', '$designation', '$ctc', '$email', '$tel')";



if (!mysqli_query($dbconnect, $query)) {
        die('An error occurred. Your review has not been submitted.');
    } else {
      
 header('location: add_student.htm');

    }

}
if(isset($_POST['update'])) {
  $reg=$_POST['regno'];
  $rollno=$_POST['rollno'];
  $name=$_POST['uname'];
  $age=$_POST['age'];
  $dob=$_POST['birthday'];
  $gender=$_POST['gender'];
  $address=$_POST['address'];
  $degree=$_POST['degree'];
  $course=$_POST['course'];
  $semester=$_POST['semester'];
  $company_placed=$_POST['company'];
  $designation=$_POST['desg'];
  $ctc=$_POST['ctc'];
  $email=$_POST['email'];
  $tel=$_POST['tel'];


  $query = "update studentinfo set registration_no='$reg', rollno='$rollno', name='$name', age='$age', dob='$dob', gender='$gender', address='$address', degree= '$degree', course='$course', semester='$semester', company_placed='$company_placed', designation='$designation', ctc='$ctc', email='$email', contact='$tel' where rollno='$rollno'";



if (!mysqli_query($dbconnect, $query)) {
        die('An error occurred. Your review has not been submitted.');
    } else {
      
 header('location: update_student.php');

    }

}
?>


