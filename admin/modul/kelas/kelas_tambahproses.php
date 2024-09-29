<?php

	mysqli_query($koneksi,"INSERT INTO kelas set 
	judul = '$_POST[judul]',
	link = '$_POST[link]'
		") or die (mysqli_error());

echo "Data telah tersimpan";
echo "<meta http-equiv='refresh'
content='1; url=?page=kelas'>";
?>