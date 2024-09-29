<div class="content_bottom">
     <div class="col-md-12 span_3">
          <div class="bs-example1" data-example-id="contextual-table">
<h2 class="sub-header">Data Timer</h2>
 <table class="table">
 <thead>
          <tr>
          <th>No</th>
          <th>Durasi</th>
          <th>Aksi</th>
          </tr>
	
	<?php
		$no=1;
		$sql = mysqli_query($koneksi,"SELECT * FROM timer") or die(mysqli_error());
		while($data=mysqli_fetch_array($sql)){
	?>
	
	<tr>
		<td> <?php echo $no; ?> </td>
		<td> <?php echo $data['waktu']; ?> Menit </td>
		<td> 
			<a href="?page=timer_edit&id=<?php echo $data['id']; ?>" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a> 
		</td>
	</tr>
	
	<?php 
			$no++;
		} 
	?>
</table>
</thead>
</table>
</div>
</div>
</div>
