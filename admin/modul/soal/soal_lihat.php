    <div class="content_bottom">
     <div class="col-md-12 span_3">
          <div class="bs-example1" data-example-id="contextual-table">
    <div>
        <h1>Soal</h1>
    
        <p>
        <?php


		$sql = mysqli_query($koneksi,"select * from tabel_soal order by tipe asc");

		?><table width="100%"><?php
		$no=0;
		while($row=mysqli_fetch_array($sql)){
		?>
			<tr>
           		<td><font color="#222"><?php echo $no=$no+1;?>.</font></td><td><font color="#222"><?php echo $row['pertanyaan'];?></font></td>
            </tr>
            <tr>
           		<td></td><td><font color="#222">A) <?php echo $row['pilihan_a'];?></font></td>
            </tr>
            <tr>
           		<td></td><td><font color="#222">B) <?php echo $row['pilihan_b'];?></font></td>
            </tr>
            <tr>
           		<td></td><td><font color="#222">C) <?php echo $row['pilihan_c'];?></font></td>
            </tr>
            <tr>
           		<td></td><td><font color="#222">D) <?php echo $row['pilihan_d'];?></font></td>
            </tr>
            <tr>
              <td></td><td><font color="#222">E) <?php echo $row['pilihan_e'];?></font></td>
            </tr>
            <tr>
           		<td></td><td><font color="#222">JAWABAN : <b><?php echo $row['jawaban'];?></b> &raquo; PUBLISH : <b><?php echo ucwords($row['publish']);?></b> &raquo;
               </b> &raquo;</font>
                <a href="?page=soal_edit&id=<?php echo $row['id_soal']?>" title="edit" class="btn btn-info btn-xs">Edit</a> 
                <a href="?page=soal_hapus&id=<?php echo $row['id_soal']?>" title="Delete" onclick="return confirm('Apakah anda yakin akan menghapus pertanyaan ini ?')" class="btn btn-danger btn-xs">Hapus</a>

                
                <?php if ($row['publish']=='yes'){ ?>
                  <a href="?page=status&id=<?= $row ['id_soal'] ?>" class="btn btn-info btn-xs">AKTIF</button></a>
                  <?php } else if ($row['publish']=='no'){ ?>
                  <a href="?page=status&id=<?= $row ['id_soal'] ?>"class="btn btn-danger btn-xs">TIDAK</button></a>
                <?php } ?>
              </td>    
            </tr>
          </div>
       </div>
      </td>
    </tr>
   <tr>
  <td colspan="2"><br /></td>
</tr>
		<?php
		}
		?>
</table>
</p>
</div>
</div>
</div>

