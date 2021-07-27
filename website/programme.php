<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="home_style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"/>
<title>Programmes | Computer Science Department</title>
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
            <div class="tab1">
                <button class="tablinks1" onclick="Programme(event, 'btech')">B-Tech</button>
                <button class="tablinks1" onclick="Programme(event, 'mtech')">M-Tech</button>
              </div>
              
              <div id="btech" class="tabcontent1" style="display:block;">
                <h3>B.Tech(Computer Science and Engineering)</h3><hr>
                <p>The B.Tech in Computer Science and Engineering is one of the most popular programmes at N.I.T.K Surathkal.
                   The programme was stated in 1986 and has been designed to cater to global demands and offers a balanced
                   coverage of hardware and software systems.
                   The programme includes elective courses covering thrust areas such as Distributed Systems & Computing,
                   Parallel Architectures & High performance computing, High-Speed Networks, Designing with Network Processors,
                   Security and Embedded Systems Cloud Computing etc. The B.Tech.
                   programme enjoys an enviable placement of almost 100% year after year.
                   About 25 to 35% of the students pursue higher studies after their graduation,
                   mostly in U.S with scholarship and even without fellowship.</p>
  
                <p><span style="color: rgb(83, 82, 82);">Average Intake (per year):110</span></p>
                <p><span style="color: rgb(83, 82, 82);">Admission : Through JEE(Main) as per guidelines of MHRD</span></p>
                <p><a href="https://www.nitk.ac.in/document/attachments/1532/UG-Curriculum-2019.pdf" target="_blank">B.Tech Curriculum [2019] </a></p>
                <p><a href="https://www.nitk.ac.in/Curriculum">Curriculum Archive</a></p>
                <p><a href="https://www.nitk.ac.in/Academic_Calendars">Academic Calendar:</a><span style="color: rgb(83, 82, 82);"> B.Tech.[2020]</span></p>
                
                <h3>Programme Educational Objectives (PEOs)</h3><hr>
                  <ul>
                    <li>To provide students with sound foundations in Basic Sciences and fundamentals in Engineering Sciences.</li>
                    <li>To inculcate strong problem solving skills through the courses of CSE.</li>
                    <li>To provide students with hands on experience in implementing various software development concepts.</li>
                    <li>Train the students in project based assignments.</li>
                    <li>To impress upon students the importance of good ethical practices, right professional conduct and responsible team leadership.</li> 
                  </ul>
  
                <h3>Programme Outcomes(POs)</h3><hr>
                  <ul>
                    <li>Ability to apply knowledge of computing, mathematics, science and engineering fundamentals to the solution of complex engineering problems.</li>
                    <li>Ability to formulate and analyze a problem, and define the computing requirements appropriate to its solution using basic principles of mathematics, science and computer engineering.</li>
                    <li>Ability to design, implement, and evaluate a computer based system, process, component, or software to meet the desired needs.</li>
                    <li>Ability to design and conduct research based experiments, perform analysis and interpretation of data and provide valid conclusions.</li>
                    <li>Ability to use current techniques, skills, and tools necessary for computing practice.</li>
                    <li>Understanding of legal, health, security, cultural and social issues, and the consequent responsibilities relevant to the professional engineering practice.</li>
                    <li>Understanding of the impact of professional engineering solutions on environmental context and the need for sustainable development.</li>
                    <li>Understanding and commitment towards the professional and ethical responsibilities of an engineer.</li>
                    <li>Ability to function effectively as an individual, and as a team member / leader in accomplishing a common goal.</li>
                    <li>Ability to communicate effectively, make effective presentations and write and comprehend technical reports and publications.</li>
                    <li>Ability to learn and adopt new technologies, and use them effectively towards continued professional development throughout the life.</li>
                    <li>Understanding of engineering and management principles and their application to manage projects in the software industry.</li>
                  </ul>
              </div>
              
              <div id="mtech" class="tabcontent1" style="display: none;">
                <h3>M.Tech(CSE) and M.Tech(CSE-IS)</h3><hr>
                <p>The department offers two post-graduate courses - M.Tech. in Computer Science and Engineering (CSE) 
                  and M.Tech in Computer Science and Engineering - Information Security (CSE-IS).</p>
                  <p>Admission through GATE -  as per guidelines of MHRD</p>
                  <p><a href="https://www.nitk.ac.in/Curriculum"> M.Tech Curriculum [2019]</a></p>
                  <p><span style="color: rgb(83, 82, 82);">Academic Calender:</span><a href="https://www.nitk.ac.in/Academic_Calendars"> M.Tech. [2020] </a></p>
  
               <h3>M.Tech. (Computer Science and Engineering)</h3><hr>
               <p>The M.Tech.(CSE) is a four semester course and was started in 1996.
                  The course is aimed at providing a comprehensive overview of the recent
                   developments in various frontier areas of Computer Science and Engineering
                    including Computer Architecture, Software Systems, Parallel and Distributed
                     Computing and Networking with Web Technologies. To provide a sound basis,
                      sufficient amount of theoretical input is also given to the students.
                       Another feature of the programme is that the students will have ample
                        opportunity to carry out research & software development in the labs.</p>  
                <p>Average Intake (per year) : 27</p>
  
               <h3>M.Tech. (Computer Science and Engineering - Information Security)</h3><hr>
               <p>M.Tech(CSE-IS) is a four semester course aimed to focus on the recent developments in the areas
                  of Information Security. The course was offered for the first time in 2007. The curriculum for
                   these P.G programmes has been carefully crafted to cater the need of those students who are
                    admitted with their basic degree in computing. In other words, care is taken, not to repeat
                     the same, good old courses of U.G in the P.G level.</p>
                     <p>Average Intake (per year) : 27</p>
  
                <h3>M.Tech (By Research)</h3><hr>
                  <p>M.Tech (By Research) programme was started in 2011 and is aimed at students interested more in
                     exposure to research in various fields of Computer Science & Engineering. It emphasizes research
                      work, providing students a distinctive opportunity to undertake research work and innovation.</p>
                      <p>Average Intake (per year) : 2 - 4</p>
  
                <h3>Programme Educational Objectives (PEOs)</h3><hr>
                <ul>
                  <li>Analyze, design and create computing solutions for scientific and multidisciplinary engineering challenges.</li>
                  <li>Pursue a successful career in industry/academia/research/government driven by strong foundations and in-depth domain knowledge and  contribute to the engineering sphere as a competent professional.</li>
                  <li>Demonstrate an exceptional involvement and active participation in Research and Development leading to new innovations and optimized solutions.</li>
                  <li>Engage in lifelong learning with persistent scientific temper for professional advancement and effective communication of the technical information.</li>
                  <li>Work effectively in multi-disciplinary and multi-cultural environments by respecting professionalism and ethical practices within organization and society at national and international level.</li>
                </ul>
                
                <h3>Programme Outcomes (POs)</h3><hr>
                <p>After the completion of the M.Tech. programme, the post graduates of the Computer Science and Engineering department will</p>
                <ul>
                  <li>Apply knowledge of mathematics and principles of computing in the design and development of software and hardware systems of varying complexity.</li>
                  <li>Enhance skills and continuously acquire advanced knowledge in Computer Science, multidisciplinary and interdisciplinary domains for professional excellence.</li>
                  <li>Identify, formulate and critically study the problem, design and develop efficient algorithms, conduct experiments, analysing the results and  applying the knowledge to different domains.</li>
                  <li>Apply current techniques, skills and modern engineering tools to build robust, reliable, maintainable, scalable and efficient computing systems  by considering social, environmental, economic, and security constraints.</li>
                  <li>Critically analyze existing literature in an area of specialization, conduct investigative research to develop innovative methodologies to tackle  issues identified and contribute to the development of technological knowledge and intellectual property.</li>
                  <li>Manage and execute complex engineering projects under economic, time and performance constraints.</li>
                  <li>Contribute and communicate effectively in multidisciplinary and multicultural scenarios.</li>
                  <li>Become a complete professional with high integrity and ethics, with excellent professional conduct and with empathy towards the environmental and social needs.</li>
                  <li>Critically evaluate the outcomes of one's actions and apply self corrective measures to improve the performance.</li>
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
      function Programme(evt, pname) {
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

