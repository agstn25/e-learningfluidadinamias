<div class="content_bottom">
     <div class="col-md-12 span_3">
          <div class="bs-example1" data-example-id="contextual-table">
<h2 class="sub-header">Akun Siswa</h2>
 <table class="table">
 <thead>
  <tr>
    <th>No</th>
    <th>Nis</th>
    <th>Nama</th>
    <th>Password</th>
    <th>Kelas</th>
    <th>Tanggal</th>
    <th>Aktif</th> 
    <th>Aksi</th>
  </tr>
  
  <?php
    $no=1;
    $page = mysqli_query($koneksi,"SELECT * FROM tabel_loginsiswa ") or die(mysqli_error());
    while($data=mysqli_fetch_array($page)){
  ?>
  
  <tr>
    <td> <?php echo $no; ?> </td>
    <td> <?php echo $data['username']; ?> </td>
    <td> <?php echo $data['nama']; ?> </td>
     <td> <?php echo $data['password']; ?> </td>
    <td> <?php echo $data['kelas']; ?> </td>
    <td> <?php echo isset($data['Tanggal']); ?> </td>
    <td> <?php echo $data['Aktif']; ?> </td>
    <td>

      <a href="?page=akun_siswa_hapus&id=
      <?php echo $data['id_loginsiswa']; ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Hapus </a>

          <?php if ($data['Aktif']=='Y'){ ?>
            <a href="?page=status_siswa&id=<?= $data ['id_loginsiswa'] ?>" class="btn btn-info btn-xs"><i class="fa fa-eyes">Aktif</button></a>
          <?php } else if ($data['Aktif']=='N'){ ?>
            <a href="?page=status_siswa&id=<?= $data ['id_loginsiswa'] ?>"class="btn btn-danger btn-xs"><i class="fa fa-eyes">Tidak</button></a>
         <?php } ?>
    
    </td>
  </tr>
  
  <?php 
      $no++;
    } 
  ?>

</thead>
</table>
</div>
</div>
</div>