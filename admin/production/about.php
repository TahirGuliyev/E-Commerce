<?php
include 'header.php';
$aboutQuery = $db->prepare("SELECT * FROM about WHERE about_id=:id");
$aboutQuery->execute(array(
  'id' => 0
));
$aboutTake = $aboutQuery->fetch(PDO::FETCH_ASSOC);
?>

        <div class="right_col" role="main">
          <div class="">
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Haqqımızda <?php  
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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Başlıq </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="about_title" value="<?php echo $aboutTake['about_title'] ?>" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Məzmun </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <textarea name="about_content" id="editor1" ><?php echo $aboutTake['about_content'] ?></textarea>
                            <script>
                                CKEDITOR.replace( 'about_content' );
                            </script>
                          
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Video </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="about_video" value="<?php echo $aboutTake['about_video'] ?>" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Vision </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="about_vision" value="<?php echo $aboutTake['about_vision'] ?>" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Missiyamız </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="about_mission" value="<?php echo $aboutTake['about_mission'] ?>" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      


                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" name="aboutSave" class="btn btn-success">Dəyişdir</button>
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