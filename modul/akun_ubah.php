<?php
    $sql = mysqli_query($koneksi,"SELECT * FROM tabel_loginsiswa where id_loginsiswa='$_SESSION[id_loginsiswa]'") or die(mysqli_error());
    $data   = mysqli_fetch_array($sql);
?>
        <div  data-scrollreveal="enter left and move 40px over 0.8s">

   <header>
            <div class="row">
                <div class="col-lg-12">
                    <img class="img-responsive" src="images/admin.png"  alt="">
                    <div class="intro-text">
                       <div class="col-lg-8 col-lg-offset-2 text-center">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header><br>

<form name="edit" method="post" action="?page=akun_ubahproses" class="form-horizontal">
	<input type="hidden" name="id" value="<?php echo $data['id_loginsiswa']; ?>">

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
	<div class="col-md-4"> <input type="submit" name="edit" value="Ubah" class="btn btn-primary"></div> 
	</div>
	
</form>