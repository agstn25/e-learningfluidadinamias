<?php
	if(!defined("INDEX")) die("---");

	$sql = mysqli_query($koneksi,"SELECT * FROM tabel_soal WHERE id_soal='$_GET[id]'") or die(mysqli_error());
	$data  	= mysqli_fetch_array($sql);
?>
<div class="content_bottom">
     <div class="col-md-12 span_3">
          <div class="bs-example1" data-example-id="contextual-table">
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">

<h1>Edit Soal</h1>

<form name="edit" method="post" action="?page=soal_editproses" class="form-horizontal">
	<input type="hidden" name="id" value="<?php echo $data['id_soal']; ?>">
	

		<div class="form-group"> 
			<label for="focusedinput" class="col-sm-2 control-label">Pertanyaan</label>			
			<div class="col-md-8"><textarea class="ckeditor" name="pertanyaan" cols="20" rows="10" id="ckeditor" class="form-control "><?php echo $data['pertanyaan']; ?></textarea></div> 
		</div>

		<div class="form-group"> 
			<label for="focusedinput" class="col-sm-2 control-label">Pilihan A</label>	
			<div class="col-md-8"><textarea  name="pilihan_a" cols="50" rows="10"  class="form-control "><?php echo $data['pilihan_a']; ?></textarea></div> 
		</div>
		
		<div class="form-group"> 
			<label for="focusedinput" class="col-sm-2 control-label">Pilihan B</label>	
			<div class="col-md-8"><textarea name="pilihan_b" cols="50" rows="10" class="form-control "><?php echo $data['pilihan_b']; ?></textarea></div> 
		</div>
		<div class="form-group"> 
			<label for="focusedinput" class="col-sm-2 control-label">Pilihan C</label>	
			<div class="col-md-8"><textarea  name="pilihan_c" cols="50" rows="10" class="form-control" ><?php echo $data['pilihan_c']; ?></textarea></div> 
		</div>
		<div class="form-group"> 
			<label for="focusedinput" class="col-sm-2 control-label">Pilihan D</label>	
			<div class="col-md-8"><textarea  name="pilihan_d" cols="50" rows="10" class="form-control " ><?php echo $data['pilihan_d']; ?></textarea></div> 
		</div>
		<div class="form-group"> 
			<label for="focusedinput" class="col-sm-2 control-label">Pilihan E</label>	
			<div class="col-md-8"><textarea  name="pilihan_e" cols="50" rows="10" class="form-control " ><?php echo $data['pilihan_e']; ?></textarea></div> 
		</div>
		

		 <div class="form-group">
         <label for="focusedinput" class="col-sm-2 control-label">Jawaban</label>
        <div class="col-md-4">
        <select name="jawaban" class="form-control"> <?php echo $data['jawaban']; ?>
        	<option value="a">A</option>
            <option value="b">B</option>
            <option value="c">C</option>
            <option value="d">D</option>
            <option value="e">E</option>
        </select>
       </select>
       </div>
       </div>
    
    
    <div class="form-group">
         <label for="focusedinput" class="col-sm-2 control-label">Publish</label>
        <div class="col-md-4">
        <select name="publish" class="form-control"><?php echo $data['publish']; ?>
        	<option value="yes">Yes</option>
            <option value="no">No</option>
        </select>
       </div>
       </div>
    
		
		<div class="form-group"> 
			<label class="label-control col-md-2"></label>				
			<div class="col-md-4"> <input type="submit" name="edit" value="Edit" class="btn btn-info"></div> 
		</div>
</form>
</div>
</div>