<div class="content_bottom">
     <div class="col-md-12 span_3">
          <div class="bs-example1" data-example-id="contextual-table">
<?php
$sql = mysqli_query($koneksi,"SELECT * FROM minilabs where id_minilabs='$_GET[id]'") or die(mysqli_error());
$data = mysqli_fetch_array($sql);
?>
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">

<h2 class="sub-header">Edit minilabs</h2>
<form name="edit" method="post" action="?page=minilabs_editproses"
 enctype="multipart/form-data" class="form-horizontal">
<input type="hidden" name="id"
value="<?php echo $data['id_minilabs']; ?>">

<div class="form-group">
<label class="label-control col-md-2">Judul</label>
<div class="col-md-4">
<input type="text" class="form-control" name="judul" size="50" value="<?php echo $data['judul']; ?>">
</div>
</div>

<div class="form-group">
<label class="label-control col-md-2">SWF</label>
<div class="col-md-4">
<img src="../gambar/swfminilabs/
<?php echo $data['swf']; ?>" width="100"> <br>
<input type="file" class="form-control" name="swf">
</div>
</div>

<div class="form-group">
<label class="label-control col-md-2"></label>
<div class="col-md-2">
<input type="submit" name="edit" value="Edit" class="btn btn-primary">
</div>
</div>
</form>
</div>
</div>
</div>