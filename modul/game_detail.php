<?php
	$sql = mysqli_query($koneksi,"select * from game where id_game='$_GET[id]'");
	$data=mysqli_fetch_array($sql);
?>

	<div class="container">
	<div class="game">
		<center><h2 class="judul"><?php echo $data['judul']; ?></h2></center>
		<div class="col-sm-12 wowload fadeInUp">		
			<?php if($data['swf']!="") ?> <embed src="gambar/swfgame/<?php echo $data['swf']; ?>" class="thumbnail" width="1100" height="400">
		</div>
	</div>
</div>

