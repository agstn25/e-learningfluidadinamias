<?php
if(!empty($_SESSION['username'])and !empty($_SESSION['password'])){
	include "koneksi/koneksi.php";
?>
	
	<?php
	if(isset($_POST['submit'])){
	
		$benar=$_POST['benar'];
		$salah=$_POST['salah'];
		$kosong=$_POST['kosong'];
		$poin=$_POST['poin'];
		$id_loginsiswa=$_POST['id_loginsiswa'];
		$tanggal= date('Ymd');
		
		$query=mysqli_query($koneksi,"insert into tabel_nilai values('','$benar','$salah','$kosong','$poin','$id_loginsiswa','$tanggal')");
		
		if($query){
			?><script language="javascript">document.location.href='?tampil=nilai'</script><?php
		}else{
			echo mysqli_error();
		}
		
	}
	?>
	
<?php
}else{
	?><p>Anda belum login. silahkan <a href="index.php">Login</a></p><?php
}
?>
</div>
