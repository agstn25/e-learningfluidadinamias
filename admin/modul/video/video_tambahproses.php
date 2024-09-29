<?php

	mysqli_query($koneksi,"INSERT INTO video set 
	judul = '$_POST[judul]',
	link = '$_POST[link]'
		") or die (mysqli_error());

echo "Data telah tersimpan";
echo "<meta http-equiv='refresh'
content='1; url=?page=video'>";
?>