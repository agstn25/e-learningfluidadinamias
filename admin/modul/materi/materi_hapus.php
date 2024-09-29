<?php

	$data=mysqli_fetch_array(mysqli_query($koneksi,"select * from materi where id_materi='$_GET[id]'"));
	if($data['swf'] != "") unlink("../gambar/swf/$data[swf]");

	mysqli_query($koneksi,"delete from materi where id_materi='$_GET[id]'") or die(mysqli_error());
	echo"Data telah hapus";
	echo"<meta http-equiv='refresh' content='1; url=?page=materi'>";
?>