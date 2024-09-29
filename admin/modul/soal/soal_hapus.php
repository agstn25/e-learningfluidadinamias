<?php
if(!defined("INDEX")) die("---");

mysqli_query($koneksi,"delete from tabel_soal where id_soal='$_GET[id]'") or die(mysqli_error());
echo"Data telah hapus";
echo"<meta http-equiv='refresh' content='1; url=?tampil=soal_lihat'>";
?>