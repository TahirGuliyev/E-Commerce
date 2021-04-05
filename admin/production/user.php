<?php 

include 'header.php'; 

//Belirli veriyi seçme işlemi
$userQuery=$db->prepare("SELECT * FROM user");
$userQuery->execute();


?>


<!-- page content -->
<div class="right_col" role="main">
  <div class="">

    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>İstifadəçilər <small>

              <?php 

              if ($_GET['durum']=="ok") {?>

              <b style="color:green;">Əməliyyat uğurlar yerinə yetirildi...</b>

              <?php } elseif ($_GET['durum']=="no") {?>

              <b style="color:red;">Xəta baş verdi...</b>

              <?php }

              ?>


            </small></h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">


            <!-- Div İçerik Başlangıç -->

            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>Qeydiyyat Tarixi</th>
                  <th>Ad Soyad</th>
                  <th>Mail Adresi</th>
                  <th>Telefon</th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>

              <tbody>

                <?php 

                while($userTake=$userQuery->fetch(PDO::FETCH_ASSOC)) {?>


                <tr>
                  <td><?php echo $userTake['user_date'] ?></td>
                  <td><?php echo $userTake['user_adsoyad'] ?></td>
                  <td><?php echo $userTake['user_mail'] ?></td>
                  <td><?php echo $userTake['user_gsm'] ?></td>
                  <td><center><a href="user-update.php?user_id=<?php echo $userTake['user_id'] ?>"><button class="btn btn-primary btn-xs">Düzəliş Et</button></a></center></td>
                  <td><center><a href="../setting/process.php?user_id=<?php echo $userTake['user_id']; ?>&userDelete=ok"><button class="btn btn-danger btn-xs">Sil</button></a></center></td>
                </tr>
                <?php  }
                ?>


              </tbody>
            </table>

            <!-- Div İçerik Bitişi -->


          </div>
        </div>
      </div>
    </div>




  </div>
</div>
<!-- /page content -->

<?php include 'footer.php'; ?>
