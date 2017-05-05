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
                        <p>Natural Science Primary School.</p>
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
			'soal' => 'Tumbuhan bakau hidup di daerah pantai.
Manfaat utama bagi lingkungan adalah ...',
		 	'pilihan' => 'A. Mencegah terjadinya gelombang tsunami |B. Tempat hidup hewan laut. |C. Menggemburkan tanah pantai. |D. Mencegah terjadinya abrasi pantai. ',
		 	'jawaban' => 'D'
		),
		1 => array(
			'soal' => 'Di Tanjung Puting, Kalimantan Timur adalah tempat untuk perlindungan hewan.
Jenis hewan yang dilindungi dan tujuan perlindungan hewan tersebut adalah...',
		 	'pilihan' => 'A. Badak bercula satu, agar tidak mengganggu perkampungan penduduk.
 |B. Gajah, agar tidak merusak lahan pertanian penduduk. |C. Orang hutan, agar tidak punah karena perburuan liar. |D. Burung jalak agar aman untuk berkembang biak. ',
		 	'jawaban' => 'C'
		),
		2 => array(
			'soal' => 'Perhatikan bentuk hubungan antara dua makhuk hidup berikut !
1. Ikan hiu dengan ikan remora.
2. Cacing perut yang hidup di dalam usus manusia.
3. Bunga sepatu dengan kupu-kupu.
4. Tumbuhan benalu dengan pohon yang ditumpangi.
5. Kutu yang hidup di rambut manusia.
Contoh simbiosis parasitisme ditunjukkan oleh nomor ... ',
			'pilihan' => 'A. 2, 4, dan 5 |B. 3, 4, dan 5 |C. 1, 3, dan 4 |D. 1, 2, dan 3',
			'jawaban' => 'A'
		),
		3 => array(
			'soal' => 'Alang-alang merupakan tumbuhan yang banyak dijumpai di daratan rendah. Akar
alang-alang berguna untuk ....',
			'pilihan' => 'A. Obat gatal-gatal |B. Bahan dasar pembuatan pil kina |C. Mengobati panas dalam |D. Menghilangkan bau badan',
			'jawaban' => 'C'			
		),
		4 => array(
			'soal' => 'Gas-gas yang dihasilkan dari kegiatan industri dapat menyebabkan efek rumah kaca.
Berikut ini yang merupakan dampak dari efek rumah kaca adalah ....',
			'pilihan' => 'A. Hewan-hewan kehilangan kemampuan berkembang biak |B. Perubahan iklim yang ekstrim, sehingga keseimbangan lingkungan terganggu |C. Banyak terjadi bencana seperti tanah longsor dan gempa bumi |D. Muncul jenis hewan dan tumbuhan baru yang mengganggu keseimbangan
ekosistem',
			'jawaban' => 'B'			
		),
		5 => array(
			'soal' => 'Pohon randu pada musim kemarau beradaptasi dengan cara ....',
			'pilihan' => 'A. Mempunyai duri pada batangnya |B. Berakar tunggang untuk menyimpan cadangan air |C. Menggugurkan daunnya |D. Mempunyai kambium untuk memperbesar batangnya',
			'jawaban' => 'C'			 
		),
		6 => array(
			'soal' => 'Rahma baru saja sembuh dari sakitnya. Dokter berkata, Rahma harus banyak makan
ikan, tempe, dan telur karena makanan tersebut mengandung zat yang dibutuhkan
Rahma agar tumbuhnya kembali pulih, yaitu ....',
			'pilihan' => 'A. Karbohidrat sebagai sumber energi |B. Protein sebagai pengganti sel yang rusak |C. Lemak untuk cadangan makanan
 |D. Mineral untuk mengatur kerja sel',
			'jawaban' => 'B'			
		),
		7 => array(
			'soal' => 'Perhatikan ciri-ciri perkembangan fisik berikut!
1. Pinggul melebar dan besar.
2. Suara menjadi melengking.
3. Suara menjadi lebih berat.
4. Mengalami mimpi basah.
5. Timbul jerawat.
Ciri-ciri perkembangan fisik yang dialami oleh laki-laki pada masa pubertas
ditunjukkan oleh nomor ....',
			'pilihan' => 'A. 1, 2, dan 3 |B. 1, 3, dan 5 |C. 3, 4, dan 5 |D. 3, 4, dan 1',
			'jawaban' => 'C'			
		),
		8 => array(
			'soal' => 'Anton mengisikan spiritus ke dalam botol, karena tergesa-gesa botol tersebut lupa
ditutup. Keesokan harinya ternyata botol tersebut sudah kosong. Perubahan wujud
apakah yang terjadi pada peristiwa tersebut ....',
			'pilihan' => 'A. menguap |B. menyublim |C. mengembun |D. mencair',
			'jawaban' => 'A'			
		),
		9 => array(
			'soal' => 'Toni kesulitan membuka botol kaca bertutup logam berulir. Dia mengambil air panas
kemudian dituangkan pada tutup botol. Hal ini dilakukan agar ....',
			'pilihan' => 'A.  Tutup botol menyusut lebih cepat sehingga lebih mudah di buka |B. Botol kaca memuai lebih cepat sehingga tutup lebih mudah di buka |C. Tutup botol memuai lebih cepat sehingga mudah di buka |D. Botol kaca lebih cepat sehingga tutup mudah di buka',
			'jawaban' => 'C'		
		)

	);

if(isset($_GET['pilihan'])) {
	$total = 0;

	foreach($_GET['pilihan'] as $a => $b) 
	
		if(substr($b, 0, 1) == $pertanyaan[$a]['jawaban']) 
			$total++;
            $user_quiz = $_SESSION['user'];
            $query = "INSERT INTO skor(id_skor, username, mata_pelajaran, skor) VALUES ('','$user_quiz','Bahasa Inggris','$total')";
            mysqli_query($konek, $query);
			echo "
				<script type='text/javascript'>
					alert('Skor anda : ".$total."');
					var jwb = confirm('Ulangi Quiz?');
					if(jwb) {
						window.location ='bing_smp.php';
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
