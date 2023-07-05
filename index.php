<?php

?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="assets/css/styles.css">

        <!-- =====BOX ICONS===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


        <title>Jaliya Madusanka</title>
    </head>
    <body>
        <!--===== HEADER =====-->
        <header class="l-header">
            <nav class="nav bd-grid">
                <div>
                    <a href="#" class="nav__logo">JMB Ideas</a>
                </div>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="#home" class="nav__link active">Home</a></li>
                        <li class="nav__item"><a href="#about" class="nav__link">About</a></li>
                        <li class="nav__item"><a href="#skills" class="nav__link">Skills</a></li>
                        <li class="nav__item"><a href="#work" class="nav__link">Work</a></li>
                        <li class="nav__item"><a href="#contact" class="nav__link">Contact</a></li>
                    </ul>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>
            </nav>
        </header>

        <main class="l-main">
            <!--===== HOME =====-->
            <section class="home bd-grid" id="home">
                <div class="home__data">
                    <h1 class="home__title">Hi,<br>I'am <span class="home__title-color">Jaliya</span><br>Software Developer</h1>

                    <a href="assets/cv/JALIYA MADUSANKA BANDARA.pdf" class="button">Download CV</a>
                </div>

                <div class="home__social">
                    <a href="https://www.linkedin.com/in/jaliyamadusanka/" class="home__social-icon"><i class='bx bxl-linkedin'></i></a>
                    <a href="https://github.com/Jaliya98" class="home__social-icon"><i class='bx bxl-github' ></i></a>
                </div>

                <div class="home__img">
                    <svg class="home__blob" viewBox="0 0 479 467" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <mask id="mask0" mask-type="alpha">
                            <path d="M9.19024 145.964C34.0253 76.5814 114.865 54.7299 184.111 29.4823C245.804 6.98884 311.86 -14.9503 370.735 14.143C431.207 44.026 467.948 107.508 477.191 174.311C485.897 237.229 454.931 294.377 416.506 344.954C373.74 401.245 326.068 462.801 255.442 466.189C179.416 469.835 111.552 422.137 65.1576 361.805C17.4835 299.81 -17.1617 219.583 9.19024 145.964Z"/>
                        </mask>
                        <g mask="url(#mask0)">
                            <!--<path d="M9.19024 145.964C34.0253 76.5814 114.865 54.7299 184.111 29.4823C245.804 6.98884 311.86 -14.9503 370.735 14.143C431.207 44.026 467.948 107.508 477.191 174.311C485.897 237.229 454.931 294.377 416.506 344.954C373.74 401.245 326.068 462.801 255.442 466.189C179.416 469.835 111.552 422.137 65.1576 361.805C17.4835 299.81 -17.1617 219.583 9.19024 145.964Z"/>-->
                            <image class="home__blob-img" x="50" y="60" href="assets/img/profil.jpg"/>
                        </g>
                    </svg>
                </div>
            </section>

            <!--===== ABOUT =====-->
            <section class="about section " id="about">
                <h2 class="section-title">About</h2>

                <div class="about__container bd-grid">
                    <div class="about__img">
                        <img src="assets/img/profil.jpg" alt="">
                    </div>
                    
                    <div>
                        <h2 class="about__subtitle">I'am Jaliya Madusanka</h2>
                        <p class="about__text">My name is Jaliya Madusanka,currently I am learning software engineering at NSBM University in Sri Lanka.<br>After learning web desing in university and work with some web related project I got experience to build website my self. I love coding and desing creative content for website.If I am not codeing probably you can see I'm playing table tennis or hanging with my friends.I like to volunteering  any IT related work to gain my experince.<br><h4>If you want to contact me contact me via social media or send me an email.</h4></p>           
                    </div>                                   
                </div>
            </section>

            <!--===== SKILLS =====-->
            <section class="skills section" id="skills">
                <h2 class="section-title">Skills</h2>

                <div class="skills__container bd-grid">          
                    <div>
                        <h2 class="skills__subtitle">Profesional Skills</h2>
                        <p class="skills__text">After Two year of university I learn these Languages,Also I still working on lnaguages to learn more </p>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxl-html5 skills__icon'></i>
                                <span class="skills__name">HTML5</span>
                            </div>
                            <div class="skills__bar skills__html">

                            </div>
                            <div>
                                <span class="skills__percentage"></span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxl-css3 skills__icon'></i>
                                <span class="skills__name">CSS3</span>
                            </div>
                            <div class="skills__bar skills__css">
                                
                            </div>
                            <div>
                                <span class="skills__percentage"></span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxl-javascript skills__icon' ></i>
                                <span class="skills__name">JAVASCRIPT</span>
                            </div>
                            <div class="skills__bar skills__js">
                                
                            </div>
                            <div>
                                <span class="skills__percentage"></span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxl-java skills__icon'></i>
                                <span class="skills__name">Java</span>
                            </div>
                            <div class="skills__bar skills__ux">
                                
                            </div>
                            <div>
                                <span class="skills__percentage"></span>
                            </div>
                        </div>
                         <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxl-php skills__icon'></i>
                                <span class="skills__name">Php</span>
                            </div>
                            <div class="skills__bar skills__ux">
                                
                            </div>
                            <div>
                                <span class="skills__percentage"></span>
                            </div>
                        </div>
                    </div>
                    
                    <div>              
                        <img src="assets/img/work3.jpg" alt="" class="skills__img">
                    </div>
                </div>
            </section>

            <!--===== WORK =====-->
            <section class="work section" id="work">
                <h2 class="section-title">Work</h2>

                <div class="work__container bd-grid">
                    <a href="https://github.com/Jaliya98/ministyofcoffee.git" class="work__img">
                        <img src="assets/img/work1.jpg" alt="">
                    </a>
                    <a href="https://github.com/Jaliya98/newtest.git" class="work__img">
                        <img src="assets/img/work2.jpg" alt="">
                    </a>
                    <a href="https://blessinghearts.ca/" class="work__img">
                        <img src="assets/img/work13.png" alt="">
                    </a>
                    <!--<a href="" class="work__img">
                        <img src="assets/img/work4.jpg" alt="">
                    </a>
                    <a href="" class="work__img">
                        <img src="assets/img/work5.jpg" alt="">
                    </a>
                    <a href="" class="work__img">
                        <img src="assets/img/work6.jpg" alt="">
                    </a>-->
                </div>
            </section>
            
            <!--===== BLOG =====-->

            <section>
                <a href="https://jaliyamadusanka.blogspot.com/"><h2 class="section-title">Viste My Blog</h2></a>
                <p align="center"><iframe src="https://jaliyamadusanka.blogspot.com/" width="1000" height="400"></iframe></p>
            </section>

            <!--===== CONTACT =====-->
            <section class="contact section" id="contact">
                <h2 class="section-title">Contact</h2>

                <div class="contact__container bd-grid">
                    <form action="" class="contact__form">
                    <center>
                        <a href="https://www.facebook.com/jaliya.madusanka.9/" class="footer__icon"><i class='bx bxl-facebook' ></i></a>
                        <a href="https://www.instagram.com/jaliya_madusanka98/" class="footer__icon"><i class='bx bxl-instagram' ></i></a>
                        <!--<a href="#" class="footer__icon"><i class='bx bxl-twitter' ></i></a>-->
                        <br>
                        <p>Contact Via Email</p>
                        <a href="mailto:rmjmbandara@gmail.com"><i class="fa fa-envelope" style="font-size:24px"></i></a>     
                    </center>
                    </form>
                </div>
            </section>
        </main>

        <!--===== FOOTER =====-->
        <footer class="footer">
            <!--<p class="footer__title">Jaliya</p>
            <div class="footer__social">
                <a href="#" class="footer__icon"><i class='bx bxl-facebook' ></i></a>
                <a href="#" class="footer__icon"><i class='bx bxl-instagram' ></i></a>
                <a href="#" class="footer__icon"><i class='bx bxl-twitter' ></i></a>
            </div>-->
            <p class="footer__copy">&#169; J.M.B.Ideas  All rigths reserved</p>
        </footer>


        <!--===== SCROLL REVEAL =====-->
        <script src="https://unpkg.com/scrollreveal"></script>

        <!--===== MAIN JS =====-->
        <script src="assets/js/main.js"></script>
    </body>
</html>
