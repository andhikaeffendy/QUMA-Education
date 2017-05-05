<?php
    include("koneksi.php");
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Always force latest IE rendering engine -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Meta Keyword -->
        <meta name="keywords" content="one page, business template, single page, onepage, responsive, parallax, creative, business, html5, css3, css3 animation">
        <!-- meta character set -->
        <meta charset="utf-8">

        <!-- Site Title -->
        <title>QUMA Education</title>
        
        <!--
        Google Fonts
        ============================================= -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700" rel="stylesheet" type="text/css">
		
        <!--
        CSS
        ============================================= -->
        <!-- Fontawesome -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <!-- Bootstrap -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Fancybox -->
        <link rel="stylesheet" href="css/jquery.fancybox.css">
        <!-- owl carousel -->
        <link rel="stylesheet" href="css/owl.carousel.css">
        <!-- Animate -->
        <link rel="stylesheet" href="css/animate.css">
        <!-- Main Stylesheet -->
        <link rel="stylesheet" href="css/main.css">
        <!-- Main Responsive -->
        <link rel="stylesheet" href="css/responsive.css">
		
		
		<!-- Modernizer Script for old Browsers -->
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
		
    </head>
	
    <body>

        <!--
        Fixed Navigation
        ==================================== -->
        <header id="navigation" class="navbar-fixed-top">
            <div class="container">

                <div class="navbar-header">
                    <!-- responsive nav button -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- /responsive nav button -->

                    <!-- logo -->
                    <h1 class="navbar-brand">
                        <a href="#body">
                            <img src="img/logo_asli.png" alt="Kasper Logo">
                        </a>
                    </h1>
                    <!-- /logo -->

                    </div>

                    <!-- main nav -->
                    <nav class="collapse navigation navbar-collapse navbar-right" role="navigation">
                        <ul id="nav" class="nav navbar-nav">
                            <li class="current"><a href="#home">Home</a></li>
                            <li><a href="#service">About</a></li>
                            <li><a href="#portfolio">Materi</a></li>
                            <li><a href="#about">Quiz</a></li>
                            <li><a href="logout.php">Logout</a></li>
                        </ul>
                    </nav>
                    <!-- /main nav -->
                </div>

            </div>
        </header>
        <!--
        End Fixed Navigation
        ==================================== -->
        
        

        <!--
        Home Slider
        ==================================== -->
        <section id="home">     
            <div id="home-carousel" class="carousel slide" data-interval="false">
                <ol class="carousel-indicators">
                    <li data-target="#home-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#home-carousel" data-slide-to="1"></li>
                    <li data-target="#home-carousel" data-slide-to="2"></li>
                </ol>
                <!--/.carousel-indicators-->

                <div class="carousel-inner">

                    <div class="item active"  style="background-image: url('img/slider/1.jpg')" >
                        <div class="carousel-caption">
                            <div class="animated bounceInRight">
                                <h2>HELLO STUDENT! <br>WE ARE BOLD INFORMATICS, WE WANT HELP YOU TO INCREASE YOUR KNOWLEGE.</h2>
                                <p>to increase knowledge and insight you about the daily lessons.</p>
                            </div>
                        </div>
                    </div>              

                    <div class="item" style="background-image: url('img/slider/2.jpg')">                
                        <div class="carousel-caption">
                            <div class="animated bounceInDown">
                                <h2>HELLO STUDENT! <br>WE ARE BOLD INFORMATICS, WE WANT TO HELP YOU HONE SCIENCE.</h2>
                                <p>by mastering your knowledge with subjects you have covered everyday.</p>
                            </div>
                        </div>
                    </div>

                    <div class="item" style="background-image: url('img/slider/3.jpg')">                 
                         <div class="carousel-caption">
                            <div class="animated bounceInUp">
                                <h2>HELLO STUDENT! <br>WE ARE BOLD INFORMATICS, WE WANT TO HELP YOU LEARN BY USING TECHNOLOGY.</h2>
                                <p>by using the internet facility, you can add insight and learn more easily.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/.carousel-inner-->
                <nav id="nav-arrows" class="nav-arrows hidden-xs hidden-sm visible-md visible-lg">
                    <a class="sl-prev hidden-xs" href="#home-carousel" data-slide="prev">
                        <i class="fa fa-angle-left fa-3x"></i>
                    </a>
                    <a class="sl-next" href="#home-carousel" data-slide="next">
                        <i class="fa fa-angle-right fa-3x"></i>
                    </a>
                </nav>

            </div>
        </section>
        <!--
        End #home Slider
        ========================== -->

        
        <!--
        #service
        ========================== -->
        <section id="service">
            <div class="container">
                <div class="row">

                    <div class="section-title text-center wow fadeInUp">
                        <h2>About Us</h2>    
                        <p>We provide materials and quiz features so students can learn and train their knowledge.</p>
                    </div>
                    
                    <div class="about-us text-center wow fadeInDown">
                        <img src="img/about.png" alt="About Us" class="img-responsive">
                    </div>
                </div>
            </div>
        </section>
        <!--
        End #service
        ========================== -->

        <!--
        #Portfolio
        ========================== -->
        
        <section id="portfolio">

            <div class="section-title text-center wow fadeInDown">
                <h2>Materi</h2>    
                <p>Contains a summary of the lessons you learned.</p>
            </div>
            
            <nav class="project-filter clearfix text-center wow fadeInLeft"  data-wow-delay="0.5s">
                <ul class="list-inline">
                    <li><a href="javascript:;" class="filter" data-filter="all">All</a></li>
                    <li><a href="javascript:;" class="filter" data-filter=".sd">Primary school</a></li>
                    <li><a href="javascript:;" class="filter" data-filter=".smp">Junior high school</a></li>
                    <li><a href="javascript:;" class="filter" data-filter=".sma">Senior High School</a></li>
                </ul>
            </nav>

            <div id="projects" class="clearfix">

                <figure class="mix portfolio-item sd">
                    <img src="img/Matkul/matematika-sd.gif" width="294px" height="220px" alt="Portfolio Item">
                    <a href="materi/RingkasanMateriMatematikaSD.pdf" target="_blank" title="Mathematics (Primary High School)" rel="portfolio" class="fancybox"><span class="plus"></span></a>
                    <figcaption class="mask">
                        <h3>Mathematics</h3>
                        <span>Primary High School</span>
                    </figcaption>
                </figure>

                <figure class="mix portfolio-item smp">
                    <img src="img/Matkul/matematika-smp.jpg" width="294px" height="227px" alt="Portfolio Item">
                    <a href="materi/RangkumanMateriMatematikaSMP.pdf" target="_blank" title="Mathematics (Junior High School)" rel="portfolio" class="fancybox"><span class="plus"></span></a>
                    <figcaption class="mask">
                        <h3>Mathematics</h3>
                        <span>Junior High School</span>
                    </figcaption>
                </figure>

                <figure class="mix portfolio-item sma">
                    <img src="img/Matkul/matematika-sma.jpg" width="296px" height="227px" alt="Portfolio Item">
                    <a href="materi/RangkumanMateriMatematikaSMA.pdf" target="_blank" title="Mathematics (Senior High School)" rel="portfolio" class="fancybox"><span class="plus"></span></a>
                    <figcaption class="mask">
                        <h3>Mathematics</h3>
                        <span>Senior High School</span>
                    </figcaption>
                </figure>

                <figure class="mix portfolio-item sd">
                    <img src="img/Matkul/indonesia-sd.jpg" width="296px" height="227px" alt="Portfolio Item">
                    <a href="materi/RingkasanMateriBindoSD.pdf" target="_blank" title="Indonesian (Primary High School)" rel="portfolio" class="fancybox"><span class="plus"></span></a>
                    <figcaption class="mask">
                        <h3>Indonesian</h3>
                        <span>Primary High School</span>
                    </figcaption>
                </figure>

                <figure class="mix portfolio-item smp">
                    <img src="img/Matkul/indonesia%20smp.jpg" width="296px" height="227px" alt="Portfolio Item">
                    <a href="materi/RangkumanMateriBindoSMP.pdf" target="_blank" title="Indonesian (Junior High School)" rel="portfolio" class="fancybox"><span class="plus"></span></a>
                    <figcaption class="mask">
                        <h3>Indonesian</h3>
                        <span>Junior High School</span>
                    </figcaption>
                </figure>

               <figure class="mix portfolio-item smp">
                    <img src="img/Matkul/english-smp.jpg" width="296px" height="227px" alt="Portfolio Item">
                    <a href="materi/RangkumanMateriBingSMP.pdf" target="_blank" title="English (Junior High School)" rel="portfolio" class="fancybox"><span class="plus"></span></a>
                    <figcaption class="mask">
                        <h3>English</h3>
                        <span>Junior High School</span>
                    </figcaption>
                </figure>
                
               <figure class="mix portfolio-item smp">
                    <img src="img/Matkul/biologi-smp.png" width="296px" height="227px" alt="Portfolio Item">
                    <a href="materi/RangkumanMateriIPASMP.pdf" target="_blank" title="Title Six" rel="Biology (Junior High School)" class="fancybox"><span class="plus"></span></a>
                    <figcaption class="mask">
                        <h3>Natural Science</h3>
                        <span>Junior High School</span>
                    </figcaption>
                </figure>
                
                <figure class="mix portfolio-item sd">
                    <img src="img/Matkul/ipa.jpg" width="296px" height="227px" alt="Portfolio Item">
                    <a href="materi/RingkasanMateriIPASD.pdf" target="_blank" title="Natural Sciences (Primary High School)" rel="portfolio" class="fancybox"><span class="plus"></span></a>
                    <figcaption class="mask">
                        <h3>Natural Sciences</h3>
                        <span>Primary High School</span>
                    </figcaption>
                </figure>

                <figure class="mix portfolio-item sma">
                    <img src="img/Matkul/indonesia-sma.png" width="296px" height="227px" alt="Portfolio Item">
                    <a href="materi/RangkumanMateriBindoSMA.pdf" target="_blank" title="Indonesian (Senior High School)" rel="portfolio" class="fancybox"><span class="plus"></span></a>
                    <figcaption class="mask">
                        <h3>Indonesian</h3>
                        <span>Senior High School</span>
                    </figcaption>
                </figure>

                <figure class="mix portfolio-item sma">
                    <img src="img/Matkul/english-sma.jpg" width="296px" height="227px" alt="Portfolio Item">
                    <a href="materi/RangkumanMateriBingSMA.pdf" target="_blank" title="English (Senior High School)" rel="portfolio" class="fancybox"><span class="plus"></span></a>
                    <figcaption class="mask">
                        <h3>English</h3>
                        <span>Senior High School</span>
                    </figcaption>
                </figure>
                
                <figure class="mix portfolio-item sma">
                    <img src="img/Matkul/fisika-sma.jpg" width="296px" height="227px" alt="Portfolio Item">
                    <a href="materi/RangkumanMateriFisikaSMA.pdf" target="_blank" title="Physics (Senior High School)" rel="portfolio" class="fancybox"><span class="plus"></span></a>
                    <figcaption class="mask">
                        <h3>Physics</h3>
                        <span>Senior High School</span>
                    </figcaption>
                </figure>
                
                <figure class="mix portfolio-item sma">
                    <img src="img/Matkul/kimia.jpg" width="296px" height="227px" alt="Portfolio Item">
                    <a href="materi/RangkumanMateriKimiaSMA.pdf" target="_blank" title="Chemistry (Senior High School)" rel="portfolio" class="fancybox"><span class="plus"></span></a>
                    <figcaption class="mask">
                        <h3>Chemistry</h3>
                        <span>Senior High School</span>
                    </figcaption>
                </figure>
                
                <figure class="mix portfolio-item sma">
                    <img src="img/Matkul/biologi-sma.jpg" width="296px" height="227px" alt="Portfolio Item">
                    <a href="materi/RangkumanMateriBiologiSMA.pdf" target="_blank" title="Biology (Senior High School)" rel="portfolio" class="fancybox"><span class="plus"></span></a>
                    <figcaption class="mask">
                        <h3>Biology</h3>
                        <span>Senior High School</span>
                    </figcaption>
                </figure>
                
                <figure class="mix portfolio-item sma">
                    <img src="img/Matkul/ekonomi-sma.jpg" width="296px" height="227px" alt="Portfolio Item">
                    <a href="materi/RangkumanMateriEkonomiSMA.pdf" target="_blank" title="Economic (Senior High School)" rel="portfolio" class="fancybox"><span class="plus"></span></a>
                    <figcaption class="mask">
                        <h3>Economics</h3>
                        <span>Senior High School</span>
                    </figcaption>
                </figure>
                
                <figure class="mix portfolio-item sma">
                    <img src="img/Matkul/geografi-sma.jpg" width="296px" height="227px" alt="Portfolio Item">
                    <a href="materi/RangkumanMateriGeografiSMA.pdf" target="_blank" title="Geography (Senior High School)" rel="portfolio" class="fancybox"><span class="plus"></span></a>
                    <figcaption class="mask">
                        <h3>Geography</h3>
                        <span>Senior High School</span>
                    </figcaption>
                </figure>
                
                <figure class="mix portfolio-item sma">
                    <img src="img/Matkul/sosiologi.jpg" width="296px" height="227px" alt="Portfolio Item">
                    <a href="materi/RangkumanMateriSosiologiSMA.pdf" target="_blank" title="Sociology (Senior High School)" rel="portfolio" class="fancybox"><span class="plus"></span></a>
                    <figcaption class="mask">
                        <h3>Sociology</h3>
                        <span>Senior High School</span>
                    </figcaption>
                </figure>
                
            </div> <!-- end #projects -->

        </section>
        <!--
        End #Portfolio
        ========================== -->

        <!--
        #about
        ========================== -->
        <section id="about">
            <div class="container">
                <div class="row">

                    <div class="section-title text-center wow fadeInUp">
                        <h2>Quiz</h2>    
                        <p>Train students' understanding with the available exercise questions.</p>
                    </div>
                    
                    <div class="about-us text-center wow fadeInDown">
                        <img src="img/Quiz-Time.png" alt="About Us" class="img-responsive">
                    </div>
                </div>
            </div>
            
            
            
        </section>
        <!--
        End #about
        ========================== -->
        

        <!--
        #count
        ========================== -->
        
        <!--
        End #count
        ========================== -->

        <!--
        #about-us
        ========================== -->
        <section id="about-us">
            <div class="container">
                <div class="row">
                    
                    <div class="col-md-5 col-md-offset-1 wow fadeInLeft">

                        <div class="subtitle text-center">
                            <h3>Quiz</h3>
                            <p>Please select the quiz you want to work on.</p>
                        </div>

                        <div id="testimonial">
                            
                            <div class="tst-item clearfix">
                                <a href="matematika_sd.php">
                                <div class="tst-single clearfix">
                                    <img src="img/Matkul/matematika-sd.gif" class="img-circle">
                                    <div class="tst-content">
                                        <p>Mathematics</p>
                                        <span>Primary High Shcool</span>
                                    </div>
                                </div>
                                </a>
                                
                                <a href="bindo_sd.php">
                                <div class="tst-single clearfix">
                                    <img src="img/Matkul/indonesia-sd.jpg" class="img-circle">
                                    <div class="tst-content">
                                        <p>Indonesian.</p>
                                        <span>Primary High Shcool</span>
                                    </div>
                                </div>
                                </a>
                                
                                <a href="ipa_sd.php">
                                <div class="tst-single clearfix">
                                    <img src="img/Matkul/ipa.jpg" class="img-circle">
                                    <div class="tst-content">
                                        <p>Natural Science.</p>
                                        <span>Primary High Shcool</span>
                                    </div>
                                </div>
                                </a>

                            </div>

                            <div class="tst-item">
                                <a href="matematika_smp.php">
                                <div class="tst-single clearfix">
                                    <img src="img/Matkul/matematika-smp.jpg" class="img-circle">
                                    <div class="tst-content">
                                        <p>Mathematics.</p>
                                        <span>Junior High School</span>
                                    </div>
                                </div>
                                </a>
                                
                                <a href="#">
                                <div class="tst-single clearfix">
                                    <img src="img/Matkul/indonesia%20smp.jpg" class="img-circle">
                                    <div class="tst-content">
                                        <p>Indonesian.</p>
                                        <span>Junior High School</span>
                                    </div>
                                </div>
                                </a>
                                
                                <a href="#">
                                <div class="tst-single clearfix">
                                    <img src="img/Matkul/english-smp.jpg" class="img-circle">
                                    <div class="tst-content">
                                        <p>English.</p>
                                        <span>Junior High School</span>
                                    </div>
                                </div>
                                </a>
                                
                                <a href="ipa_smp.php">
                                <div class="tst-single clearfix">
                                    <img src="img/Matkul/biologi-smp.png" class="img-circle">
                                    <div class="tst-content">
                                        <p>Natural Science.</p>
                                        <span>Junior High School</span>
                                    </div>
                                </div>
                                </a>
                                
                            </div>

                            <div class="tst-item">
                                <a href="#">
                                <div class="tst-single clearfix">
                                    <img src="img/Matkul/matematika-sma.jpg" class="img-circle">
                                    <div class="tst-content">
                                        <p>Mathematics.</p>
                                    <span>Senior High School</span>
                                    </div>
                                </div>
                                </a>
                                
                                <a href="bindo_sma.php">
                                <div class="tst-single clearfix">
                                    <img src="img/Matkul/indonesia-sma.png" class="img-circle">
                                    <div class="tst-content">
                                        <p>Indonesian.</p>
                                        <span>Senior High School</span>
                                    </div>
                                </div>
                                </a>
                                
                                <a href="#">
                                <div class="tst-single clearfix">
                                    <img src="img/Matkul/english-sma.jpg" class="img-circle">
                                    <div class="tst-content">
                                        <p>English.</p>
                                        <span>Senior High School</span>
                                    </div>
                                </div>
                                </a>
                                
                                <a href="fisika_sma.php">
                                <div class="tst-single clearfix">
                                    <img src="img/Matkul/fisika-sma.jpg" class="img-circle">
                                    <div class="tst-content">
                                        <p>Physic.</p>
                                        <span>Senior High School</span>
                                    </div>
                                </div>
                                </a>
                                
                                <a href="kimia_sma.php">
                                <div class="tst-single clearfix">
                                    <img src="img/Matkul/kimia.jpg" class="img-circle">
                                    <div class="tst-content">
                                        <p>Chemistry.</p>
                                        <span>Senior High School</span>
                                    </div>
                                </div>
                                </a>
                                
                                <a href="biologi_sma.php">
                                <div class="tst-single clearfix">
                                    <img src="img/Matkul/biologi-sma.jpg" class="img-circle">
                                    <div class="tst-content">
                                        <p>Biology.</p>
                                        <span>Senior High School</span>
                                    </div>
                                </div>
                                </a>
                                
                                <a href="#">
                                <div class="tst-single clearfix">
                                    <img src="img/Matkul/ekonomi-sma.jpg" class="img-circle">
                                    <div class="tst-content">
                                        <p>Economic.</p>
                                        <span>Senior High School</span>
                                    </div>
                                </div>
                                </a>
                                
                                <a href="#">
                                <div class="tst-single clearfix">
                                    <img src="img/Matkul/geografi-sma.jpg" class="img-circle">
                                    <div class="tst-content">
                                        <p>Geography.</p>
                                        <span>Senior High School</span>
                                    </div>
                                </div>
                                </a>
                                
                                <a href="#">
                                <div class="tst-single clearfix">
                                    <img src="img/Matkul/sosiologi.jpg" class="img-circle">
                                    <div class="tst-content">
                                        <p>Sociology.</p>
                                        <span>Senior High School</span>
                                    </div>
                                </div>
                                </a>
                            </div>

                        </div> <!-- end #testimonial -->
                    </div> <!-- end .col-md-5 -->

                </div>
            </div>
            
        </section>
        <!--
        End #about-us
        ========================== -->


        <!--
        #contact
        ========================== -->
    
        <!--
        End #contact
        ========================== -->

        <!--
        #footer
        ========================== -->
        <footer id="footer" class="text-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="footer-logo wow fadeInDown">
                            <img src="img/logo_asli.png" alt="logo">
                        </div>

                        <div class="footer-social wow fadeInUp">
                            <h3>We are social</h3>
                            <ul class="text-center list-inline">
                                <li><a href="https://www.facebook.com/groups/1637360653186052/?fref=ts"><i class="fa fa-facebook fa-lg"></i></a></li>
                                <li><a href="https://mail.google.com/mail/u/0/#inbox"><i class="fa fa-google-plus fa-lg"></i></a></li>
                                <li><a href="https://www.instagram.com/notiftelu/"><i class="fa fa-instagram fa-lg"></i></a></li>
                            </ul>
                        </div>

                        <div class="copyright">
                            <p>Developed by <a target="_blank" href="#">D3 Informatics Engineering</a></p>
                        </div>

                    </div>
                </div>
            </div>
        </footer>
        <!--
        End #footer
        ========================== -->


        <!--
        JavaScripts
        ========================== -->
        
        <!-- main jQuery -->
        <script src="js/vendor/jquery-1.11.1.min.js"></script>
        <!-- Bootstrap -->
        <script src="js/bootstrap.min.js"></script>
        <!-- jquery.nav -->
        <script src="js/jquery.nav.js"></script>
        <!-- Portfolio Filtering -->
        <script src="js/jquery.mixitup.min.js"></script>
        <!-- Fancybox -->
        <script src="js/jquery.fancybox.pack.js"></script>
        <!-- Parallax sections -->
        <script src="js/jquery.parallax-1.1.3.js"></script>
        <!-- jQuery Appear -->
        <script src="js/jquery.appear.js"></script>
        <!-- countTo -->
        <script src="js/jquery-countTo.js"></script>
        <!-- owl carousel -->
        <script src="js/owl.carousel.min.js"></script>
        <!-- WOW script -->
        <script src="js/wow.min.js"></script>
        <!-- theme custom scripts -->
        <script src="js/main.js"></script>
    </body>
</html>
