
<?php
if(!empty($_SESSION['username'])and !empty($_SESSION['password'])){
	include "koneksi/koneksi.php";
	error_reporting(0);
?>

        <h1>Hasil Jawaban </h1>
 
 <div class="container">
 	<div class="row">       
	   <?php 
       if(isset($_POST['submit'])){
			$pilihan=$_POST["pilihan"];
			$id_soal=$_POST["id"];
			$jumlah=$_POST['jumlah'];
		
			$score=0;
			$benar=0;
			$salah=0;
			$kosong=0;

			for ($i=0;$i<$jumlah;$i++){
				//id nomor soal
				$nomor=$id_soal[$i];
				
				//jika user tidak memilih jawaban
				if (empty($pilihan[$nomor])){
					$kosong++;
				}else{
					//jawaban dari user
					$jawaban=$pilihan[$nomor];
					
					//cocokan jawaban user dengan jawaban di database
					$query=mysqli_query($koneksi,"select * from tabel_soal where id_soal='$nomor' and jawaban='$jawaban'");
					
					$cek=mysqli_num_rows($query);
					
					if($cek){
						//jika jawaban cocok (benar)
						$benar++;
					}else{
						//jika salah
						$salah++;
					}
					
				} 
				$result=mysqli_query($koneksi,"select * from tabel_soal WHERE publish='Y'");
                $jumlah_soal=mysqli_num_rows($result);
                $score = $benar*3.333;
                $hasil = number_format($score,1);
			}
		}
	
       ?>

        
      <form action="?page=simpan" method="post">
		<table width="100%" border="0">
		<tr>
			<td width="12%"><font color="#222">Benar</font></td><td width="88%"><font color="#222">= <?php echo $benar;?>soal</font></td>
		</tr>
		<tr>
			<td><font color="#222">Salah</font></td><td><font color="#222">= <?php echo $salah;?> soal </font></td>
		</tr>
		<tr>
			<td><font color="#222">Kosong</font></td><td><font color="#222">= <?php echo $kosong;?> soal </font></td>
		</tr>
		<tr>
			<td><font color="#222"><b>Score</b></font></td><td><font color="#222">= <b><?php echo $score;?></b> Poin</font></td>
		</tr>
		</table>
        
        <input type="hidden" name="benar" value="<?php echo $benar;?>" />
        <input type="hidden" name="salah" value="<?php echo $salah;?>" />
        <input type="hidden" name="kosong" value="<?php echo $kosong;?>" />
        <input type="hidden" name="poin" value="<?php echo $score;?>" />
        <input type="hidden" name="id_loginsiswa" value="<?php echo $_SESSION['id_loginsiswa']?>" />
        <p></p>
        <input type="submit" class="btn btn-info" name="submit" value="Submit" >
        
        </form> 

	 <?php

}else{
	?><p>Anda belum login. silahkan <a href="index.php">Login</a></p><?php
}
?>
</div>
