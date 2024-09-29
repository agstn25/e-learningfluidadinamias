<div class="content_bottom">
     <div class="col-md-12 span_3">
          <div class="bs-example1" data-example-id="contextual-table">
<h2 class="sub-header">Data Nilai</h2>

 <table class="table">
 <thead>
        <tr>
          <th>No</th>
          <th>Nis</th> 
          <th>Nama</th>
          <th>Kelas</th>
          <th>Poin</th>
          <th>Tanggal</th>
          <th>Aksi</th>
        </tr>
  
  <?php
  $no=0; 
  $sql = mysqli_query ($koneksi,"SELECT distinct(id_nilai), tabel_loginsiswa.nama, tabel_loginsiswa.kelas, tabel_loginsiswa.username, tabel_nilai.poin, tabel_nilai.tanggal, tabel_nilai.id_loginsiswa from 
                          tabel_nilai JOIN tabel_loginsiswa 
                          ON tabel_loginsiswa.id_loginsiswa=tabel_nilai.id_loginsiswa") or die (mysqli_error());
  while($row=mysqli_fetch_array($sql)){

  ?>
  
  <tr>
    <td><?php echo $no=$no+1; ?></td>
      <td><?php echo $row['username'];?></td>
      <td><?php echo $row['nama'];?></td>
      <td><?php echo $row['kelas'];?></td>
      <td><?php echo $row['poin'];?></td>
      <td><?php echo $row['tanggal'];?></td>
      <td><a href="?page=nilai_hapus&id=<?php echo $row['id_nilai']; ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Hapus </a> </td>

  
    </tr>
      <?php 

    } 
    ?>
</thead>
</table>
</div>
</div>
</div>
 