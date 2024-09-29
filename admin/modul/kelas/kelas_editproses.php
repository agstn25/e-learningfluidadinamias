<?php

mysqli_query($koneksi,"UPDATE kelas SET judul='$_POST[judul]', link='$_POST[link]' where id='$_POST[id]'")
or die (mysqli_error());

echo "Data telah diedit";
echo "<meta http-equiv='refresh'
content='1; url=?page=kelas'>";
?>