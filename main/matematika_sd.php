<?php
    include("koneksi.php");
    session_start();
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <style>
            table, th, td {
                border: 2px solid black;
            }
            
            td {
                padding: 20px;
            }
        </style>
        <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Always force latest IE rendering engine -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Meta Keyword -->
        <meta name="keywords" content="one page, business template, single page, onepage, responsive, parallax, creative, business, html5, css3, css3 animation">
        <!-- meta character set -->
        <meta charset="utf-8">

        <!-- Site Title -->
        <title>Quiz Form</title>
        
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
                            <li class="current"><a href="index.php">Home</a></li>
                            <li><a href="#about">Quiz</a></li>
                            <li><a href="#contact">Skor</a></li>
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
                        <p>Matematic Primary School.</p>
                    </div>
                    
                    <div class="about-us text-center wow fadeInDown">
                        <img src="img/Quiz-Time.png" alt="About Us" class="img-responsive">
                    </div>
                    <br>
                    <br>
                    <br>
                    <?php 

                    $pertanyaan = array(
		0 => array(
			'soal' => 'Hasil  operasi dari 1.036 + 851 : 37 adalah ...',
		 	'pilihan' => 'A. 1.159 |B. 1.069 |C. 1.059 |D. 1.049 ',
		 	'jawaban' => 'A'
		),
		1 => array(
			'soal' => 'Riris memiliki manik-manik yang disimpan dalam 24 kaleng. Setiap kaleng berisi 132 butir
manik-manik. Karena kalengnya rusak, Riris ingin memindahkan semua manik-maniknya ke
dalam 8 kaleng yang baru. Banyak butir manik-manik yang ada di setiap kaleng yang baru
adalah ...',
		 	'pilihan' => 'A. 44 |B. 396 |C. 1.032 |D. 3.160 ',
		 	'jawaban' => 'B'
		),
		2 => array(
			'soal' => 'Jarak kota  A dan kota  B  adalah  5,5 cm . Jika perbandingan  skala 1 : 2.500.000 , maka jarak kota A  dan  kota   B  sebenarnya ... km ',
			'pilihan' => 'A. 1,375  |B. 13,75  |C. 137,5 |D. 1375',
			'jawaban' => 'B'
		),
		3 => array(
			'soal' => 'Hasil dari 128 : (-16) + 80 x 2 adalah …',
			'pilihan' => 'A. 144 |B. 152  |C. 168 |D. 176',
			'jawaban' => 'B'			
		),
		4 => array(
			'soal' => 'FPB dari 34, 51, dan 68 adalah ...',
			'pilihan' => 'A. 4 |B. 6 |C. 17 |D. 34',
			'jawaban' => 'C'			
		),
		5 => array(
			'soal' => 'Rama berlatih renang setiap 3 hari sekali. Nando berlatih setiap 7 hari sekali. Kedua anak berlatih bersama pertama kali tanggal 15 September 2012. Mereka akan berlatih bersama pada tanggal ...',
			'pilihan' => 'A. 18 September |B. 25 September |C. 5 Oktober |D. 6 Oktober',
			'jawaban' => 'C'			 
		),
		6 => array(
			'soal' => 'Adinda membeli pita sepanjang 4 meter. Pita digunakan untuk menghias kado 80 cm dan diberikan kepada adiknya 20 dm. Sisa pita Adinda adalah ... cm ',
			'pilihan' => 'A. 340 |B. 320 |C. 318 |D. 120',
			'jawaban' => 'D'			
		),
		7 => array(
			'soal' => 'Sebuah bak mandi berukukuran 80 cm, 50 cm  dan 50 cm. Karena bocor dalam 20 menit air masih sisa 50 dm³. Jadi debit air yang bocor adalah ... dm3/menit',
			'pilihan' => 'A. 75 |B. 35 |C. 7,5 |D. 3,5',
			'jawaban' => 'C'			
		),
		8 => array(
			'soal' => 'Jarak obyek wisata Baturraden dengan Kota Purwokerto 15 km. Andi dari kota Purwokerto ke obyek wisata Baturraden naik sepeda motor dengan kecepatan 45 km/jam. Jika Andi berangkat pukul 08.15 maka dia akan sampai di obyek wisata tersebut pada pukul ...',
			'pilihan' => 'A. 08.18  |B. 08.20 |C. 08.27 |D. 08.35',
			'jawaban' => 'D'			
		),
		9 => array(
			'soal' => 'Suatu bangun datar mempunyai ciri-ciri sebagai berikut: 1) Mempunyai dua pasang sisi yang sejajar dan sama panjang 2) Sudut yang berhadapan sama besar Bangun datar tersebut adalah',
			'pilihan' => 'A. layang-layang  |B. belah ketupat |C. persegi panjang |D. jajar genjang',
			'jawaban' => 'C'		
		)

	);

if(isset($_GET['pilihan'])) {
	$total = 0;

	foreach($_GET['pilihan'] as $a => $b) 
	
		if(substr($b, 0, 1) == $pertanyaan[$a]['jawaban']) 
			$total++;
            $user_quiz = $_SESSION['user'];
            $query = "INSERT INTO skor(id_skor, username, mata_pelajaran, skor) VALUES ('','$user_quiz','Matematika SD','$total')";
            mysqli_query($konek, $query);
			echo "
				<script type='text/javascript'>
					alert('Skor anda : ".$total."');
					var jwb = confirm('Ulangi Quiz?');
					if(jwb) {
						window.location ='matematika_sd.php';
					} else {
						window.location ='index.php';
					}
				</script>
			";	
}
$no = 1;
$layout = '
	<div>
		<div><br>%s. %s</div>
		<div>%s</div>
	</div>
';
?>

<form>

	<?php


	foreach($pertanyaan as $key => $value) 
	{	
		$pilihan = explode('|', $value['pilihan']);
		$radio = "";
		foreach($pilihan as $h => $i)
		{
			$radio .= '<label><input type="radio" value="'.$i.'" name="pilihan['.$key.']">'.$i. '</label><br>';
		}

		printf($layout, $no++, $value['soal'], $radio);

	}

	?>
	<br><br><br>
<input type="submit" value="Jawab" name="hSkor">
</form>

<?php 

if(isset($_GET['hSkor']) == 'Hitung Skor') {
	echo "
	<script type='text/javascript'>
	alert('Tidak boleh kosong');
	</script>
	";
}

?>
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
                
            </div>
            
        </section>
        <!--
        End #about-us
        ========================== -->


        <!--
        End #contact
        ========================== -->

        <!--
        #footer
        ========================== -->
    
        <!--
        End #footer
        ========================== -->

        <section id="contact">
            <div class="container">
                <div class="row">

                    <div class="section-title text-center wow fadeInDown">
                        <h2>Skor</h2>
                        <p>Final Skor.</p>
                        <p>
  <table align="center" >
    <tr>
    	<td>ID</td>
        <td>Nama User</td>
    	<td>Nama Matkul</td>
        <td>Skor</td>
    </tr>
	<?php
	$id=0; 
    $us = $_SESSION['user'];
	$queryviewskor = mysqli_query($konek, "select * from skor where username='$us'");
	
	while($row = mysqli_fetch_array($queryviewskor)){
		?>
	  <tr>
		  <td><span class="style1"><?php echo $id=$id+1; ?></span></td>
		  <td><span class="style1"><?php echo $row['username'];?></span></td>
          <td><span class="style1"><?php echo $row['mata_pelajaran'];?></span></td>
          <td><span class="style1"><?php echo $row['skor'];?></span></td>
	  </tr>
	  <?php	
	}
	?>
    </table>
    </p>
                    </div>

                </div>
            </div>
        </section>

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
