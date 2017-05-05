<?php
$host="localhost";
$user="root";
$password="";
$database="db_ujianonline";

$koneksi=mysql_connect($host,$user,$password);
mysql_select_db($database,$koneksi);

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
                            <li class="current"><a href="index.html">Home</a></li>
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
                        <p>Indonesian Junior High School.</p>
                    </div>
                    
                    <div class="about-us text-center wow fadeInDown">
                        <img src="img/Quiz-Time.png" alt="About Us" class="img-responsive">
                    </div>
                    <p><b>Bacalah teks berikut, kemudian kerjakan soal nomor 1 s.d. 3!</b></p>
                    <br>
                    <p>Pengemudi ojek berbasis aplikasi kerap
mengangkut penumpang di sembarang tempat.
Mereka tanpa mengindahkan rambu lalu lintas.
Keberadaan mereka yang kerap mangkal di
tempat tak semestinya dikeluhkan masyarakat.
Khususnya pejalan kaki kalau kendaraan mereka
parkir di trotoar.</p>
                    <br>
                    <p>Pengemudi ojek online sebenarnya memiliki
ciri khas terus berpindah atau mobile. Fenomena
pengemudi ojek online yang berkumpul di suatu
tempat perlu dipertanyakan. Makanya ojek
online tidak perlu tempat mangkal. </p>
                    <br>
                    <br>
                    <?php 

                    $pertanyaan = array(
		0 => array(
			'soal' => 'Makna kata fenomena pada teks tersebut adalah …',
		 	'pilihan' => 'A. komunitas masyarakat |B. kejadian yang luar biasa |C. keberadaan masyarakat |D. tempat yang tidak resmi ',
		 	'jawaban' => 'B'
		),
		1 => array(
			'soal' => 'Pertanyaan yang sesuai dengan teks tersebut
adalah …',
		 	'pilihan' => 'A. Bagaimana memesan ojek online? |B. Mengapa ojek online tidak perlu tempat
mangkal? |C. Bagaimana caranya ojek online mencari
penumpang? |D. Mengapa masyarakat sangat membutuhkan
keberadaan ojek online? ',
		 	'jawaban' => 'B'
		),
		2 => array(
			'soal' => 'Simpulan isi dari teks tersebut adalah …',
			'pilihan' => 'A. Pengemudi ojek online harus mempunyai suratsurat
yang lengkap. |B. Masyarakat perkotaan sangat terbantu dengan
keberadaan ojek online. |C. Keberadaan ojek online saat mencari
penumpang perlu ditertibkan. |D. Pengelola ojek online harus menertibkan
pengemudinya yang merugikan penumpang.',
			'jawaban' => 'C'
		),
		3 => array(
			'soal' => 'Mediatama. [... .] Dalam kehidupan, manusia
umumnya mendominasi penggunaan otak kanan
atau otak kiri saja. Otak tengah memberi
penyeimbang supaya kedua otak tersebut
berfungsi seimbang.
Kalimat yang menyatakan keunggulan untuk
melengkapi teks tersebut adalah …',
			'pilihan' => 'A. Buku ini menjelaskan bagaimana cara kerja otak
tengah. |B. Kerja otak tengah dalam kehidupan sangat
penting  |C. Buku ini ditulis dengan bahasa yang sederhana
namun mengena. |D. Banyak menggunakan istlah kedokteran yang
mengganggu pemahaman pembaca.',
			'jawaban' => 'C'			
		),
		4 => array(
			'soal' => 'Perhatikan kalimat-kalimat berikut!
(1) Keduanya sama-sama memiliki kesaktian luar
biasa.
(2) Setelah sehari berperang, akhirnya Empu
Pakuwojo terdesak.
(3) Perang tanding kedua tokoh ini sangat lama.
(4) Empu Pakuwojo berlari dan bersembunyi di
lubang pada sebuah pohon.
(5) Mereka tidak hanya mengandalkan kekuatan,
tetapi juga menggunakan tenaga dalam yang
sangat mengagumkan.
Kalimat-kalimat tersebut akan menjadi laporan yang
tepat dengan urutan …',
			'pilihan' => 'A. (1), (5), (2), (4), (3)
 |B. (3), (1), (5), (2), (4)
 |C. (3), (5), (4), (1), (2)
 |D. (5), (2), (4), (3), (1)',
			'jawaban' => 'B'			
		),
		5 => array(
			'soal' => 'Petunjuk naik Transjakarta menggunakan kartu:
(1) Tempelkan atau gesek kartu tersebut di pintu
masuk.
(2) Duduk di gerbong sesuai peruntukannya (lakilaki/wanita).
(3) Siapkan kartu Transjakarta.
(4) Masuk ruang tunggu dan berdiri di jalur sesuai
tujuan.
(5) Ketika bus tiba masuk dengan hati-hati.
Urutan yang tepat petunjuk tersebut adalah …',
			'pilihan' => 'A. (1), (4), (5), (2), (3) |B. (2), (3), (1), (4), (5) |C. (3), (1), (4), (5), (2) |D. (3), (4), (5), (2), (1)',
			'jawaban' => 'C'			 
		),
		6 => array(
			'soal' => 'Perhatikan kalimat rumpang berikut!
Perilaku remaja seringkali tidak bisa [...] oleh
orang tuanya sendiri.
Kata bentukan yang tepat untuk melengkapi kalimat
tersebut adalah …',
			'pilihan' => 'A. disadari |B. disegani |C. dipahami |D. dimaklumi',
			'jawaban' => 'C'			
		),
		7 => array(
			'soal' => 'Perhatikan kalimat-kalimat berikut!
(1) Pasar automotif nasional tahun ini diprediksi
masih stagnan.
(2) Pelatih Tim Nasional U-19 Indonesia, Indra
Sjafri, fokus mencari pemain-pemain muda
potensial.
(3) Melangsingkan tubuh dapat dilakukan dengan
berbagai cara, salah satunya dengan latihan
barre.
(4) Jerawat seringkali menjadi masalah wajah yang
paling sangat menjengelkan sekali.
Kalimat yang tidak efektif adalah …
',
			'pilihan' => 'A. (1) |B. (2) |C. (3) |D. (4)',
			'jawaban' => 'C'			
		),
		8 => array(
			'soal' => 'Perhatikan kalimat rumpang berikut!
Asap kendaraan bermotor, asap pabrik, dan
asap kebakaran hutan […] terbesar penyebab
polusi udara.
Istilah yang tepat untuk melengkapi kalimat
tersebut adalah …',
			'pilihan' => 'A. residu |B. limbah |C. polutan |D. karbondioksida',
			'jawaban' => 'C'			
		),
		9 => array(
			'soal' => 'Perhatikan kalimat berikut!
Ayahnya: Mandor Sarpan, seorang kusir delman
keluarga Residen Pekalongan, tetapi dia menjadi
menantu Residen Pekalongan saat itu.
Penggunaan tanda baca yang tidak tepat pada
kalimat tersebut adalah …',
			'pilihan' => 'A. titik dua (:)  |B. koma ( , ) setelah kata Sarpan |C. koma ( , ) setelah kata Pekalongan |D. titik (.)',
			'jawaban' => 'C'		
		)

	);

if(isset($_GET['pilihan'])) {
	$total = 0;

	foreach($_GET['pilihan'] as $a => $b) 
	
		if(substr($b, 0, 1) == $pertanyaan[$a]['jawaban']) 
			$total++;
			echo "
				<script type='text/javascript'>
					alert('Skor anda : ".$total."');
					var jwb = confirm('ingin main lagi.?');
					if(jwb) {
						window.location ='Home.php';
					} else {
						window.location ='index.html';
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
  <table class="datatable">
    <tr>
    	<td>No</td>
        <td>Benar</td>
        <td>Salah</td>
        <td>Kosong</td>
        <td>Skor</td>
        <td>Tanggal</td>
    </tr>
	<?php
	$no=0; 
	$query=mysql_query("select * from tabel_nilai");
	
	while($row=mysql_fetch_array($query)){
		?>
	  <tr>
		  <td><span class="style1"><?php echo $no=$no+1; ?></span></td>
		  <td><span class="style1"><?php echo $row['benar'];?></span></td>
		  <td><span class="style1"><?php echo $row['salah'];?></span></td>
          <td><span class="style1"><?php echo $row['kosong'];?></span></td>
          <td><span class="style1"><?php echo $row['point'];?></span></td>
          <td><span class="style1"><?php echo $row['tanggal'];?></span></td>
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
