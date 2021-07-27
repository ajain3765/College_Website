<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="home_style.css">
<link rel="stylesheet" href="admin_login.css">
<link rel="stylesheet" href="admin_dash.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"/>
<title>Admin | Faculty</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <div class="fixed-header">
        <a href="admin_dashboard.htm"><img src="logo.png" alt=""></a>
    </div>
   
    <!--*************************Edit This Div****************************-->
    <div class="container" style="margin-top: 12px;">
        <div class="form-div">
            <h2>Update Faculty Details</h2>
    
            <form action="register_faculty.php" method="post">
                   <?php

$hostname = "localhost";
$username = "root";
$password = "";
$db = "db1";

$dbconnect=mysqli_connect($hostname,$username,$password,$db);

if ($dbconnect->connect_error){

die("Database connection failed: " . $dbconnect->connect_error);
}
$ids = $_GET['id'];

$showquery = "select * from  facultyinfo where id ='$ids' ";
$showdata = mysqli_query($dbconnect,$showquery);
$arrdata = mysqli_fetch_array($showdata);
if(isset($_POST['register'])) {
  $Id=$_POST['id'];
  $Uname=$_POST['uname'];
  $Designation=$_POST['designation'];
  $Date=$_POST['birthday'];
  $Avatar=$_POST['avatar'];
  $Spec=$_POST['spec'];
  $Email=$_POST['email'];
  $Tel=$_POST['tel'];
  $Gender=$_POST['gender'];

  $query = "INSERT INTO facultyinfo (id, name, designation, date_of_joining, photo, specialization, email, contact, gender)
  VALUES ('$Id', '$Uname', '$Designation', '$Date', '$Avatar', '$Spec', '$Email', '$Tel', '$Gender')";



if (!mysqli_query($dbconnect, $query)) {
        die('An error occurred. Your review has not been submitted.');
    } else {
      
 header('location: http://localhost/computin_lab/admin_dashboard.htm');

    }

}
?>


                 <div class="form-section">
                  <label for="id"><b>Faculty ID</b></label>
                  <input type="text" placeholder="Enter ID" name="id"  value="<?php echo $arrdata['id']; ?>" required>

                  <label for="uname"><b>Faculty Name</b></label>
                  <input type="text" placeholder="Enter Name" name="uname" value="<?php echo $arrdata['name']; ?>" required >

                  <label for="designation"><b>Designation</b></label>
                  <input type="text" placeholder="Enter Designation" name="designation" value="<?php echo $arrdata['designation']; ?>"  required>

                  <label for="birthday"><b>Date of Joining</b></label>
                  <input type="date" id="birthday" name="birthday" value="<?php echo $arrdata['date_of_joining']; ?>">

                  <label for="spec"><b>Specialization</b></label>
                  <input type="text" placeholder="Enter Specialization" name="spec" value="<?php echo $arrdata['specialization']; ?>" required>

                  <label for="email"><b>Email ID</b></label>
                  <input type="email" placeholder="Enter Email" name="email" value="<?php echo $arrdata['email']; ?>" required>

                  <label for="tel"><b>Contact No</b></label>
                  <input type="tel" placeholder="Enter Contact No." name="tel" value="<?php echo $arrdata['contact']; ?>" required>
                  
                  <p><b>Gender</b></p>
                  <input type="radio" id="male" name="gender" value="male"
				<?php
				if($arrdata['gender']=='male')
				{
					echo "checked";
				}
			     ?>>
			     <label for="male">Male</label><br>
                  <input type="radio" id="female" name="gender" value="female"
                  
                    <?php
				if($arrdata['gender']=='female')
				{
					echo "checked";
				}
			     ?>>
				 
				 <label for="female">Female</label><br>
                 <button type="submit" class="login-but" name="update">update</button>
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

