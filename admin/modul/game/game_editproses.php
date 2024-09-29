<?php 

	$nama_file 	= $_FILES['swf']['name'];
	$lokasi_file 	= $_FILES['swf']['tmp_name'];
	$tipe_file	= $_FILES['swf']['type'];
	
	$tanggal	= date('Ymd');	
	
	if($lokasi_file==""){
		mysqli_query($koneksi,"UPDATE game SET 
			judul	='$_POST[judul]' 
			WHERE id_game='$_POST[id]'") 
		or die(mysqli_error());
	}else{
		$data=mysqli_fetch_array(mysqli_query($koneksi,"select * from game where id_game='$_POST[id]'"));
		if($data['swf'] != "") unlink("../gambar/swfgame/$data[swf]");
		
		move_uploaded_file($lokasi_file,"../gambar/swfgame/$nama_file");
		mysqli_query($koneksi,"UPDATE game SET 
			judul	='$_POST[judul]', 
			swf 	='$nama_file' 
			WHERE id_game='$_POST[id]'") 
		or die(mysqli_error());
	}
	
	echo"Data telah diedit";
	echo"<meta http-equiv='refresh' content='1; url=?page=game'>";
?>