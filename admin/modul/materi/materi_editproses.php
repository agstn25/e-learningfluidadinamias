<?php

	$nama_gambar 	= $_FILES['swf']['name'];
	$lokasi_gambar 	= $_FILES['swf']['tmp_name'];
	$tipe_gambar	= $_FILES['swf']['type'];
	
	$tanggal	= date('Ymd');	
	$isimateri 		= addslashes($_POST['isimateri']);
	
	if($lokasi_gambar==""){
		mysqli_query($koneksi,"UPDATE materi SET 
				judul='$_POST[judul]', 
				isimateri='$isimateri' 
			WHERE id_materi='$_POST[id]'") or die(mysqli_error());
	}else{
		$data=mysqli_fetch_array(mysqli_query($koneksi,"select * from materi where id_materi='$_POST[id]'"));
		if($data['swf'] != "") unlink("../gambar/swf/$data[swf]");
		
		move_uploaded_file($lokasi_gambar,"../gambar/swf/$nama_gambar");
		mysqli_query($koneksi,"UPDATE materi SET 
				judul='$_POST[judul]', 
				isimateri='$isimateri',
				swf='$nama_gambar' 
			WHERE id_materi='$_POST[id]'") or die(mysqli_error());
	}
	
	echo"Data telah diedit";
	echo"<meta http-equiv='refresh' content='1; url=?page=materi'>";
?>