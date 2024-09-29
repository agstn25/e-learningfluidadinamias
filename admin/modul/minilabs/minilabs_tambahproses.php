<?php 

	$nama_file 	= $_FILES['swf']['name'];
	$lokasi_file 	= $_FILES['swf']['tmp_name'];
	$tipe_file	= $_FILES['swf']['type'];
	
	$tanggal	= date('Ymd');	
	
	if($lokasi_file==""){
		mysqli_query($koneksi,"INSERT INTO minilabs SET
				judul 	= '$_POST[judul]',
				tanggal	= '$tanggal'
			") or die(mysqli_error());
	}else{
		move_uploaded_file($lokasi_file,"../gambar/swfminilabs/$nama_file");
		mysqli_query($koneksi,"INSERT INTO minilabs SET
				judul 	= '$_POST[judul]',
				tanggal	= '$tanggal',
				swf		= '$nama_file'
			") or die(mysqli_error());
	}
	echo"Data telah tersimpan";
	echo"<meta http-equiv='refresh' content='1; url=?page=minilabs'>";
?>