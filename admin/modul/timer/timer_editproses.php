<?php
	mysqli_query($koneksi,"UPDATE timer SET 
			waktu	= '$_POST[waktu]'
		WHERE id='$_POST[id]'") or die(mysqli_error());
	
	echo"Data telah diedit";
	echo"<meta http-equiv='refresh' content='1; url=?page=timer'>";
?>