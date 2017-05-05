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
                    <br>
                    <br>
                    <?php 

                    $pertanyaan = array(
		0 => array(
			'soal' => 'Mengendarai sepeda motor untuk aktivitas sehari-hari memerlukan kenyamanan, apalagi menjelang
datangnya musim hujan seperti saat ini. Karena itu, memeriksa kendaraan secara rutin di bengkel
mutlak dilakukan agar terhindar dari kecelakaan di jalan raya.
Perawatan sepeda motor ini penting dilakukan karena sesuai fungsinya, pengendara pasti
mengharapkan sepeda motornya dapat dikendarai dalam berbagai situasi. Apakah itu menembus
kemacetan, berkelit di tengah padatnya kendaraan, serta tetap tangguh di jalanan basah.
Tak jauh berbeda dengan manusia, sepeda motor juga perlu dijaga dan dirawat supaya selalu siap
digunakan dan nyaman mengantarkan sang pemilik ke mana saja.
Ide pokok paragraf di atas adalah',
		 	'pilihan' => 'A. Perawatan sepeda motor ini penting dilakukan karena sesuai fungsinya
 |B. kendaraan bermotor harus layak pakai
 |C. sepeda motor perlu perawatan yang serius agar tetap nyaman untuk dipakai |D. komponen kendaraan bermotor harus layak pakai ',
		 	'jawaban' => 'C'
		),
		1 => array(
			'soal' => 'Kecelakaan lalu lintas pada umumnya disebabkan oleh kelalaian manusia. Pada dasarnya kita tidak
mematuhi rambu-rambu lalu lintas, dan menggunakan kendaraan semaunya saja. Keselamatan jiwa
tidak dipedulikan, terutama kawula muda. Dunia ingin mereka miliki. Akhirnya bahaya mengancam
jiwa mereka akibat perbuatannya.
Simpulan yang dapat ditarik dari bacaan di atas adalah',
		 	'pilihan' => 'A. bahaya mengancam jiwa manusia |B. kelalaian manusia mematuhi rambu lalu lintas |C. kecelakaan lalu lintas akibat kelalaian manusia |D. kelalaian memakai rambu lalu lintas menyebabkan kecelakaan yang mengancam jiwa ',
		 	'jawaban' => 'D'
		),
		2 => array(
			'soal' => 'Pemakaian sumber minyak bumi yang sangat besar untuk berbagai keperluan telah menguras
sumber-sumber minyak bumi dunia semakin lama semakin berkurang. Memang sampai sekarang
minyak bumi masih merupakan sumber energi utama sebagai keperluan kehidupan manusia,
terutama untuk berbagai macam industri dan transportasi. Bila tidak ditemukan sumber energi lain
sebagai sumber energi alternatif, dalam waktu tidak lama lagi dunia akan mengalami krisis energi.
Simpulan yang dapat ditarik dari paragraf itu adalah
',
			'pilihan' => 'A. Minyak bumi bukan satu-satunya sumber energi  |B. Perlunya sumber energi alternatif dalam kehidupan  |C. Pemakai sumber minyak bumi sangat besar.
 |D. Dunia akan mengalami krisis energi..
',
			'jawaban' => 'D'
		),
		3 => array(
			'soal' => 'Menurut isinya paragraf di atas berupa',
			'pilihan' => 'A. bahasan  |B. kisahan  |C. perian  |D. paparan',
			'jawaban' => 'A'			
		),
		4 => array(
			'soal' => 'Yang telah menguras sumber minyak bumi dunia pada teks bacaan di atas adalah',
			'pilihan' => 'A.  Sumber minyak bumi yang sangat besar |B. Dunia akan mengalami krisis minyak bumi. |C. Pemakaian sumber minyak bumi yang besar untuk berbakai keperluan. |D. Minyak bumi sumber energi utama.',
			'jawaban' => 'C'			
		),
		5 => array(
			'soal' => 'Rama berlatih renang setiap 3 hari sekali. Nando berlatih setiap 7 hari sekali. Kedua anak berlatih bersama pertama kali tanggal 15 September 2012. Mereka akan berlatih bersama pada tanggal ...',
			'pilihan' => 'A. 18 September |B. 25 September |C. 5 Oktober |D. 6 Oktober',
			'jawaban' => 'C'			 
		),
		6 => array(
			'soal' => 'Untuk ke-13 kalinya Pangkalan TNI AU Sulaiman akan menggelar turnamen Sepakbola Sulaiman Cup.
Kejuaraan ini digelar dalam rangka HUT ke-60 TNI Angkatan Udara. Turnamen sepakbola ini akan
dimulai tanggal 22 April 2006 di Stadion Angkasa Lanud Sulaiman Margahayu Bandung. Turnamen
terbuka sepakbola Sulaiman Cup XIII ini memperebutkan piala bergilir, piala tetap, dan uang
pembinaan bagi tim yang berhasil menjadi juara. Untuk menyesuaikan dengan jadwal turnamen
panitia membatasi jumlah peserta yang akan mengikuti turnamen ini sebanyak 32 klub. Pendaftaran
dibuka di kantor Binjas Lanud Sulaiman, Jalan Terusan Kopo Margahayu mulai Rabu (15/3).
Gagasan utama paragraf di atas adalah ',
			'pilihan' => 'A. pembukaan pendaftaran bagi para peserta turnamen sepakbola Sulaiman Cup XIII.
 |B. Turnamen sepakbola Sulaiman Cup digelar dalam rangka HUT ke-60 TNI AU |C. Pangkalan TNI AU Sulaiman akan menggelar turnamen Sepakbola Sulaiman Cup. |D.  Penyelenggaraan turnamen Sepakbola Sulaiman Cup untuk ke-13 kalinya.',
			'jawaban' => 'C'			
		),
		7 => array(
			'soal' => 'Keputusan Persebaya Surabaya untuk mundur dan tidak memainkan pertandingan terakhir Delapan
Besar Liga Djarum Super Indonesia, menuai banyak kecaman. Atas tindakannya itu, Komisi Disiplin
PSSI menjatuhkan hukuman. Selain denda uang, Persebaya dijatuhi skorsing dua tahun tidak boleh
mengikuti kompetisi serta harus meniti kembali langkah dari Divisi II. Keputusan ini, apakah tidak
gegabah dan sudah pantas?
Kalimat berupa pendapat yang sesuai dengan isi tajuk rencana di atas adalah ….
',
			'pilihan' => 'A. Hukuman yang dijatuhkan kepada Persebaya perlu ditinjau lagi. |B. Keputusan Komisi Disiplin sudah tepat tentang hukuman itu.
 |C. Langkah Divisi II memang harus dijalani oleh Persebaya. |D. Bagaimana hukuman yang pantas untuk Persebaya?
',
			'jawaban' => 'A'			
		),
		8 => array(
			'soal' => 'PU: Semua penderita jantung tidak boleh bekerja keras
PK: Yani penderita jantung
K: Jadi, Yani tidak boleh bekerja keras
Cara penalaran untuk tiba pada kesimpulan seperti di atas disebut penalaran',
			'pilihan' => 'A. analogi  |B. generalisasi  |C. sebab-akibat
 |D. silogisme negatif',
			'jawaban' => 'D'			
		),
		9 => array(
			'soal' => 'Sistem ekonomi tradisional merupakan suatu sistem yang digunakan oleh masyarakat yang kegiatan
ekonominya masih terbatas pada produksi dan konsumsi. Maksudnya jika mereka membutuhkan
sesuatu, mereka akan membuat sendiri. Apabila membutuhkan produk yang tidak dapat dihasilkan
sendiri, maka mereka akan melakukan barter.
Pertanyaan yang sesuai dengan teks di atas adalah',
			'pilihan' => 'A. Siapa yang memakai sistem ekonomi tradisional?
  |B. Mengapa penerapan barang yang diproduksi merupakan salah satu masalah ekonomi?
 |C. Mengapa masyarakat masih menggunakan sistem barter dalam perdagangan?
 |D. Kegiatan ekonomi siapakah yang masih terbatas?',
			'jawaban' => 'B'		
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
						window.location ='bindo_sma.php';
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
