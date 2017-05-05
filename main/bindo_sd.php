<?php
    include("koneksi.php");
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
                        <p>Indonesian Primary School.</p>
                    </div>
                    
                    <div class="about-us text-center wow fadeInDown">
                        <img src="img/Quiz-Time.png" alt="About Us" class="img-responsive">
                    </div>
                    <br>
                    <p>bacaan soal nomor 1-4</p>
                    <br>
                    <h3><center>Olahraga Pagi</center></h3>
                    <br>
                    <p> Udara yang sejuk dan segar akan kita temukan di pagi hari. Pada pagi hari belum kita temui
pencemaran udara yang diakibatkan oleh kendaraan bermotor, asap pabrik, dan debu. Oleh sebab
itu, kita harus membiasakan bangun pagi untuk mendapatkan udara yang sehat.</p>
                    <br>
                    <p>
Kita bisa memanfaatkan udara pagi yang masih bersih untuk berolahraga. Olahraga yang
mudah dan murah dapat kita lakukan pada pagi hari karena bisa melemaskan otot-otot dan
memperlancar peredaran darah. Selain itu, udara bersih yang kita hirup sangat baik untuk paru-paru.
Kita bisa melakukannya di lingkungan rumah kita.</p>
                    <br>
                    <p>
Disamping olahraga secara rutin, tubuh kita juga memerlukan makanan yang bergizi. Kita
harus bisa menyeimbangkan kegiatan dengan makan makanan yang cukup sebagai sumber tenaga
bagi tubuh kita. Di dalam tubuh yang sehat terdapat jiwa yang sehat.</p>
                    <br>
                    <br>
                    <?php 

                    $pertanyaan = array(
		0 => array(
			'soal' => 'Mengapa olahraga bermanfaat bagi tubuh kita ?',
		 	'pilihan' => 'A. Dengan olahraga kita terbiasa bangun pagi |B. Melemaskan otot-otot dan memperlancar peredaran darah
 |C. Makanan bermanfaat bagi tubuh untuk paru-paru |D. Olahraga bisa dilakukan dengan mudah dan murah ',
		 	'jawaban' => 'B'
		),
		1 => array(
			'soal' => 'Kalimat tanya yang sesuai dengan isi paragraf pertama adalah ...',
		 	'pilihan' => 'A. Dimana tempat olahraga yang murah? |B. Bagaimana caranya agar kita dapat merasakan udara yang sejuk dan segar? |C. Mengapa tubuh kita memerlukan makanan yang bergizi ? |D. Bagaimana kita memanfaatkan udara pagi ? ',
		 	'jawaban' => 'B'
		),
		2 => array(
			'soal' => '. Ide pokok yang sesuai dengan paragraf kedua bacaan di atas adalah ...',
			'pilihan' => 'A. Kita bisa memanfaatkan udara pagi untuk berolahraga  |B. Olahraga secara rutin di pagi hari dapat menyehatkan badan |C. Membiasakan bangun pagi agar sehat |D. Olahraga pagi dilakukan di lingkungan rumah',
			'jawaban' => 'B'
		),
		3 => array(
			'soal' => 'Kalimat yang sesuai dengan paragraf pertama adalah ....',
			'pilihan' => 'A. Memilih olahraga sesuai kemampuan |B. Memanfaatkan bangun pagi dengan berolahraga |C. Menghindari udara di malam hari |D. Berolahraga secara rutin setiap pagi',
			'jawaban' => 'D'			
		),
		4 => array(
			'soal' => 'Diumumkan kepada siswa kelas 4 SD Suka Maju, bahwa untuk menjaga kebersihan lingkungan
kelas, akan diadakan kegiatan kerja bakti. Kegiatan akan dilaksanakan pada tanggal 22
September 2016.
Cuplikan pengumuman tersebut berisi ....',
			'pilihan' => 'A. Kegiatan tanggal 22 September 2016. |B. Menjaga kebersihan lingkungan kelas tanggal 22 September 2016. |C. Menjaga kegiatan tanggal 22 September 2016. |D. Kegiatan bersih sekolah tanggal 22 September 2016.',
			'jawaban' => 'D'			
		),
		5 => array(
			'soal' => 'Bila tubuh terkena infeksi, akan terjadi respon sistem kekebalan tubuh,
Arti kata infeksi tersebut adalah ....',
			'pilihan' => 'A. Terjangkit bibit penyakit |B. Kemasukan bibit penyakit |C. Tertular penyakit |D. Wabah penyakit',
			'jawaban' => 'B'			 
		),
		6 => array(
			'soal' => 'Gangnam style adalah suatu tarian yang dipopulerkan oleh anak-anak dari Korea. Sebenarnya
tarian ini merupakan sindiran bagi remaja di daerah korea yang bergaya hidup serba mewah.
Namun, tarian gangnam style yang yang masuk ke negara lain ditarsirkan sebagai sebuah
gerakan olahraga, termasuk di Indonesia. Anak-anak di Indonesia memanfaatkan tarian ini
selain sebagai kesenian tetapi juga untuk olahraga yang membuat badan sehat.
Peribahasa yang tepat berdasarkan ilustrasi tersebut adalah ....',
			'pilihan' => 'A. Berat sama dipikul ringan sama dijinjing |B. Berakit-rakit ke hulu berenang-renang ke tepian |C. Sekali merengkuh dayung dua tiga pulai terlampaui |D. Di mana ada gula di situ ada semut',
			'jawaban' => 'C'			
		),
		7 => array(
			'soal' => 'Indah, Dani, Silvi, dan Amar akan mengerjakan tugas kelompok bersama. Mereka diberi tugas
untuk membuat kerajinan tangan dari bambu. Mereka sudah menyepakati tugas masing-masing.
Indah dan Silvi mendapat tugas membawa pisau dapur, Dani dan Amar bertugas membawa
sepotong bambu. Indah, Silvi, dan Dani membawa tugas masing-masing. Namun, Amar tidak
membawa bambu yang ditugasinya. Bahkan, saat ditanya oleh teman-temannya, Amar berkata
bahwa dia tidak mendapatkan tugas apapun.
Berdasarkan ilistrasi tersebut, watak Amar dapat disamakan dengan ungkapan ....',
			'pilihan' => 'A. Lepas tangan |B. Panjang tangan |C. Ringan tangan |D. Tangan kanan',
			'jawaban' => 'A'			
		),
		8 => array(
			'soal' => '1) Baju ibuku bagus.
2) Baju ibuku mahalharganya.
Kata hubung yang tepat untuk menggabungkan kedua kalimat tersebut adalah ....
',
			'pilihan' => 'A. Baju ibuku bagus, tetapi mahal. |B. Baju ibuku mahal karena bagus. |C. Baju ibuku bagus dan mahal harganya.
 |D. Baju ibuku mahal harganya atau bagus.',
			'jawaban' => 'B'			
		),
		9 => array(
			'soal' => 'Suasana desaku tetapramai... listrik padam.
Kata hubung yang tepat untuk melengkapi kalimat tersebut adalah ....',
			'pilihan' => 'A. ketika |B. tetapi |C. karena |D. meskipun',
			'jawaban' => 'D'		
		)

	);

if(isset($_GET['pilihan'])) {
	$total = 0;

	foreach($_GET['pilihan'] as $a => $b) 
	
		if(substr($b, 0, 1) == $pertanyaan[$a]['jawaban']) 
			$total++;
            $query = "INSERT INTO skor(id_skor, skor) VALUES ('','$total')";
            mysqli_query($konek, $query);
			echo "
				<script type='text/javascript'>
					alert('Skor anda : ".$total."');
					var jwb = confirm('Ulangi Quiz?');
					if(jwb) {
						window.location ='bindo_sd.php';
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
        <td>Skor</td>
    </tr>
	<?php
	$id=0; 
	$queryviewskor = mysqli_query($konek, "select * from skor");
	
	while($row = mysqli_fetch_array($queryviewskor)){
		?>
	  <tr>
		  <td><span class="style1"><?php echo $id=$id+1; ?></span></td>
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
