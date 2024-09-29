<?php

mysqli_query($koneksi,"DELETE FROM tabel_loginsiswa where id_loginsiswa='$_GET[id]'") or die(mysqli_error($koneksi));
echo"Data telah hapus";
echo"<meta http-equiv='refresh' content='1; url=?page=akun_siswa'>";
?>