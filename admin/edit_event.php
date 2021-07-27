<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="table.css">
<link rel="stylesheet" href="home_style.css">
<link rel="stylesheet" href="admin_login.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"/>
<title>Admin Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
	table{
	width: 100%;

	}
</style>

</head>
<body>
    <div class="fixed-header">
        <a href="admin_dashboard.htm"><img src="logo.png" alt=""></a>
    </div>
    
    <!--******************** Edit Content Here ********************-->
    <div class="container" style="margin-top: 12px;">
        <div style="margin: 5%;">

	
	<?php
        $con=mysqli_connect("localhost","root","","db1");
        // Check connection
        if (mysqli_connect_errno())
        {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
        
        $result = mysqli_query($con,"SELECT * FROM event_details");
        
        echo "<table  border='1'>
        <tr>
		<th>Event Id</th>
        <th>Event Type</th>
        <th>Title</th>
        <th>status</th>
        <th>Sponsored By</th>
        <th>Duration</th>
        <th>Date</th>
        <th>Place</th>
        <th>Organizer</th>
        <th>Edit</th>
        <th>Delete</th>

        </tr>";
        


        while($row = mysqli_fetch_array($result))
        {
        ?>
        <tr>
	   <td><?php echo $row['id']; ?> </td>
        <td><?php echo $row['event_type']; ?> </td>
        <td><?php echo $row['title']; ?> </td>
	<td><?php echo $row['status']; ?> </td>
	<td><?php echo $row['sponsored_by']; ?> </td>
        <td><?php echo $row['duration']; ?> </td>
        <td><?php echo $row['dates']; ?> </td>
        <td><?php echo $row['place']; ?> </td>
        <td><?php echo $row['organizer']; ?> </td>
        <th><a href="add_event.php?id=<?php echo $row['id']; ?>"><i class="fa fa-edit"></i></a></th>
        <th><a href="delete_event.php?id=<?php echo $row['id']; ?>"><i class="fa fa-trash"></i></a></th>
        </tr>

        <?php
        }
        ?>
        </table>
	


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

