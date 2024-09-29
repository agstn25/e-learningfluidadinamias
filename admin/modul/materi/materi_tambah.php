<div class="content_bottom">
     <div class="col-md-12 span_3">
          <div class="bs-example1" data-example-id="contextual-table">
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">

<h2 class="sub-header"> Tambah Materi</h2>
<form name="tambah" method="post" action="?page=materi_tambahproses" 
enctype="multipart/form-data" class="form-horizontal">

<div class="form-group">
<label class="label-control col-md-2"> Judul </label>
<div class="col-md-4">
<input type="text" class="form-control" name="judul" size="50">
</div>
</div>

<div class="form-group">
<label class="label-control col-md-2">File SWF</label>
<div class="col-md-4">
<input type="file" class="form-control" name="swf"></div>
</div>

<div class="form-group">
<label class="label-control col-md-2">Isi Materi</label>
<div class="col-md-8">
<textarea class="ckeditor" name="isimateri" id="ckeditor"></textarea>
</div>
</div>

<div class="form-group">
<label class="label-control col-md-2"></label>
<div class="col-md-4">
<input type="submit" name="tambah" value="Submit" class="btn btn-info">
</div>
</div>

</form>
</div>
</div>
</div>