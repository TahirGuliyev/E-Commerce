<?php
include 'header.php';
$menuQuery = $db->prepare("SELECT * FROM menu WHERE menu_id=:id");
$menuQuery->execute(array(
  'id' => $_GET['menu_id']
));
$menuTake = $menuQuery->fetch(PDO::FETCH_ASSOC);
?>
        <div class="right_col" role="main">
          <div class="">
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Menyulardada Düzəliş Et <?php  
                    if($_GET['status']=="ok"){ ?>
                    <b style="color:green;" >Əməliyyat uğurla yerinə yetirildi!</b>
                    <?php } elseif($_GET['status']=="bad"){ ?>
                    <b style="color:red;" >Xəta baş verdi!</b>
                    <?php }
                    ?>
                    </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                   
                    <!--FORM-->
                    <form action="../setting/process.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                  

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Menyu Adı </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="menu_name" value="<?php echo $menuTake['menu_name'] ?>" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Menyu Linki </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="menu_url" value="<?php echo $menuTake['menu_url'] ?>" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Menyu Sırası </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="menu_sira" value="<?php echo $menuTake['menu_sira'] ?>" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Menyu Statusu<span class="required">
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                 <select id="heard" class="form-control" name="menu_status" required>

                    <?php echo $menuTake['menu_status'] == '1' ? 'selected=""' : ''; ?>

                  
                  <option value="1" <?php echo $menuTake['menu_status'] == '1' ? 'selected=""' : ''; ?>>Aktiv</option>



                  <option value="0" <?php if ($menuTake['menu_status']==0) { echo 'selected=""'; } ?>>Passiv</option>
                </select>
               </div></div>
               <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Menyu Məzmun </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <textarea name="menu_detail" id="editor1" ><?php echo $menuTake['menu-detail'] ?></textarea>
                            <script>
                                CKEDITOR.replace( 'editor1' );
                            </script>
                          
                </div></div>
               <input type="hidden" name="menu_id" value="<?php echo $menuTake['menu_id']; ?>"> 


                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" name="menuUpdate" class="btn btn-success">Dəyişdir</button>
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