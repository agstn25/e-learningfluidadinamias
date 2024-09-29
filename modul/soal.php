<?php
if(!empty($_SESSION['username'])and !empty($_SESSION['password'])){
    include "koneksi/koneksi.php";
?>
       <div  data-scrollreveal="enter left and move 40px over 0.8s">
  

  <?php
 
    $sql = mysqli_query($koneksi,"SELECT * FROM timer");
     
  
    if(mysqli_num_rows($sql) == 0){
        $jam    = 0;
        $menit  = 10;
    }else{
        $data   = mysqli_fetch_array($sql);
         
         if($data['waktu'] < 60){ 
             $menit = $data['waktu']; 
             $jam = 0; 
        }else{ 
             $menit = $data['waktu']%60;
 
            $jam = (int)($data['waktu']/60); //dijadikan integer
        } 
    }
?>

<body>

    <div id='timer'></div>
   
    <form action="?page=score" id="form" name="form" method="POST"> 
          <div class="container">
          <div>
           
        <?php
        $hasil=mysqli_query($koneksi,"select * from tabel_soal where publish='yes' order by RAND()");
        $jumlah=mysqli_num_rows($hasil);
        $urut=0;
        while($row =mysqli_fetch_array($hasil))
        {
            $id=$row["id_soal"];
            $pertanyaan=$row["pertanyaan"];
            $pilihan_a=$row["pilihan_a"];
            $pilihan_b=$row["pilihan_b"];
            $pilihan_c=$row["pilihan_c"];
            $pilihan_d=$row["pilihan_d"];  
            $pilihan_e=$row["pilihan_e"]; 
            
            ?>
            <input type="hidden" name="id[]" value=<?php echo $id; ?>>
            <input type="hidden" name="jumlah" value=<?php echo $jumlah; ?>>
            <table width="1000" border="0" id="s<?php echo $urut=$urut+1; ?>">

            <tr>
                <td width="17"><font color="#222"><?php echo $urut; ?>.</font></td>
                <td width="430"><font color="#222"><?php echo "$pertanyaan"; ?></font></td>
                <div class="radio">
            </tr>
            <tr>
                  <td height="21"><font color="#000000">&nbsp;</font></td>
                <td><font color="#000000">
               A.  <input  name="pilihan[<?php echo $id; ?>]" type="radio" value="A"> 
                <?php echo "$pilihan_a";?></font> </td>
            </tr>
            <tr>
                  <td><font color="#000000">&nbsp;</font></td>
                <td><font color="#000000">
               B. <input name="pilihan[<?php echo $id; ?>]" type="radio"  value="B">
                <?php echo "$pilihan_b";?></font> </td>
            </tr>
            <tr>
                  <td><font color="#000000">&nbsp;</font></td>
                <td><font color="#000000">
              C.  <input name="pilihan[<?php echo $id; ?>]" type="radio"  value="C">
                <?php echo "$pilihan_c";?></font> </td>
            </tr>
            <tr>
                <td><font color="#000000">&nbsp;</font></td>
                <td><font color="#000000">
              D.   <input name="pilihan[<?php echo $id; ?>]"  type="radio"  value="D"> 
                <?php echo "$pilihan_d";?></font> </td>
            </tr>
             <tr>
                <td><font color="#000000">&nbsp;</font></td>
                <td><font color="#000000">
              E.   <input name="pilihan[<?php echo $id; ?>]"  type="radio"  value="E"> 
                <?php echo "$pilihan_e";?></font> </td>
            </tr>
            </table>


        <?php
        }
        ?>
            <tr>
                <td>&nbsp;</td>
            </tr>
        
              
</div>
<h1><div id="pesan" style="display:none">Silahkan submit dan lihat skor anda</div></h1>
<input type="submit" class="btn btn-info" name="submit" value="Submit" >
 </form>


    <!-- Kita membutuhkan jquery, disini saya menggunakan langsung dari jquery.com, jquery ini bisa didownload dan ditaruh dilocal -->
    <script src="http://code.jquery.com/jquery-1.10.2.min.js" type="text/javascript"></script>
  
    <!-- Script Timer -->
    <script type="text/javascript">

       

   $(document).ready(function(){
            /** Membuat Waktu Mulai Hitung Mundur Dengan 
                * var detik = 0,
                * var menit = 1,
                * var jam = 1
            */
            var detik = 0;
            var menit = <?php echo $menit; ?>; 
            var jam     = <?php echo $jam; ?>;
            var hari    = 2;
                  

            /**
               * Membuat function hitung() sebagai Penghitungan Waktu
            */
            function hitung() {
                /** setTimout(hitung, 1000) digunakan untuk 
                     * mengulang atau merefresh halaman selama 1000 (1 detik) 
                */
                setTimeout(hitung,1000);
  
                /** Jika waktu kurang dari 10 menit maka Timer akan berubah menjadi warna merah */
                if(menit < 10 && jam == 0){
                    var peringatan = 'style="color:red"';
                };
  
                /** Menampilkan Waktu Timer pada Tag #Timer di HTML yang tersedia */
                $('#timer').html(
                    '<h1 align="center"'+peringatan+'>Sisa waktu anda <br />' + jam + ' jam : ' + menit + ' menit : ' + detik + ' detik</h1><hr>'
                );
  
                /** Melakukan Hitung Mundur dengan Mengurangi variabel detik - 1 */
                detik --;
  
                /** Jika var detik < 0
                    * var detik akan dikembalikan ke 59
                    * Menit akan Berkurang 1
                */
                if(detik < 0) {
                    detik = 59;
                    menit --;
  
                   /** Jika menit < 0
                        * Maka menit akan dikembali ke 59
                        * Jam akan Berkurang 1
                    */
                    if(menit < 0) {
                        menit = 59;
                        jam --;
  
                        /** Jika var jam < 0
                            * clearInterval() Memberhentikan Interval dan submit secara otomatis
                        */

                        if(jam < 0) { 
                            // var s1 = document.getElementById('s1').value;
                            // // if(document.getElementById('s1').checked){
                            // //     s1v = document.getElementById('s1').value;
                            // // }

                            /** Variable yang digunakan untuk submit secara otomatis di Form */
                         
                            
                                alert('Waktu Anda telah habis, Terima kasih sudah berkunjung.');
                                var i;
                                var n= <?=$urut ?>

                                for (i = 1; i <= n; i++) {
                                    document.getElementById("s"+i).style.display = "none";
                                    }

                                document.getElementById("timer").style.display = "none";
                                document.getElementById("pesan").style.display = "block";
                                

                               // document.getElementById("form").submit();
                            
                               
                          
                           // window.location="?tampil=jawaban&s1="+s1v;
                        
                     } 
                } 
            }
        }           
            /** Menjalankan Function Hitung Waktu Mundur */
            hitung();
      }); 
      // ]]>
    </script>

    
</body>

 <?php
}else{
    ?><p>Anda belum login. silahkan <a href="index.php">Login</a></p><?php
}
?>
</div>







