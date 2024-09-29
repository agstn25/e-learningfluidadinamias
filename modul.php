<?php
	
	if( isset($_GET['page']) ) $page = $_GET['page'];
	else $page = "home";
?>

<div class='box'>

<?php	
	if( $page == "home" )		
		include("modul/home.php");	
		
	elseif( $page == "materi" )			
		include("modul/materi.php");
	elseif( $page == "materi_detail" )	
		include("modul/materi_detail.php");
	elseif( $page == "soal" )			
		include("modul/soal.php");
	elseif( $page == "nilai" )			
		include("modul/nilai.php");
	elseif( $page == "simpan" )			
		include("modul/simpan.php");
	elseif( $page == "score" )			
		include("modul/score.php");
	elseif( $page == "video" )				
		include("modul/video.php");
	elseif( $page == "forum" )				
		include("modul/chat.html");
	elseif( $page == "minilabs" )				
		include("modul/minilabs.php");
	elseif( $page == "game" )			
		include("modul/game.php");
	elseif( $page == "game_detail" )			
		include("modul/game_detail.php");
	elseif( $page == "akun_ubah" )		
		include("modul/akun_ubah.php");
	elseif( $page == "akun_ubahproses" )		
		include("modul/akun_ubahproses.php");

	else echo"Halaman Belum Tersedia";
?>

</div>