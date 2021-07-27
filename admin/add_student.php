<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="home_style.css">
<link rel="stylesheet" href="admin_dash.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"/>
<title>Admin | Student</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <div class="fixed-header">
      <a href="admin_dashboard.htm"><img src="logo.png" alt=""></a>
    </div>
    
    <div class="container" style="margin-top: 12px;">
            <div class="form-div">
              <h2>Add Student Details</h2>
                 <form action="register_student.php" method="post">
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

$showquery = "select * from  studentinfo where rollno ='$ids' ";
$showdata = mysqli_query($dbconnect,$showquery);
$arrdata = mysqli_fetch_array($showdata);
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
?>
               <div class="form-section">
                <label for="regno"><b>Registration No</b></label>
                <input type="text" placeholder="Enter Registration No" name="regno" value="<?php echo $arrdata['registration_no']; ?>" required>

                <label for="rollno"><b>Roll No</b></label>
                <input type="text" placeholder="Enter Roll No" name="rollno" value="<?php echo $arrdata['rollno']; ?>" required>

                <label for="uname"><b>Name</b></label>
                <input type="text" placeholder="Enter Name" name="uname" value="<?php echo $arrdata['name']; ?>" required>

                <label for="age"><b>Age</b></label>
                <input type="text" placeholder="Enter Age" name="age" value="<?php echo $arrdata['age']; ?>" required>

                <label for="birthday"><b>Date of Birth</b></label>
                <input type="date" id="birthday" name="birthday" value="<?php echo $arrdata['dob']; ?>">

                <p><b>Gender</b></p>
                <input type="radio" id="male" name="gender" value="male"
				<?php
				if($arrdata['gender']=="male")
				{
					echo "checked";
				}
				?>
				>
                <label for="male">Male</label><br>
                <input type="radio" id="female" name="gender" value="female"
				<?php
				if($arrdata['gender']=="female")
				{
					echo "checked";
				}
				?>
				>
                <label for="female">Female</label><br><br>

                <label for="address"><b>Address</b></label>
                <input type="text" placeholder="Enter Address" name="address" value="<?php echo $arrdata['address']; ?>" required>

                <label for="degree"><b>Choose a Degree</b></label>
                <select name="degree" id="degree" class="cselect">
                  <option value="UG"
				  <?php
				if($arrdata['degree']=="UG")
				{
					echo "selected";
				}
				?> 
				  >UG</option>
                  <option value="PG"
				  <?php
				if($arrdata['degree']=="PG")
				{
					echo "selected";
				}
				?>
				  >PG</option>
                </select><br><br>

                <label for="course"><b>Choose a Course</b></label>
                <select name="course" id="course" class="cselect">
                  <option value="CSE"
				  <?php
				if($arrdata['course']=="CSE")
				{
					echo "selected";
				}
				?>
				  >CSE</option>
                  <option value="CSE-IS"
				   <?php
				if($arrdata['course']=="CSE-IS")
				{
					echo "selected";
				}
				?>
				  >CSE-IS</option>
                </select><br><br>

                <label for="semester"><b>Choose Semester</b></label>
                <select name="semester" id="semester" class="cselect">
                  <option value="1"
				  <?php
				if($arrdata['semester']=="1")
				{
					echo "selected";
				}
				?>  >1</option>
                  <option value="2"
				  <?php
				if($arrdata['semester']=="2")
				{
					echo "selected";
				}
				?>
				  >2</option>
                  <option value="3"
				  <?php
				if($arrdata['semester']=="3")
				{
					echo "selected";
				}
				?> >3</option>
                  <option value="4"
				  <?php
				if($arrdata['semester']=="4")
				{
					echo "selected";
				}
				?>
				  >4</option>
                  <option value="5"
				  <?php
				if($arrdata['semester']=="5")
				{
					echo "selected";
				}
				?>
				  >5</option>
                  <option value="6"
				  <?php
				if($arrdata['semester']=="6")
				{
					echo "selected";
				}
				?>
				  >6</option>
                  <option value="7"
				  <?php
				if($arrdata['semester']=="7")
				{
					echo "selected";
				}
				?>
				  >7</option>
                  <option value="8"
				  <?php
				if($arrdata['semester']=="8")
				{
					echo "selected";
				}
				?> >8</option>
                </select><br><br> 

                <label for="company"><b>Company Placed</b></label>
                <input type="text" placeholder="Enter Company Name" name="company" value="<?php echo $arrdata['company_placed']; ?>">

                <label for="desg"><b>Designation</b></label>
                <input type="text" placeholder="Enter Designation" name="desg" value="<?php echo $arrdata['designation']; ?>">

                <label for="ctc"><b>CTC</b></label>
                <input type="text" placeholder="Enter CTC" name="ctc" value="<?php echo $arrdata['ctc']; ?>">

                <label for="uname"><b>Email ID</b></label>
                <input type="email" placeholder="Enter Email" name="email" value="<?php echo $arrdata['email']; ?>" required>

                <label for="tel"><b>Contact No</b></label>
                <input type="tel" placeholder="Enter Contact No." name="tel" value="<?php echo $arrdata['contact']; ?>" required>
              
               <button type="submit" class="login-but" name="update">submit</button>
              </div>
      
              <div class="cancel-section" style="background-color:#f1f1f1">
              <button type="button" class="cancelbtn">Cancel</button>
              </div>
              </form>    

	  
	  
	  
             </div>  
    </div>    
    
    <footer>
            <center style="padding-top: 5px;">
                <p style="color: #fff; font-size: 25px;">Developers</p>
            </center>

        <div class="main-content">
          <div class="left box">
            <h2>Rishi Verma</h2>
                <div class="content">
                    <p>M-tech CSE 2020-2022</p>
                    <p>Roll no <span>202CS022</span></p>
                    <div class="social">
                        <a href="#"><span class="fab fa-facebook-f"></span></a>
                        <a href="#"><span class="fab fa-twitter"></span></a>
                        <a href="#"><span class="fab fa-instagram"></span></a>
                        <a href="#"><span class="fab fa-youtube"></span></a>
                    </div>
                </div>
            </div>

          <div class="center box">
            <h2>Ayushi Jain</h2>
            <div class="content">
                <p>M-tech CSE 2020-2022</p>
                <p>Roll no <span>202CS003</span></p>
                <div class="social">
                    <a href="#"><span class="fab fa-facebook-f"></span></a>
                    <a href="#"><span class="fab fa-twitter"></span></a>
                    <a href="#"><span class="fab fa-instagram"></span></a>
                    <a href="#"><span class="fab fa-youtube"></span></a>
                </div>
             </div>
        </div>

            <div class="right box">
                <h2>Harendra Singh Kushwaha</h2>
                <div class="content">
                    <p>M-tech CSE 2020-2022</p>
                    <p>Roll no <span>202CS010</span></p>
                    <div class="social">
                        <a href="#"><span class="fab fa-facebook-f"></span></a>
                        <a href="#"><span class="fab fa-twitter"></span></a>
                        <a href="#"><span class="fab fa-instagram"></span></a>
                        <a href="#"><span class="fab fa-youtube"></span></a>
                    </div>
             </div>
             </div> 

             <div class="right1 box">
                <h2>Vashung Muilung</h2>
                <div class="content">
                    <p>M-tech CSE-IS 2020-2022</p>
                    <p>Roll no <span>202IS028</span></p>
                    <div class="social">
                        <a href="#"><span class="fab fa-facebook-f"></span></a>
                        <a href="#"><span class="fab fa-twitter"></span></a>
                        <a href="#"><span class="fab fa-instagram"></span></a>
                        <a href="#"><span class="fab fa-youtube"></span></a>
                    </div>
             </div>
             </div> 
  </div>  
  <div class="bottom">
    <center>
              <span class="credit">Created By M-tech CSE Students | </span>
              <span class="far fa-copyright"></span> 2020 All rights reserved.
            </center>
    </div>
</footer>
</body>
</html> 

