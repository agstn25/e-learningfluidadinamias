   <?php
$cek    = mysqli_query($koneksi,"select * from tabel_loginsiswa where id_loginsiswa='$_SESSION[id_loginsiswa]'");
    $data   = mysqli_fetch_array($cek);
    ?>
<!-- Hero section -->
  <section class="hero-section">
    <div class="hero-slider owl-carousel">
      <div class="hs-item">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <div class="hs-text">
                <h2><span>Selamat Datang</span> 
                <h2><span><?php echo $data['nama'];?></span>
                 <a href="?page=gamee" class="site-btn">Game Edukasi</a> 
              </div>
            </div>
            <div class="col-lg-6">
              <div class="hr-img">
                <img src="assets/img/halaman.jpg" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="hs-item">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <div class="hs-text">
                <h2><span>Selamat Datang</span> 
                <h2><span><?php echo $data['nama'];?></span>
                   <a href="?page=game" class="site-btn">Game Edukasi</a>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="hr-img">
                <img src="assets/img/hero-2.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Hero section end -->

  <!-- Intro section -->
  <section class="intro-section spad">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="section-title">
            <h2>Tentang Media Pembelajaran</h2>
          </div>
        </div>
        <div class="col-lg-6">
          <p>Media Pembelajaran merupakan aplikasi pembelajaran berbasis web yang didalamnya 
          berisi fitur-fitur yang mendukung proses pembelajaran agar lebih menarik dan
          inovatif, sehingga siswa tidak bosan dalam mempelajari materi dan mengerjakan
          soal kuis maupun ujian.</p>
          <a href="#" class="site-btn">Game Edukasi</a>
        </div>
      </div>
    </div>
  </section>
  <!-- Intro section end -->

 