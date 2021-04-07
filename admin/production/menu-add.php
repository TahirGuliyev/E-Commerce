<?php
include 'header.php';
?>
        <div class="right_col" role="main">
          <div class="">
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Menyu Əlavə Et </h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                   
                    <!--FORM-->
                    <form action="../setting/process.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                  

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Menyu Adı </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="menu_name" placeholder="Menyu adını daxil edin" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Menyu Linki </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="menu_url" placeholder="Menyu linkini daxil edin" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Menyu Sırası </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="menu_sira" placeholder="Menyu sırasını daxil edin" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" >Menyu Statusu<span class="required">
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                 <select id="heard" class="form-control" name="menu_status" required>

                   

                  
                  <option value="1">Aktiv</option>



                  <option value="0">Passiv</option>
                </select>
               </div></div>
               <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Menyu Məzmun </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <textarea name="menu_detail" id="editor1" ></textarea>
                            <script>
                                CKEDITOR.replace( 'editor1' );
                            </script>
                          
                </div></div>
               


                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" name="menuAdd" class="btn btn-success">Əlavə Et</button>
                        </div>
                      </div>

                    </form>  

                  </div>
                </div>
              </div>
              
            </div>
          </div>
        </div>
        <!-- /page content -->
<?php 
include 'footer.php';
?>