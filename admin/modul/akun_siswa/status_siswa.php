<?php  
        
        $kode= $_GET['id'];

                                  
                                 
        $caridata = mysqli_query($koneksi,"SELECT * FROM tabel_loginsiswa where id_loginsiswa='$kode'");
        $data = mysqli_fetch_array($caridata);
        
        if ($data['Aktif']=='Y'){
              $sql=mysqli_query($koneksi,"UPDATE tabel_loginsiswa set Aktif='N' where id_loginsiswa='$kode'" );

                   
        } 
        if ($data['Aktif']=='N'){
             $sql=mysqli_query($koneksi,"UPDATE tabel_loginsiswa set Aktif='Y' where id_loginsiswa='$kode'" );

                  
        }      
    
    echo"Update Status";
    echo"<meta http-equiv='refresh' content='1; url=?page=akun_siswa'>";  
?>        