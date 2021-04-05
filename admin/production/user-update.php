<?php
include 'header.php';
$userQuery = $db->prepare("SELECT * FROM user WHERE user_id=:id");
$userQuery->execute(array(
  'id' => $_GET['user_id']
));
$userTake = $userQuery->fetch(PDO::FETCH_ASSOC);
?>
        <div class="right_col" role="main">
          <div class="">
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>İstifadəçi Məlumatlarında Düzəliş Et <?php  
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
                    <?php 

            $time=explode(" ",$userTake['user_date']);

             ?>

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" >Qeydiyyat Tarixi <span class="required">
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="" id="first-name" name="user_date" disabled="" value="<?php echo $time[0]; ?>" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" >Qeydiyyat Saatı <span class="required">
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="time" id="first-name" name="user_date" disabled="" value="<?php echo $time[1]; ?>" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >İstifadəçi FinKod </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="user_finkod" value="<?php echo $userTake['user_finkod'] ?>" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Ad Soyad </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" name="user_adsoyad" value="<?php echo $userTake['user_adsoyad'] ?>" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Mail Ünvanı </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="email" id="first-name" name="user_mail" disabled value="<?php echo $userTake['user_mail'] ?>" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">İstifadəçi Statusu<span class="required">
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                 <select id="heard" class="form-control" name="user_status" required>

                    <?php echo $userTake['user_status'] == '1' ? 'selected=""' : ''; ?>

                  



                  <option value="1" <?php echo $userTake['user_status'] == '1' ? 'selected=""' : ''; ?>>Aktiv</option>



                  <option value="0" <?php if ($userTake['user_status']==0) { echo 'selected=""'; } ?>>Passiv</option>
                </select>
               </div></div>
               <input type="hidden" name="user_id" value="<?php echo $userTake['user_id']; ?>"> 


                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" name="userUpdate" class="btn btn-success">Dəyişdir</button>
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