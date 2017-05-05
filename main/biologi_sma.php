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
                        <p>Matematic Primary School.</p>
                    </div>
                    
                    <div class="about-us text-center wow fadeInDown">
                        <img src="img/Quiz-Time.png" alt="About Us" class="img-responsive">
                    </div>
                    <?php 

                    $pertanyaan = array(
		0 => array(
			'soal' => 'Kelapa hijau, kelapa merah, kelapa bali, kelapa gading, kelapa kopyor merupakan keanekaragaman
tingkat….',
		 	'pilihan' => 'A. Genetik |B. jenis |C. populasi |D. ekosistem',
		 	'jawaban' => 'A'
		),
		1 => array(
			'soal' => 'Nama ilmiah jambu air adalah Eugenia Aquea sedangkan nama ilmiah jambu bol Eugenia Malacencis.
Ini berarti jambu air dengan jambu bol ….',
		 	'pilihan' => 'A. spesies sama, genus berbeda |B. spesies berbeda, genus sama |C. genus sama, famili sama |D. spesies sama, famili berbeda ',
		 	'jawaban' => 'B'
		),
		2 => array(
			'soal' => 'Musa paradisiaca adalah nama ilmiah pisang. Dalam tata nama binomial nomenklatur, Musa
menunjukkan takson….',
			'pilihan' => 'A. spesies |B. genus |C. famili |D. ordo',
			'jawaban' => 'B'
		),
		3 => array(
			'soal' => 'Kelompok penyakit di bawah ini yang disebabkan oleh virus adalah ….',
			'pilihan' => 'A. influenza, campak, hepatitis |B. influenza, campak, tuberculosis |C. tuberculosis, typhus, disentri
 |D. tuberculosis, influenza, hepatitis',
			'jawaban' => 'A'			
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
