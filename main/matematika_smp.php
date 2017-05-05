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
                        <p>Matematic Junior High School.</p>
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
			'soal' => 'Hasil dari 6 x (-3 + 17) : [5– (-2)] adalah ...',
		 	'pilihan' => 'A. -28 |B. 12 |C. 12 |D. 28 ',
		 	'jawaban' => 'C'
		),
		1 => array(
			'soal' => 'Dalam seleksi peserta OSN tingkat kota
ditetapkan aturan, untuk peserta yang dapat
menjawab setiap soal dengan benar diberi skor 3,
salah diberi skor -2 dan tidak menjawab diberi
skor -1. Dari 40 soal yang diberikan, Ady
menjawab sebanyak 36 soal, dan 9 soal
di antaranya salah. Skor yang diperoleh Ady
adalah ....',
		 	'pilihan' => 'A. 56 |B. 59 |C. 72 |D. 90 ',
		 	'jawaban' => 'B'
		),
		2 => array(
			'soal' => 'Jarak antara kota A dan B sejauh 120 km dapat
ditempuh oleh sepeda motor menghabiskan bensin
sebanyak 4 liter. Dengan kondisi yang sama jarak
sejauh 150 km dapat ditempuh oleh sepeda motor
menghabiskan bensin sebanyak.... ',
			'pilihan' => 'A. 8 liter |B. 7 liter |C. 6 liter |D. 5 liter',
			'jawaban' => 'D'
		),
		3 => array(
			'soal' => 'Jarak sebenarnya antara dua tempat adalah
360 km, sedangkan pada peta 8 cm. Skala peta
adalah ....',
			'pilihan' => 'A. 1 : 45.000.000 |B. 1 : 4.500.000 |C. 1 : 450.000 |D. 1 : 45.000',
			'jawaban' => 'B'			
		),
		4 => array(
			'soal' => 'Setelah ditabung di bank selama 8 bulan, uang
Rinto menjadi Rp6.160.000,00. Jika tabungan
Rinto mula-mula Rp6.000.000,00, besar suku
bunga bank per tahun adalah ....',
			'pilihan' => 'A. 4%  |B. 5% |C. 6% |D. 7%',
			'jawaban' => 'A'			
		),
		5 => array(
			'soal' => 'Bu Harma menjual handphone yang dimilikinya
seharga Rp1.700.000,00. Dari hasil penjualan
tersebut ia rugi 15%. Harga pembelian handphone
Bu Harma adalah ...',
			'pilihan' => 'A. Rp2.500.000,00 |B. Rp2.250.000,00 |C. Rp2.000.000,00 |D. Rp1.750.000,00',
			'jawaban' => 'C'			 
		),
		6 => array(
			'soal' => 'Dua suku berikutnya barisan: 3, 6, 12, 21, ...
adalah ....',
			'pilihan' => 'A. 32, 47 |B. 32, 48 |C. 33, 47 |D. 33, 48',
			'jawaban' => 'D'			
		),
		7 => array(
			'soal' => 'Himpunan penyelesaian 3(x + 4) > 5x – 2 dengan
x bilangan bulat adalah ....',
			'pilihan' => 'A. {8, 9, 10, ...} |B. {... , 3, 4, 5, 6} |C. {... ,4, 5, 6, 7} |D. . {... ,-10, -9, -8}',
			'jawaban' => 'B'			
		),
		8 => array(
			'soal' => 'Dalam suatu kelas, sebanyak 19 siswa menyukai
prakarya, 14 siswa menyukai TIK, 5 siswa
menyukai prakarya dan TIK, dan 8 siswa tidak
menyukai prakarya maupun TIK.
Banyak seluruh siswa dalam kelas adalah ....',
			'pilihan' => 'A. 30 |B. 36 |C. 40 |D. 46',
			'jawaban' => 'B'			
		),
		9 => array(
			'soal' => 'Dari ketinggian 24 m Budi memandang kapal A
dan kapal B di lautan dengan arah yang sama. Jika
jarak pandang Budi dengan kapal A = 25 m dan
dengan kapal B = 30 m, jarak kapal A dan kapal B
adalah ....',
			'pilihan' => 'A. 7 m |B. 10 m |C. 11 m |D. 18 m',
			'jawaban' => 'C'		
		)

	);

if(isset($_GET['pilihan'])) {
	$total = 0;

	foreach($_GET['pilihan'] as $a => $b) 
	
		if(substr($b, 0, 1) == $pertanyaan[$a]['jawaban']) 
			$total++;
            $user_quiz = $_SESSION['user'];
            $query = "INSERT INTO skor(id_skor, username, mata_pelajaran, skor) VALUES ('','$user_quiz','Matematika SMP','$total')";
            mysqli_query($konek, $query);
			echo "
				<script type='text/javascript'>
					alert('Skor anda : ".$total."');
					var jwb = confirm('Ulangi Quiz?');
					if(jwb) {
						window.location ='matematika_smp.php';
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
