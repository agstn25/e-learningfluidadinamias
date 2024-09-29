<?php
	
	if($_POST['password'] == ""){
	    mysqli_query($koneksi,"UPDATE user SET 
			username	= '$_POST[username]'
		") or die(mysqli_error());
		echo"Profil berhasil di edit";
	}else{
		if($_POST['password'] != $_POST['ulang_password']){
			echo"<p style='color:red'>Password dan ulang password tidak sama</p>";
		}else{
			$password = md5($_POST['password']);
			mysqli_query($koneksi,"UPDATE user SET 
					username	= '$_POST[username]',
					password	= '$password'
				") or die(mysqli_error());
			echo"Akun berhasil di edit";
		}
	}
	
	echo"<meta http-equiv='refresh' content='1; url=?page=user_edit'>";
?>