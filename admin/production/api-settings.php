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
                    <h2>API Parametrləri <?php  
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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Xəritə </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="setting_map" value="<?php echo $settingTake['setting_map'] ?>" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Analystic Kodu </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="setting_analystic" value="<?php echo $settingTake['setting_analystic'] ?>" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Zopim </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="setting_zopim" value="<?php echo $settingTake['setting_zopim'] ?>" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      


                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" name="apiSettingSave" class="btn btn-success">Dəyişdir</button>
                        </div>
                      </div>

                    </form>  
                  <!--FORM-->

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