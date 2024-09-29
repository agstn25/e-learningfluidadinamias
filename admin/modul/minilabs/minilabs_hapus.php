<?php
	
$data=mysqli_fetch_array(mysqli_query($koneksi,"select * from minilabs where id_minilabs='$_GET[id]'"));
if($data['swf'] != "") unlink("../gambar/swfminilabs/$data[swf]");

mysqli_query($koneksi,"delete from minilabs where id_minilabs='$_GET[id]'") or die(mysqli_error());
echo"Data telah hapus";
echo"<meta http-equiv='refresh' content='1; url=?page=minilabs'>";
?>
