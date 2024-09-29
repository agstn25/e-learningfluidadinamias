	
	<link rel="stylesheet" type="text/css" href="plugin/fancybox/jquery.fancybox.css">
	<script type="text/javascript" src="plugin/fancybox/jquery.fancybox.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.fancybox').fancybox();
		});
	</script>

	<br><div class="container">
	 
	<div class="galeri">
		<div class="row gallery">
<?php	
	$no = 1;
	$sql = mysqli_query($koneksi,"select * from game order by id_game desc limit 12");
	while($data=mysqli_fetch_array($sql)){
?>
		 <div class="col-sm-4 wowload fadeInUp">
			 <?php if($data['swf']!="") ?><embed src="gambar/swfgame/<?php echo $data['swf']; ?>" width="100%" height="300" class="thumbnail"  data-lightbox="example-set">
             <p align="center"><a href="?page=game_detail&id=<?php echo $data['id_game']; ?>"> <?php echo $data['judul']; ?></p>
			</a>
		</div>
<?php
		if($no==3) echo"</div><div class='row'>";
		$no++;
	}
?>
		</div>
</div>