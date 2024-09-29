<div class="content_bottom">
     <div class="col-md-12 span_3">
          <div class="bs-example1" data-example-id="contextual-table">
<h2 class="sub-header">Data Game</h2>
<a href="?page=game_tambah" class="btn btn-info"> Tambah Game</a><br><br>
 <table class="table">
 <thead>
          <tr>
          <th>No</th>
          <th>Judul Game</th>
          <th>Tanggal</th>
          <th>Aksi</th>
          </tr>
	
	<?php
		$no=1;
		$sql = mysqli_query($koneksi,"SELECT * FROM game") or die(mysqli_error());
		while($data=mysqli_fetch_array($sql)){
	?>
	
	<tr>
		<td> <?php echo $no; ?> </td>
		<td> <?php echo $data['judul']; ?> </td>
		<td> <?php echo $data['tanggal']; ?> </td>
		<td> 
			<a href="?page=game_edit&id=<?php echo $data['id_game']; ?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a> 
			<a href="?page=game_hapus&id=<?php echo $data['id_game']; ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Hapus </a>
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