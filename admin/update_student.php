<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="home_style.css">
<link rel="stylesheet" href="admin_login.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"/>
<title>Update Student</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <div class="fixed-header">
        <a href="admin_dashboard.htm?"><img src="logo.png" alt=""></a>
    </div>
   
    <!--*************************Edit This Div****************************-->
    <div class="container" style="margin-top: 50px; margin-bottom: 50px;">
        <center>
        <table style="width:50%;">
            <tr>
              <td>
                <form method="get" action="add_student.php">
                    <label for="rollno"><b>Show by Student Id:</b></label><br>
                    <input type="text" placeholder="Student Id" name="rollno" required style="width: 50%;">&nbsp;&nbsp;
                    <button type="submit" style="width: 20%; height: 40px; padding: 5px;" value="save">submit</button>
                </form>
              </td>
            </tr>
            <tr>
              <td>
                <form method="get" action="edit_btech_cse.php">
                    <button type="submit" style="border-radius: 12px;">Show Btech CSE Students</button>
                </form>
              </td>
            </tr>
            <tr>
              <td>
                <form method="get" action="edit_mtech_cse.php">
                    <button type="submit" style="border-radius: 12px;">Show Mtech CSE Students</button>
                </form>
              </td>
            </tr>
            <tr>
              <td>
                <form method="get" action="edit_mtech_csis.php">
                    <button type="submit" style="border-radius: 12px;">Show Mtech CSE-IS Students</button>
                </form>
              </td>
            </tr>
          </table>
        </center>
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

