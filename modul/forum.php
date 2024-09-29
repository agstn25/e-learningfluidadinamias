<div  data-scrollreveal="enter left and move 40px over 0.8s">
  
    <header>
            <div class="row">
                <div class="col-lg-12"><br><br><br><br><br><br>
                    <img class="img-responsive" src="startbootstrap/img/portfolio/frm.png"  alt="">
                    <div class="intro-text">
                       <div class="col-lg-8 col-lg-offset-2 text-center">
                    <a href="?page=chat" class="btn btn-lg btn-outline">
                        <i class=""></i>Saya Ingin Bertanya
                    </a>
                        <span class="name">Forum Diskusi</span>
                        <hr class="star-light">
                    <marquee><span class="skills">Diskusi seputar mata pelajaran Fluida Dinamis
                     (jika ingin bertanya silahkan klik tombol diatas "saya ingin bertanya")</span></marquee>
                </div>
                    </div>
                </div>
            </div>
        </div>
    </header><br>

 <?php
    if(!defined("INDEX")) die("---");
    
    $chat_messages = mysql_query("select distinct(id_siswa), chat_messages.nama, pertanyaan.judul, pertanyaan.isi, pertanyaan.tanggal from
    pertanyaan JOIN chat_messages ON chat_messages.id_siswa=pertanyaan.id_siswa where publish='N' order by chat_messages desc");

    while($data=mysql_fetch_array($chat_messages)){
        $isi = substr($data['isi'],0,500);
        $isi = substr($data['isi'],0,strrpos($isi," "));

?>

<div class="container">
     
    <div class="galeri">
        <div class="row gallery">

 <div class="col-sm-4 wowload fadeInUp">

<h3 class="fancybox"><?php echo $data['judul']; ?></h3>
<h4><?php echo $data['nama']; ?></h4>
    <h4><?php echo $data['tanggal']; ?></h4>

    <?php echo $isi; ?> ... 

     <a href="?tampil=chat_messages&id=<?php echo $data['chat_messages']; ?>" class="btn btn-default btn-xs">Lihat</a>

</div>
<?php
}       
?>                 