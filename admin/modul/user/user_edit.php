
<?php

	$sql = mysqli_query($koneksi,"SELECT * FROM user") or die(mysqli_error());
	$data  	= mysqli_fetch_array($sql);
?>

<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">

<h2>Edit User</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />

<div class="content_bottom">
     <div class="col-md-12 span_3">
          <div class="bs-example1" data-example-id="contextual-table">
<form name="edit" method="post" action="?page=user_editproses" class="form-horizontal">
	<input type="hidden" name="id" value="<?php echo $data['id_user']; ?>">
	

	<div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Username <span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
   	<input type="text" id="first-name" required="required" name="username" class="form-control col-md-7 col-xs-12" value="<?php echo $data['username']; ?>">
    </div>
    </div>

	<div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Password<span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
   	<input type="password" id="first-name" required="required" name="password" class="form-control col-md-7 col-xs-12" value="<?php echo $data['password']; ?>">
    </div>
    </div>
	
	<div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Ulang Password<span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6 col-xs-12">
   	<input type="password" id="first-name" required="required" name="ulang_password" class="form-control col-md-7 col-xs-12" value="<?php echo $data['password']; ?>">
    </div>
    </div>

		
		<div class="form-group"> 
			<label class="label-control col-md-2"></label>				
			<div class="col-md-4"> <input type="submit" name="edit" value="Edit" class="btn btn-primary"></div> 
		</div>
</form>
</div>
</div>
</div>