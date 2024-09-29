<?php

mysqli_query($koneksi,"delete from tabel_nilai where id_nilai='$_GET[id]'") or die(mysqli_error());
echo"Data telah hapus";
echo"<meta http-equiv='refresh' content='1; url=?page=nilai'>";
?>