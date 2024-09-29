<div class="content_bottom">
     <div class="col-md-12 span_3">
          <div class="bs-example1" data-example-id="contextual-table">
<h2 class="sub-header">Data Video</h2>
<a href="?page=video_tambah" class="btn btn-info"> Tambah Video</a><br><br>
 <table class="table">
 <thead>
          <tr>
          <th>No</th>
          <th>Judul Video</th>
          <th>Link</th>
          <th>Aksi</th>
          </tr>
  
  <?php
    $no=1;
    $sql = mysqli_query($koneksi,"SELECT * FROM video") or die(mysqli_error());
    while($data=mysqli_fetch_array($sql)){
  ?>
  
  <tr>
    <td> <?php echo $no; ?> </td>
    <td> <?php echo $data['judul']; ?> </td>
    <td> <?php echo $data['link']; ?> </td>
    <td> 
      <a href="?page=video_edit&id=<?php echo $data['id']; ?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a> 
      <a href="?page=video_hapus&id=<?php echo $data['id']; ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Hapus </a>
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