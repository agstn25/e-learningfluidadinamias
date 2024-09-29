<?php

	if($_POST['password'] == ""){
	    mysqli_query($koneksi,"UPDATE tabel_loginsiswa SET
			password	= '$_POST[password]' where id_loginsiswa='$_SESSION[id_loginsiswa]'
		") or die(mysqli_error());
		echo"Profil berhasil di edit";

	}else{
		if($_POST['password'] != $_POST['ulang_password']){
			echo"<p style='color:red'>Password dan ulang password tidak sama</p>";
		}else{
			$password = $_POST['password'];
			mysqli_query($koneksi,"UPDATE tabel_loginsiswa SET 
					password	= '$password' where id_loginsiswa='$_SESSION[id_loginsiswa]'
				") or die(mysqli_error());
			echo"Password berhasil di edit";
		}
	}

	echo"<meta http-equiv='refresh' content='1; url=?page=akun_ubah'>";
?>