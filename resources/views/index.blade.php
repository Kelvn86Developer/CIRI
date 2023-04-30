<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <!-- Fonts -->
         <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

         <script src="https://kit.fontawesome.com/524640606a.js" crossorigin="anonymous"></script>
      @vite(['resources/css/app.css','resources/sass/app.scss', 'resources/js/app.js', 'resources/js/navbar.js'])

    <title>IFM-CIRI</title>
     <!-- Latest compiled and minified CSS -->
</head>
<body>
    <div class="wrapper">
    <x-navbar></x-navbar>
    <!-- hero section starts here -->
    <section class="hero" id="home">
    <x-side-dots-nav></x-side-dots-nav>
    <div class="main-container d-flex-row reveal activeReveal">
    <div class="right">
            <img src="assets/Idea_concept-removebg-preview.png" alt="">
            <div class="ciri-activities">
                <div class="activity reveal">
                    <span class="num">1</span>
                    <p>Research to address societal problems</p>
                </div>
                <div class="activity activity-2 reveal">
                    <span class="num">2</span>
                    <p>professional courses to enhance capacity</p>
                </div>
                <div class="activity reveal">
                    <span class="num">3</span>
                    <p>Innovating digital solutions</p>
                </div>
            </div>
        </div>

        <div class="left d-flex-col">
          <div class="hero-heading">
            <h1>CENTER FOR ICT, RESEARCH & <span>INNOVATION</span> ( CiRI ) </h1>
          </div>
          <p>To provide high-quality digital business solutions that contribute to socia-economic development</p>

          <div class="btn">
            <button><a href="#innovations">Our innovations</a></button>
          </div>
        </div>

      
    </div>
    </section>
    <!-- hero section ends here -->

    <!-- clients starts here -->
    <div class="our-clients reveal">
        <div class="clients main-container d-flex-row df-flex-wrap ">
            <div class="client">
                <img src="assets/client01.png" alt="">
            </div>
            <div class="client">
                <img src="assets/client02.png" alt="">
            </div>
            <div class="client">
                <img src="assets/client03.png" alt="">
            </div>
            <div class="client">
                <img src="assets/client05.png" alt="">
            </div>
            <div class="client">
                <img src="assets/client06.png" alt="">
            </div>
        </div>
    </div>
    <!-- clients ends here -->

   <!-- RESEARCH AREAS SECTION STARTS HERE -->
    <section class="research-areas" id="research">
    <x-side-dots-nav></x-side-dots-nav>
        <div class="main-container d-flex-col reveal">
            <div class="heading d-flex-col">
                 <small>RESEARCH</small>
                 <h2>RESEARCH <span>AREAS</span></h2>
                 <p>To foster applied ICT research to address societal problems. we conduct research activities in various fields such as</p>
            </div>

            <div class="contents d-flex-row df-flex-wrap">
                 <div class="content-card">
                   <ul>
                    <li>
                        <img src="assets/pointer.png" alt="">
                        <p>Data analytics</p>
                    </li>
                    <li>
                        <img src="assets/pointer.png" alt="">
                        <p>Data protection and privacy</p>
                    </li>
                    <li>
                        <img src="assets/pointer.png" alt="">
                        <p>Cyber security</p> 
                    </li>
                   </ul>
                 </div>

                 <div class="content-card">
                   <ul>
                    <li>
                        <img src="assets/pointer.png" alt="">
                        <p>Cloud computing</p>
                    </li>
                    <li>
                        <img src="assets/pointer.png" alt="">
                        <p>Wireless networks</p>
                    </li>
                    <li>
                        <img src="assets/pointer.png" alt="">
                        <p>Internet of things</p> 
                    </li>
                   </ul>
                 </div>

                 <div class="content-card">
                   <ul>
                    <li>
                        <img src="assets/pointer.png" alt="">
                        <p>E-services</p>
                    </li>
                    <li>
                        <img src="assets/pointer.png" alt="">
                        <p>ICT Governance</p>
                    </li>
                    <li>
                        <img src="assets/pointer.png" alt="">
                        <p>Blockchain technology</p> 
                    </li>
                    <li>
                        <img src="assets/pointer.png" alt="">
                        <p>Digital payments</p> 
                    </li>
                 
                   </ul>
                 </div>

            </div>
        </div>
    </section>
    <!-- RESEARCH AREAS SECTION ENDS HERE -->
    <!-- PROFESSIONAL COURSES SECTION STARTS HERE -->
    <section class="courses" id="courses">
    <x-side-dots-nav></x-side-dots-nav>
        <div class="main-container d-flex-col reveal">
            <div class="heading d-flex-col">
                 <small>Courses</small>
                 <h2>PROFESSIONAL <span>COURSES</span></h2>
                 <p>To enhance capacity of ICT professionals and cultive entrepreneurship and innovative culture, we offer the following short courses</p>
            </div>

            <div class="contents d-flex-row df-flex-wrap">
                 <div class="content-card">
                   <ul>
                    <li>
                        <img src="assets/pointer.png" alt="">
                        <p>Business data analytics </p>
                    </li>
                    <li>
                        <img src="assets/pointer.png" alt="">
                        <p>Business data visualization</p>
                    </li>
                    <li>
                        <img src="assets/pointer.png" alt="">
                        <p>Business intelligence</p> 
                    </li>
                    <li>
                        <img src="assets/pointer.png" alt="">
                        <p>Digital marketing</p> 
                    </li>
                   </ul>
                 </div>

                 <div class="content-card">
                   <ul>
                    <li>
                        <img src="assets/pointer.png" alt="">
                        <p>Cyber security</p>
                    </li>
                    <li>
                        <img src="assets/pointer.png" alt="">
                        <p>Digital forensics</p>
                    </li>
                    <li>
                        <img src="assets/pointer.png" alt="">
                        <p>Network administration</p> 
                    </li>
                   </ul>
                 </div>

                 <div class="content-card">
                   <ul>
                    <li>
                        <img src="assets/pointer.png" alt="">
                        <p>Mobile app development</p>
                    </li>
                    <li>
                        <img src="assets/pointer.png" alt="">
                        <p>Web application development</p>
                    </li>
                    <li>
                        <img src="assets/pointer.png" alt="">
                        <p>Blockchain technology</p> 
                    </li>
                    <li>
                        <img src="assets/pointer.png" alt="">
                        <p>Info-graphics design</p> 
                    </li>
                 
                   </ul>
                 </div>

            </div>
        </div>
    </section>
   <!-- PROFESSIONAL COURSES SECTION ENDS HERE -->

    <!-- INNOVATIONS SECTION STARTS HERE -->
    <section class="innovationsSection" id="innovations">
    <x-side-dots-nav></x-side-dots-nav>

        <div class="main-container d-flex-col reveal">
            <div class="heading d-flex-col">
                <small>Innovations</small>
                <h2>OUR <span>DIGITAL </span>INNOVATIONS </h2>
                <p>To provide innovative digital solutions for socio-economic development, we develop various innovative digital solutions. The following are selected innovative solutions</p>
               
            </div>
            <div class="contents df-flex-wrap">
                <div class="content">
                    <span class="num">
                        1
                    </span>

                    <div class="desc">
                        <h4>water incident system</h4>
                        
                        <p>The system to register parcels and monitor their transportation to desired destinations</p>
                        <a href="/viewInnovation/WaterIncidentMS" style="color: blue">view more</a>

                    </div>
                </div>
                <div class="content">
                    <span class="num">
                        2
                    </span>

                    <div class="desc">
                        <h4>Academic ERP</h4>
                        <p>The system to register parcels and monitor their transportation to desired destinations</p>
                        <a href="/viewInnovation/AcademicERP" style="color: blue">view more</a>
                    </div>
                </div>
                <div class="content">
                    <span class="num">
                        3
                    </span>

                    <div class="desc">
                        <h4>Barcode access control system</h3>
                        <p>The system to register parcels and monitor their transportation to desired destinations</p>
                        <a href="/viewInnovation/BarcodeAccessControl" style="color: blue">view more</a>
                    </div>
                </div>
                <div class="content">
                    <span class="num">
                        4
                    </span>

                    <div class="desc">
                        <h4>Cargo Management system</h4>
                        <p>The system to register parcels and monitor their transportation to desired destinations</p>
                        <a href="/viewInnovation/CargoManagementSystem" style="color: blue">view more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- INNOVATIONS SECTION ENDS HERE -->

      <!-- ABOUT US SECTION STARTS HERE -->
    <section class="about-us" id="about-us">
    <x-side-dots-nav></x-side-dots-nav>
        <div class="main-container d-flex-col reveal">
            <div class="heading d-flex-col">
               <small>about us</small>
               <h2>CENTRE FOR ICT <span>RESEARCH</span> AND INNOVATION </h2>
            </div>

            <div class="contents d-flex-row df-flex-wrap">
            <p>The center for ICT research and innovation( CIRI ) , under the faculty of computing, information systems and mathematics of institute of finance management, is a think tank aiming at providing digital business solutions and reducing a digital divide</p>

            <div class="content-card">
                   <ul>
                    <li>
                        <img src="assets/pointer.png" alt="">
                        <p>Business data analytics </p>
                    </li>
                    <li>
                        <img src="assets/pointer.png" alt="">
                        <p>Business data visualization</p>
                    </li>
                    <li>
                        <img src="assets/pointer.png" alt="">
                        <p>Business intelligence</p> 
                    </li>
                    <li>
                        <img src="assets/pointer.png" alt="">
                        <p>Digital marketing</p> 
                    </li>
                   </ul>
                 </div>
            </div>
        </div>
    </section>
     <!-- ABOUT US SECTION STARTS HERE -->


    <!-- CONTACT SECTION STARTS HERE -->
    <section class="contact-section" id="contact">
    <x-side-dots-nav></x-side-dots-nav>
        <div class="main-container d-flex-col reveal">
            <div class="heading d-flex-col">
               <small>Contact</small>
               <h2>GET IN TOUCH WITH <span>CIRI</span></h2>
            </div>

            <div class="contents d-flex-col df-flex-wrap">
            <div class="content d-flex-row">
                    <img src="assets/postOffice.png" alt="">
                    <div class="data">
                        <p>P.O Box 3918,</p>
                        <p>Shabaan Robert Street</p>
                        <p>11101 Dar es salaam </p>
                        <p>Tanzania</p>
                    </div>
                  </div>

                  <div class="content d-flex-row">
                    <img src="assets/phone.png" alt="">
                    <div class="data">
                        <p>+255 22 2112931-4</p>
                        <p>+255 22 21129315</p>
                    </div>
                  </div>

                  <div class="content d-flex-row">
                    <a href="#">
                        <img src="assets/globe.png" alt="">
                        www.ciri.ifm.ac.tz
                    </a>
                  </div>

                  <div class="content d-flex-row">
                    <img src="assets/mail.png" alt="">
                    <div class="data">
                        <a href="">rector@ifm.ac.tz</a>
                    </div>
                  </div>
            </div>
        </div>
    </section>
     <!-- CONTACT SECTION ENDS HERE -->

     <!-- FOOTER STARTS HERE -->

     <footer>
        <div class="footer-colored">
        <div class="main-container d-flex-row df-flex-wrap">
           <div class="data">
            <h2>REACH US</h2>
            <ul>
                <li><a href="#">P.O Box 3819</a></li>
                <li><a href="#">Shabaan Robert Street</a></li>
                <li><a href="#">+255 22 2112931-4</a></li>
                <li><a href="#">+255 22 21129315</a></li>
                <li><a href="#">rector@ifm.ac.tz</a></li>
            </ul>
           </div>

           <div class="data">
            <h2>ICT SERVICE</h2>
            <ul>
                <li><a href="#">Student EMS</a></li>
                <li><a href="#">E-learning</a></li>
                <li><a href="#">IFM Alumni</a></li>
                <li><a href="#">Admission system</a></li>
                <li><a href="#">Online registration</a></li>
                <li><a href="#">Payment portal</a></li>
            </ul>
           </div>

           <div class="data">
            <h2>FACULTIES</h2>
            <ul>
                <li><a href="#">Faculty of computing information system and mathematics</a></li>
                <li><a href="#">Faculty of Accounting, Banking and Finance</a></li>
                <li><a href="#">Faculty of economics and management science </a></li>
                <li><a href="#">Faculty of Insurance and Social Protection </a></li>
            </ul>
           </div>
        </div>
        </div>
       
     </footer>
     <!-- FOOTER ENDS HERE -->
    </div>
   

 

    
</body>
</html>