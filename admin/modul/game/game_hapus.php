<?php
	
$data=mysqli_fetch_array(mysqli_query($koneksi,"select * from game where id_game='$_GET[id]'"));
if($data['swf'] != "") unlink("../gambar/swfgame/$data[swf]");

mysqli_query($koneksi,"delete from game where id_game='$_GET[id]'") or die(mysqli_error());
echo"Data telah hapus";
echo"<meta http-equiv='refresh' content='1; url=?page=game'>";
?>