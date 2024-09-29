<?php
if(isset ($_GET['page'])) $page = $_GET ['page'];
else $page = "beranda";

if($page == "beranda")	include ("beranda.php");
elseif($page == "logout")	include ("logout.php");

elseif($page == "materi")	
	include ("modul/materi/materi_page.php");
elseif($page == "materi_tambah")	
	include ("modul/materi/materi_tambah.php");
elseif($page == "materi_tambahproses")	
	include ("modul/materi/materi_tambahproses.php");
elseif($page == "materi_edit")	
	include ("modul/materi/materi_edit.php");
elseif($page == "materi_editproses")	
	include ("modul/materi/materi_editproses.php");
elseif($page == "materi_hapus")	
	include ("modul/materi/materi_hapus.php");

elseif($page == "game")	
	include ("modul/game/game_page.php");
elseif($page == "game_tambah")	
	include ("modul/game/game_tambah.php");
elseif($page == "game_tambahproses")	
	include ("modul/game/game_tambahproses.php");
elseif($page == "game_edit")	
	include ("modul/game/game_edit.php");
elseif($page == "game_editproses")	
	include ("modul/game/game_editproses.php");
elseif($page == "game_hapus")	
	include ("modul/game/game_hapus.php");

elseif($page == "minilabs")	
	include ("modul/minilabs/minilabs_page.php");
elseif($page == "minilabs_tambah")	
	include ("modul/minilabs/minilabs_tambah.php");
elseif($page == "minilabs_tambahproses")	
	include ("modul/minilabs/minilabs_tambahproses.php");
elseif($page == "minilabs_edit")	
	include ("modul/minilabs/minilabs_edit.php");
elseif($page == "minilabs_editproses")	
	include ("modul/minilabs/minilabs_editproses.php");
elseif($page == "minilabs_hapus")	
	include ("modul/minilabs/minilabs_hapus.php");

elseif($page == "video")	
	include ("modul/video/video_page.php");
elseif($page == "video_tambah")	
	include ("modul/video/video_tambah.php");
elseif($page == "video_tambahproses")	
	include ("modul/video/video_tambahproses.php");
elseif($page == "video_edit")	
	include ("modul/video/video_edit.php");
elseif($page == "video_editproses")	
	include ("modul/video/video_editproses.php");
elseif($page == "video_hapus")	
	include ("modul/video/video_hapus.php");

elseif($page == "kelas")	
	include ("modul/kelas/kelas_page.php");
elseif($page == "kelas_tambah")	
	include ("modul/kelas/kelas_tambah.php");
elseif($page == "kelas_tambahproses")	
	include ("modul/kelas/kelas_tambahproses.php");
elseif($page == "kelas_edit")	
	include ("modul/kelas/kelas_edit.php");
elseif($page == "kelas_editproses")	
	include ("modul/kelas/kelas_editproses.php");
elseif($page == "kelas_hapus")	
	include ("modul/kelas/kelas_hapus.php");

elseif($page == "soal")	
	include ("modul/soal/soal_page.php");
elseif($page == "soal_tambah")	
	include ("modul/soal/soal_tambah.php");
elseif($page == "soal_tambahproses")	
	include ("modul/soal/soal_tambahproses.php");
elseif($page == "soal_lihat")	
	include ("modul/soal/soal_lihat.php");
elseif($page == "soal_edit")	
	include ("modul/soal/soal_edit.php");
elseif($page == "soal_editproses")	
	include ("modul/soal/soal_editproses.php");
elseif($page == "soal_hapus")	
	include ("modul/soal/soal_hapus.php");
elseif($page == "status")	
	include ("modul/soal/status.php");

elseif($page == "timer")	
	include ("modul/timer/timer_page.php");
elseif($page == "timer_edit")	
	include ("modul/timer/timer_edit.php");
elseif($page == "timer_editproses")	
	include ("modul/timer/timer_editproses.php");

elseif($page == "akun_siswa")	
	include ("modul/akun_siswa/akun_siswa_page.php");
elseif($page == "akun_siswa_hapus")	
	include ("modul/akun_siswa/akun_siswa_hapus.php");
elseif($page == "status_siswa")	
	include ("modul/akun_siswa/status_siswa.php");

elseif($page == "nilai")	
	include ("modul/nilai/nilai_page.php");
elseif($page == "nilai_hapus")	
	include ("modul/nilai/nilai_hapus.php");
elseif($page == "nilai_cetak")	
	include ("modul/nilai/nilai_cetak.php");

elseif($page == "user_edit")	
	include ("modul/user/user_edit.php");
elseif($page == "user_editproses")	
	include ("modul/user/user_editproses.php");

else echo"konten tidak ada";
?>
