<?php
	session_start();

if(!empty($_SESSION['username'])and !empty($_SESSION['password'])){
	include("koneksi/koneksi.php");
	define("INDEX",true);
?>

<!DOCTYPE html>
<html lang="zxx">
<head>
  <title>Media Pembelajaran</title>
  <meta charset="UTF-8">
  <meta name="description" content="SolMusic HTML Template">
  <meta name="keywords" content="music, html">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
  <link rel="stylesheet" href="assets/css/font-awesome.min.css"/>
  <link rel="stylesheet" href="assets/css/owl.carousel.min.css"/>
  <link rel="stylesheet" href="assets/css/slicknav.min.css"/>
  <link rel="stylesheet" href="assets/css/style.css"/>

</head>
<body>

  <!-- Header section -->
  <header class="header-section clearfix">
    <a href="index.html" class="site-logo" >
      <h3><font color="#fc0254"> Media Pembelajaran</font></h3>
    </a>
    <ul class="main-menu">
      <li><a href="utama.php">Home</a></li>
      <li><a href="?page=materi">Materi</a></li>
      <li><a href="?page=forum">Forum</a></li>
      <li><a href="?page=soal">Soal</a></li>
      <li><a href="?page=nilai">Nilai</a></li>
      <li><a href="?page=video">Video</a></li>
      <li><a href="?page=minilabs">Minilabs</a></li>
      <li><a href="?page=game">Game</a></li>
      <li><a href="?page=akun_ubah">Akun</a></li>
      <li><a href="logout.php" class="btn btn-danger">Logout</a></li>
          </ul>
  </header>
  <!-- Header section end -->

  <?php include "modul.php";?>

  <!-- Footer section -->
  <footer class="footer-section">
    <div class="container">
      <div class="row">
        <div class="col-xl-6 col-lg-7 order-lg-2">
          <div class="row">
            
          </div>
        </div>
        <div class="col-xl-6 col-lg-5 order-lg-1">
          <h3><font color="#fc0254"> Media Pembelajaran</font></h3>
          <div class="copyright">
          Copyright &copy;<script>document.write(new Date().getFullYear());</script> <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Agustian</a>
          </div>
          <div class="social-links">
            <a href=""><i class="fa fa-instagram"></i></a>
            <a href=""><i class="fa fa-pinterest"></i></a>
            <a href=""><i class="fa fa-facebook"></i></a>
            <a href=""><i class="fa fa-twitter"></i></a>
            <a href=""><i class="fa fa-youtube"></i></a>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- Footer section end -->
  
  <!--====== Javascripts & Jquery ======-->
  <script src="assets/js/jquery-3.2.1.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/jquery.slicknav.min.js"></script>
  <script src="assets/js/owl.carousel.min.js"></script>
  <script src="assets/js/mixitup.min.js"></script>
  <script src="assets/js/main.js"></script>

  </body>
</html>


<?php
    }else{
        echo"Dilarang membuka halaman ini!";
        echo"<meta http-equiv='refresh' content='1; url=index.php'>";
    }
?>

