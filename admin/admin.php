<?php
  session_start();
  
  if(!empty($_SESSION['username'])and !empty($_SESSION['username'])){
    include("../koneksi/koneksi.php");
    define("INDEX",true);
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Media Pembelajaran Fisika</title>
<link rel="shortcut icon" href="assets/images/1.png">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<link href="assets/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="assets/css/style.css" rel='stylesheet' type='text/css' />
<link href="assets/css/lines.css" rel='stylesheet' type='text/css' />
<link href="assets/css/font-awesome.css" rel="stylesheet"> 

<script src="assets/js/jquery.min.js"></script>
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>

<link href="assets/css/custom.css" rel="stylesheet">

<script src="assets/js/metisMenu.min.js"></script>
<script src="assets/js/custom.js"></script>
<script src="assets/js/d3.v3.js"></script>
<script src="assets/js/rickshaw.js"></script>
</head>
<body>
<div id="wrapper">

        <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Media Pembelajaran</a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fafa-comments-o"></i><span class="badge"><1</span></a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-menu-header">
                            <strong>Messages</strong>
                            <div class="progress thin">
                              <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                <span class="sr-only">40% Complete (success)</span>
                              </div>
                            </div>
                        </li>
                       
                        <li class="dropdown-menu-footer text-center">
                            <a href="?page=pesan">View all messages</a>
                        </li>   
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle avatar" data-toggle="dropdown"><img src="../gambar/play-icon.png"></a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-menu-header text-center">
                            <strong>Account</strong>
                        </li>
                        <li class="m_2"><a href="#"><i class="fa fa-user"></i>Ubah Password</a></li>
                        <li class="m_2"><a href="keluar.php"><i class="fa fa-lock"></i> Logout</a></li>  
                    </ul>
                </li>
            </ul>
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="?page=beranda"><i class="fa fa-dashboard fa-fw nav_icon"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-laptop nav_icon"></i>Materi<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                <a href="?page=materi">Data Materi</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-camera nav_icon"></i>Video<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="?page=video">Data Video</a>
                                </li>
                            </ul>
                            <li>
                                <a href="#"><i class="fa fa-camera nav_icon"></i>Kelas<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="?page=kelas">Pertemuan</a>
                                    </li>
                                </ul>
                            </li>
                        </li>
                         <li>
                            <a href="#"><i class="fa fa-play nav_icon"></i>Game<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="?page=game">Data Game</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-play nav_icon"></i>MiniLabs<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="?page=minilabs"> Data Labs</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-file nav_icon"></i>Soal<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="?page=soal_tambah">Tambah Soal</a>
                                </li>
                                <li>
                                    <a href="?page=soal_lihat">Data Soal</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                        <a href="?page=timer"><i class="fa fa-link nav_icon"></i>Timer</a>
                        </li>
                        <li>
                        <a href="?page=nilai"><i class="fa fa-link nav_icon"></i>Nilai</a>
                        </li>
                        <li>
                        <a href="?page=akun_siswa"><i class="fa fa-user nav_icon"></i>Akun Siswa</a>
                        </li>
                        <li>
                        <a href="?page=user_edit"><i class="fa fa-indent nav_icon"></i>Akun Admin</a>
                        </li>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div id="page-wrapper">
        <div class="graphs">
        <div class="col_3">
     
    <div class="content_bottom">
     <div class="col-md-12 span_3">
            <?php include "modul.php"; ?>
           </div>
       </div>
       
        <div class="clearfix"></div>
        </div>
        <div class="copy">
            <p>Copyright &copy; 2024 Media Pembelajaran| Design by <a href="http://w3layouts.com/" target="_blank">Agustian</a> </p>
        </div>
        </div>
       </div>
   </div>
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>

<?php
  }else{
    echo"Dilarang membuka halaman ini!";
    echo"<meta http-equiv='refresh' content='1; url=index.php'>";
  }
?>
