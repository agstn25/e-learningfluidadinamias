<div class="content_bottom">
     <div class="col-md-12 span_3">
          <div class="bs-example1" data-example-id="contextual-table">
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">

    <h1>Input Soal</h1>

    <form name="tambah" method="post" action="?page=soal_tambahproses" class="form-horizontal">

      <div class="form-group">
            <label for="focusedinput" class="col-sm-2 control-label">Pertanyaan</label>            
            <div class="col-md-8"><textarea class="ckeditor" name="pertanyaan" cols="50" rows="10" id="ckeditor" placeholder="Default Input" class="form-control1 control2"></textarea></div>
        </div>
        
        <div class="form-group">
            <label for="focusedinput" class="col-sm-2 control-label">Pilihan A</label>  
            <div class="col-md-8"><textarea class="form-control col-md-5 col-xs-10" cols="50" rows="10" placeholder="Default Input" name="pilihan_a" class="form-control1 control2"></textarea></div>
        </div>

        <div class="form-group">
            <label for="focusedinput" class="col-sm-2 control-label">Pilihan B</label>  
            <div class="col-md-8"><textarea class="form-control col-md-7 col-xs-12" cols="50" rows="10"  placeholder="Default Input" name="pilihan_b" class="form-control1 control2"></textarea></div>
        </div>

        <div class="form-group">
            <label for="focusedinput" class="col-sm-2 control-label">Pilihan C</label>  
            <div class="col-md-8"><textarea  class="form-control col-md-7 col-xs-12" cols="50" rows="10"  placeholder="Default Input" name="pilihan_c" class="form-control1 control2"></textarea></div>
        </div>

        <div class="form-group">
            <label for="focusedinput" class="col-sm-2 control-label">Pilihan D</label>  
            <div class="col-md-8"><textarea  class="form-control col-md-7 col-xs-12" cols="50" rows="10"  placeholder="Default Input" name="pilihan_d" class="form-control1 control2"></textarea></div>
        </div>

         <div class="form-group">
            <label for="focusedinput" class="col-sm-2 control-label">Pilihan E</label>  
            <div class="col-md-8"><textarea  class="form-control col-md-7 col-xs-12" cols="50" rows="10"  placeholder="Default Input" name="pilihan_e" class="form-control1 control2"></textarea></div>
        </div>

      
    
        <div class="form-group">
         <label for="focusedinput" class="col-sm-2 control-label">Jawaban</label>
        <div class="col-md-4">
        <select name="jawaban" class="form-control">

            <option value="a">A</option>
            <option value="b">B</option>
            <option value="c">C</option>
            <option value="d">D</option>
            <option value="d">E</option>
        </select>
       </select>
       </div>
       </div>
    
    
    <div class="form-group">
         <label for="focusedinput" class="col-sm-2 control-label">Publish</label>
        <div class="col-md-4">
        <select name="publish" class="form-control">

            <option value="yes">Yes</option>
            <option value="no">No</option>
        </select>
       </select>
       </div>
       </div>
    
    
    <tr>
       <div class="form-group">
            <label class="label-control col-md-2"></label>              
            <div class="col-md-4"> <input type="submit" name="tambah" value="Tambah" class="btn btn-info"></div>
        </div>
        
    </tr>
    </table>
    </form>

</div>
</div>
</div>


    
