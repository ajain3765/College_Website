<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="home_style.css">
<link rel="stylesheet" href="admin_login.css">
<link rel="stylesheet" href="admin_dash.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"/>
<title>Admin | Event</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <div class="fixed-header">
        <a href="admin_dashboard.htm"><img src="logo.png" alt=""></a>
    </div>
   
    <!--*************************Edit This Div****************************-->
    <div class="container" style="margin-top: 12px;">
        <div class="form-div">
            <h2>Add Event Details</h2>
    
            <form action="register_event.php" method="post">
      
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
$showquery = "select * from  event_details where id ='$ids' ";
$showdata = mysqli_query($dbconnect,$showquery);
$arrdata = mysqli_fetch_array($showdata);
if(isset($_POST['register'])) {
  $type=$_POST['type'];
  $title=$_POST['title'];
  $status=$_POST['status'];
  $sponsor=$_POST['sponsor'];
  $duration=$_POST['duration'];
  $date=$_POST['date'];
  $place=$_POST['place'];
  $organizer=$_POST['organizer'];

  $query = "INSERT INTO event_details (event_type, title, status, sponsored_by, duration, dates, place, organizer)
  VALUES ('$type', '$title', '$status', '$sponsor', '$duration', '$date', '$place', '$organizer')";



if (!mysqli_query($dbconnect, $query)) {
        die('An error occurred. Your review has not been submitted.');
    } else {
      
 header('location: http://localhost/computin_lab/admin_dashboard.htm');

    }

}
?>



               <div class="form-section">

                <p><b>Event Type</b></p>
                <input type="radio" id="workshop" name="type" value="workshop"
				<?php
				if($arrdata['event_type']=='workshop')
					echo "checked";
				?>
				>
                <label for="workshop">workshop</label><br>
                <input type="radio" id="conference" name="type" value="conference"
				<?php
				if($arrdata['event_type']=='conference')
					echo "checked";
				?>
				>
                <label for="conference">conference</label><br>
                <input type="radio" id="news" name="type" value="news"
				<?php
				if($arrdata['event_type']=='news')
					echo "checked";
				?>
				>
                <label for="news">News</label><br><br>

		<label for="id"><b>Id</b></label>
                <input type="text" placeholder="Enter Title" value="<?php echo $arrdata['id']; ?>" name="id" required>

                <label for="title"><b>Title</b></label>
                <input type="text" placeholder="Enter Title" name="title" value="<?php echo $arrdata['title']; ?>" required>

                <label for="status"><b>Status</b></label>
                <input type="text" placeholder="Enter Status" name="status" value="<?php echo $arrdata['status']; ?>" required>

                <label for="sponsor"><b>Sponsored by</b></label>
                <input type="text" placeholder="Enter Sponsor" name="sponsor" value="<?php echo $arrdata['sponsored_by']; ?>" required>

                <label for="duration"><b>Duration</b></label>
                <input type="text" placeholder="Enter Duration" name="duration" value="<?php echo $arrdata['duration']; ?>" required>

                <label for="date"><b>Dates</b></label>
                <input type="text" placeholder="Enter Dates" name="date"  value="<?php echo $arrdata['dates']; ?>" required>

                <label for="place"><b>Place</b></label>
                <input type="text" placeholder="Enter Place" name="place" value="<?php echo $arrdata['place']; ?>" required>

                <label for="organizer"><b>Organizer</b></label>
                <input type="text" placeholder="Enter Organizer" name="organizer" value="<?php echo $arrdata['organizer']; ?>" required>

               <button type="submit" class="login-but" name="update" >submit</button>
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

