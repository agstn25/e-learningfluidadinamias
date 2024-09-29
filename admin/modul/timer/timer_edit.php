<?php

	$sql = mysqli_query($koneksi,"SELECT * FROM timer WHERE id='$_GET[id]'") or die(mysqli_error());
	$data  	= mysqli_fetch_array($sql);
?>
<div class="content_bottom">
     <div class="col-md-12 span_3">
          <div class="bs-example1" data-example-id="contextual-table">

            <h2>Edit Timer</h2>

<form name="edit" method="post" action="?page=timer_editproses" class="form-horizontal">
	<input type="hidden" name="id" value="<?php echo $data['id']; ?>">
	
		<div class="form-group">
			<label for="focusedinput" class="col-sm-2 control-label">Durasi</label>	
			<div class="col-md-4"> <input type="text" class="form-control col-md-7 col-xs-12" value="<?php echo $data['waktu']; ?>" placeholder="Default Input" 
			name="waktu" size="50"></div>
		</div>

		
			<div class="form-group">
			<label class="label-control col-md-2"></label>				
			<div class="col-md-4"> <input type="submit" name="edit" value="Edit" class="btn btn-primary"></div>
		</div>
  </form>
</div>
</div>
</div>