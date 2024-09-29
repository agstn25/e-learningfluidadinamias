	
	<link rel="stylesheet" type="text/css" href="plugin/fancybox/jquery.fancybox.css">
	<script type="text/javascript" src="plugin/fancybox/jquery.fancybox.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.fancybox').fancybox();
		});
	</script>
<?php
	if(!defined("INDEX")) die("---");
?>
        <div  data-scrollreveal="enter left and move 40px over 0.8s">
  
    <header>
            <div class="row">
                <div class="col-lg-12"><br><br><br><br><br><br><br>
                    <img class="img-responsive" src="startbootstrap/img/galeri.png" alt="">
                    <div class="intro-text">
                        <span class="name">Foto-Foto</span>
                        <hr class="star-light">
                         <marquee><span class="skills"></span></marquee>
                    </div>
                </div>
            </div>
        </div>
    </header><br>

	<div class="container">
	 
	<div class="galeri">
		<div class="row gallery">
<?php	
	$no = 1;
	$galeri = mysql_query("select * from galeri order by id_galeri desc limit 12");
	while($data=mysql_fetch_array($galeri)){
?>
		 <div class="col-sm-4 wowload fadeInUp">
			<a class="fancybox" href="gambar/galeri/<?php echo $data['gambar']; ?>" data-lightbox="example-set" class="fa fa-eye" title="<?php echo $data['judul']; ?>">
				<img src="gambar/galeri/<?php echo $data['gambar']; ?>" width="100%" class="thumbnail" >
				<p align="center"> <?php echo $data['judul']; ?></p>
			</a>
		</div>
<?php
		if($no==3) echo"</div><div class='row'>";
		$no++;
	}
?>
		</div>
</div>