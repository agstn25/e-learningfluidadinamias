<?php  
        
        $kode= $_GET['id'];
                 
        $sql = mysqli_query($koneksi,"SELECT * FROM tabel_soal where id_soal='$kode'");
        $row = mysqli_fetch_array($sql);
        
        if ($row['publish']=='yes'){
              $sql=mysqli_query($koneksi,"UPDATE tabel_soal set publish='no' where id_soal='$kode'" );
        } 
        if ($row['publish']=='no'){
             $sql=mysqli_query($koneksi,"UPDATE tabel_soal set publish='yes' where id_soal='$kode'" );     
        }      
    
    echo"Update Status";
    echo"<meta http-equiv='refresh' content='1; url=?page=soal_lihat'>";  
?>        