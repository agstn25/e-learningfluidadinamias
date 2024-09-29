<?php
	session_start();
	
	include("koneksi/koneksi.php");
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$cek 	= mysqli_query($koneksi,"SELECT * from tabel_loginsiswa where username='$username' and password='$password' and Aktif='Y' order by id_loginsiswa");
	$data	= mysqli_fetch_array($cek);
	$jumlah = mysqli_num_rows($cek);
	
	if($jumlah>0){
		$_SESSION['username'] = $data['username'];
		$_SESSION['id_loginsiswa'] = $data['id_loginsiswa'];
		$_SESSION['password'] = $data['password'];
		
		echo"Login berhasil!";
		echo"<meta http-equiv='refresh' content='1; url=utama.php'>";
	}else{
		echo"<center>Gagal, username atau password salah! <br><b><a href='login.php'>ULANGI username dan password</a></b><br><br><b><a href='daftar.php'>Jika belum melakukan pendaftaran akun silahkan daftar terlebih dahulu</a></b></center>";
	}
?>