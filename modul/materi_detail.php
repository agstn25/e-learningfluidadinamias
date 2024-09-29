<?php

	$sql = mysqli_query($koneksi,"select * from materi where id_materi='$_GET[id]'");
	$data=mysqli_fetch_array($sql);
	$isi = $data['isimateri'];
?>

	<div class="container">
	<div class="materi">
		<center><h2 class="judul"><?php echo $data['judul']; ?></h2></center>
		<div class="col-sm-12 wowload fadeInUp">		
			<?php if($data['swf']!="") ?> <embed src="gambar/swf/<?php echo $data['swf']; ?>" class="thumbnail" width="1200" height="500">
				
			<?php echo $isi; ?> 
		
	</div>
	</div>
</div>

