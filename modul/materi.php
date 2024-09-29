<br>
 <?php
    $sql = mysqli_query($koneksi,"select * from materi order by id_materi desc ");
    while($data=mysqli_fetch_array($sql)){
        $isimateri = substr($data['isimateri'],0,1000);
        $isimateri = substr($data['isimateri'],0,strrpos($isimateri," "));
?>
        <div class="container">
            <div class="row">
           <div class="col-sm-4 lg-10" data-scrollreveal='wait 0.10s'>
      
            <?php if($data['swf']!="") ?><embed src="gambar/swf/<?php echo $data['swf']; ?>" width="100%" height="300" class="thumbnail"  data-lightbox="example-set">
             <h2 class="fancybox"><?php echo $data['judul']; ?></h2>
            <?php echo $isimateri; ?> [...]
            <a href="?page=materi_detail&id=<?php echo $data['id_materi']; ?>" class="btn btn-info btn-xs">Read More</a>
                        
            </div>
            </div>
        </div>

<?php
}       
?>









