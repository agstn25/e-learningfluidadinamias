<?php
if(!defined("INDEX")) die("---");

mysqli_query($koneksi,"delete from video where id='$_GET[id]'") or die(mysqli_error());
echo"Data telah hapus";
echo"<meta http-equiv='refresh' content='1; url=?page=video'>";
?>