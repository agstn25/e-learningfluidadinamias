<div class="content_bottom">
     <div class="col-md-12 span_3">
          <div class="bs-example1" data-example-id="contextual-table">
<?php
$sql = mysqli_query($koneksi,"SELECT * FROM kelas where id='$_GET[id]'") or die (mysqli_error());
$data = mysqli_fetch_array($sql);
?>

<h2 class="sub-header">Edit Kelas</h2>
<form name="edit" method="post" action="?page=kelas_editproses"
enctype="multipart/form-data" class="form-horizontal">
<input type="hidden" name="id"
value="<?php echo $data['id']; ?>">

<div class="form-group">
<label class="label-control col-md-2">Judul Kelas</label>
<div class="col-md-4">
<input type="text"  class="form-control" name="judul" size="50"
value="<?php echo $data['judul']; ?>">
</div>
</div>

<div class="form-group">
<label class="label-control col-md-2">Link</label>
<div class="col-md-4">
<input type="text"  class="form-control" name="link" size="50"
value="<?php echo $data['link']; ?>">
</div>
</div>

<div class="form-group">
<label class="label-control col-md-2"></label>
<div class="col-md-2">
<input type="submit"  name="edit" value="Edit" class="btn btn-primary">
</div>
</div>
</form>
</div>
</div>
</div>