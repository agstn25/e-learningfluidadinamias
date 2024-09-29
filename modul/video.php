<section id="page-title">

            <div class="container clearfix">
                <center><h2>Video</h1></h2>
            </div>

        </section>

        <div class="section nobottommargin">

<div class="container clearfix">

<?php 
  $no = 1;
  $hal    = isset($_GET['hal']) ? $_GET['hal'] : 1;
  $batas  = 9;
  $posisi = ($hal-1) * $batas ;
  $video = mysqli_query($koneksi,"select * from video order by id desc");
  while($data=mysqli_fetch_array($video)){
?>
     <div class="col-sm-4 wowload fadeInUp">
        <iframe width="100%" src="https://www.youtube.com/embed/<?php echo $data['link']; ?>" 
        frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; 
        picture-in-picture" allowfullscreen></iframe>
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

 <!-- Pagination-->
    <center>
    <?php
                  
    $semua = mysqli_query($koneksi,"select * from video");
    $jmldata = mysqli_num_rows($semua);
    $jmlhal  = ceil($jmldata/$batas);
    $sebelumnya = $hal - 1;
    $berikutnya = $hal + 1;
            
    
    echo "<br><div class='paging'>";
    
    if($hal > 1){
        echo "<span class='btn btn-default'><a  href='?page=video&hal=1'> Pertama</a></span> ";
        echo "<span class='btn btn-default'><a href='?page=video&hal=$sebelumnya'> Sebelumnya</a></span> ";
    }else{
        echo "<span class='btn btn-default'> Pertama</span> ";
        echo "<span class='btn btn-default'> Sebelumnya</span> ";
    }
    
    for($i=1; $i<=$jmlhal; $i++){
        if($i == $hal) echo "<span class='btn btn-default'> <b>$i</b> </span> ";
        else echo "<span class='btn btn-default'><a href='?page=video&hal=$i'> $i </a></span> ";
    }
    
    if($hal < $jmlhal){
        echo "<span class='btn btn-default'><a href='?page=video&hal=$berikutnya'> Berikutnya </a></span> ";
        echo "<span class='btn btn-default'><a href='?page=video&hal=$jmlhal'> Terakhir </a></span> ";
    }else{
        echo "<span class='btn btn-default'> Berikutnya </span> ";
        echo "<span class='btn btn-default'> Terakhir </span> ";        
    }
    
    echo "</div><br>";
?></center>


