<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="home_style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"/>
<title>Facility | Computer Science Department</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    .nav-ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      overflow: hidden;
      background-color: #111;
    }
    
    .nav-li {
      float: left;
    }
    
    .nav-li a {
      display: block;
      color: white;
      text-align: center;
      padding: 20px 20px;
      padding-left: 20px;
      transition: 0.5s;
      font-size: 18px;
      text-decoration: none;
    }
    
    .nav-li a:hover:not(.active) {
      background-color: rgb(235, 12, 12);
    }
    </style>
</head>
<body>
    <div class="fixed-header">
       <a href="home.htm"><img src="logo.png" alt=""></a>
    </div>
    
    <div class="container" style="margin-top: 12px;">
        <div>
            <ul class="nav-ul">
            <li class="nav-li"><a href="home.htm">Home</a></li>
            <li class="nav-li"><a href="programme.php">Programme</a></li>   
                <li class="nav-li"><a href="facility.php">Facilities</a></li>
                <li class="nav-li"><a href="administration.php">Administration</a></li>
                <li class="nav-li"><a href="students.php">Students</a></li>
                <li class="nav-li"><a href="placements.php">Placements</a></li>
                <li class="nav-li"><a href="events.php">Events</a></li>
                <li class="nav-li"><a href="contact.htm">Contact Us</a></li>
            </ul>
        </div>

        <div style="margin: 1%;">
            <div class="tab2">
                <button class="tablinks1" onclick="facility(event, 'gf')">General Facilities</button>
                <button class="tablinks1" onclick="facility(event, 'lf')">Lab Facilities</button>
            </div>
      
              <div id="gf" class="tabcontent1" style="display: block;">
                <p>The department is equipped with state-of-the-art facilities to encourage research and to enable students to learn,
                   understand and apply concepts.</p>
                
                <h3>Meeting Room and Seminar Hall:</h3><hr>
                <p>The department has a meeting room equipped with LCD Projector and teleconferencing facilities.
                   The department also has a Seminar Hall which has a seating capacity of 100.
                    The seminar hall is used for conducting classes, seminars and workshops etc.</p>
      
                <h3>Department Library: </h3><hr>
                <p>Apart from the central library with e-library facility, the CSE dept library also has about 2500 books.</p>
      
                <h3>Computing Facility:</h3><hr>
                <p>The department has a data centre equipped with high end server systems.</p>
      
                <h3>Networking: </h3><hr>
                <p>Backbone connectivity consisting of 24 Port Brocade  make L3 Manageable distribution switch with
                    SMF modules,  besides more than 14 L3/L2 Network Switches, used for Network connectivity for
                     the entire building . The LAN which in turn connected to the campus wide internet connectivity
                      through Central Computer Centre of the Institute. </p>
      
                <h3>Printer/Other Perpherals:</h3><hr>
                <p>There are more than 15 LaserJet Printers,  LCD Projector, 40” LCD TV, 65" LFD TV  etc
                   for academic activities support.</p>
              </div>
      
              <div id="lf" class="tabcontent1" style="display: none;">
                <p>The department has 11 labs which cater to the needs of all UG/PG students and Research scholars.
                   The labs are accessible to the research scholars 24/7 and are equipped with the latest systems
                    and peripherals like printers and scanners. Every system operates on WIndows and Linux operating
                     systems and provide students access to a variety of softwares with internet(both wired and wireless)
                      connectivity. </p>
      
                <h3>DATA CENTRE (L.No. 001)</h3><hr>
                <h3>UNDERGRADUATE LABORATORIES</h3><hr>
                <ul>
                  <li>Microprocessor Lab (L.No. 101)</li>
                  <li>UG Lab-1(L.No. 401)</li>
                  <li>UG Lab-2(L.No.407) </li>
                  <li>UG Lab-3(L.No.501)</li>
                  <li>UG Lab-4(L.No.506)</li>
                </ul>
                <h3>POST GRADUATE LABORATORIES</h3><hr>
                <ul>
                  <li>Ist M.Tech Lab (L.No.302) </li>
                  <li>PG Project Lab.(L.No.311)</li>
                </ul>
                <h3>RESEARCH LABORATORIES</h3><hr>
                <ul>
                  <li>Research Lab -1 (L.No.201)</li>
                  <li>Research Lab -2 (L.No.301)</li>
                </ul>
                <h4>COMMON LABORATORIES(FOR PG/PhD/Other Research Project Labs)</h4>
                <ul>
                  <li>Information Security Lab(L.No.310)</li>
                  <li>Image and Speech Processing Lab(L.No.210)</li>
                </ul>
              </div>
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

<script>
      function facility(evt, pname) {
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent1");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablinks1");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
      }
      document.getElementById(pname).style.display = "block";
      evt.currentTarget.className += " active";
    }
</script>
</body>
</html> 

