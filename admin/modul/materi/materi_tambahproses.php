<?php

	$nama_file	= $_FILES['swf']['name'];
	$lokasi_file 	= $_FILES['swf']['tmp_name'];
	$tipe_file	= $_FILES['swf']['type'];
	
	$tanggal	= date('Ymd');	
	$isimateri 		= addslashes($_POST['isimateri']);
	
	if($lokasi_file==""){
		mysqli_query($koneksi,"INSERT INTO materi set
				judul		= '$_POST[judul]',
				isimateri	= '$isimateri',
				tanggal		= '$tanggal' 
			") or die(mysqli_error());
	}else{
		move_uploaded_file($lokasi_file,"../gambar/swf/$nama_file");
		mysqli_query($koneksi,"INSERT INTO materi set
				judul		= '$_POST[judul]',
				isimateri	= '$isimateri',
				tanggal		= '$tanggal',
				swf 		= '$nama_file'
			") or die(mysqli_error());

	}
	echo"Data berhasil tersimpan";
	echo"<meta http-equiv='refresh' content='1; url=?page=materi'>";
?>