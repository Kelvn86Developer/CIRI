<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/524640606a.js" crossorigin="anonymous"></script>

    @vite(['resources/css/app.css','resources/sass/app.scss', 'resources/js/navbar.js'])

    <title>IFM-CIRI</title>
</head>
<body>
    <div class="wrapper">
        <x-navbar></x-navbar>
        <div class="sub-nav-links">
            <ul class="d-flex-row">
                <li class="parent-lnk">Home > </li>
                <li class="parent-lnk">Innovations > </li>
                <li class="current-child-lnk">{{$allData['title']}}</li>
            </ul>
        </div>

        <section class="innovation-wrapper">
            <div class="innovation-container main-container">
                <div class="header-top d-flex-row">
                    <div class="left">
                        <h2 class="innovation-title">{{$allData['title']}}</h2>
                        <p class="sub-title">{{$allData['intro']}}</p> 
                    </div>

                    {{-- <div class="right">
                        <img src="../assets/illu05.png" alt="">
                    </div> --}}
                
                </div>

                <div class="bottom-desc">
                    <h4>Description</h4>
                    <br>
                    <p>{{$allData['desc']}}</p>
                    <br>
                </div>

                <div class="bottom-desc" style="box-shadow: 0 1px 6px rgba(0,0,0,0.1); padding: 1rem; border-radius: 8px; width: 96%;">
                    <h4>Functionalities</h4>
                    <br>
                    <div class="functionalities df-flex-wrap">
                        @foreach($allData['functionalities'] as $functionality)
                            <div class="functionality">
                                <h5>{{$functionality['name']}}</h5>
                                <p>{{$functionality['info']}}</p>
                            </div>
                        @endforeach
                    </div>
                
                </div>
            </div>
        </section>

        <!-- <section class="topSection">
            <div class="main-container d-flex-row">
                <div class="image-left">
                    <img src="assets/illu04.png" alt="">
                </div>

                <div class="title-right">
                    <h2>ICT INNOVATIONS</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam unde eligendi dignissimos!</p>
                </div>
            </div>
        </section> -->

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