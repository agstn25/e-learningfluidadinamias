<?php
if(!empty($_SESSION['username'])and !empty($_SESSION['password'])){
  include "koneksi/koneksi.php";
?>  

  <?php
  $cek = mysqli_query($koneksi,"select * from tabel_loginsiswa where id_loginsiswa='$_SESSION[id_loginsiswa]'");
    $data   = mysqli_fetch_array($cek);
    ?>

        <div  data-scrollreveal="enter left and move 40px over 0.8s">
  
    <header>
            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-text">
                        <center><h2><span class="name">Nilai <?php echo $data['nama'];?></span></h2></center>
                        <hr class="star-light">
                          <marquee><span class="skills">Lihat hasil pengerjaan soal kamu</span></marquee>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <br>

<div class="container">
  <div class="galeri">
    <div class="row">

                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Benar</th>  
                          <th>Salah</th>
                          <th>Kosong</th>  
                          <th>Poin</th>
                          <th>Tanggal</th>
                        </tr>
                      </thead>
                      <tbody>
    
	<?php
	$no=0; 
	$query=mysqli_query($koneksi,"SELECT * FROM tabel_nilai where id_loginsiswa='$_SESSION[id_loginsiswa]'");
	while($row=mysqli_fetch_array($query)){
		
		?>

	  <tr>
		  <td><?php echo $no=$no+1; ?></span></td>
		  <td><?php echo $row['benar'];?></span></td>
		  <td><?php echo $row['salah'];?></span></td>
      <td><?php echo $row['kosong'];?></span></td>
      <td><?php echo $row['poin'];?></span></td>
      <td><?php echo $row['tanggal'];?></span></td>
	  </tr>
	  <?php	
	}
	?>
    </table>
    </p>
    <p></p>
    </div>
 
 <?php
}else{
	?>
  <?php
}
?>
</div>




    
