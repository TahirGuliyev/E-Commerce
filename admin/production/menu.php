<?php 

include 'header.php'; 

$menuQuery=$db->prepare("SELECT * FROM menu");
$menuQuery->execute();


?>


<!-- page content -->
<div class="right_col" role="main">
  <div class="">

    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Menyular <small>,

              <?php 

              if ($_GET['status']=="ok") {?>

              <b style="color:green;">Əməliyyat uğurla yerinə yetirildi...</b>

              <?php } elseif ($_GET['durum']=="bad") {?>

              <b style="color:red;">Xəta baş verdi...</b>

              <?php }

              ?>


            </small></h2>

            <div class="clearfix"></div>

            <div align="right">
              <a href="menu-add.php"><button class="btn btn-success">Menyu Əlavə Et</button></a>

            </div>
          </div>
          <div class="x_content">


            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
              <thead>
                <tr>
                  <th>S.No</th>
                  <th>Menyu Adı</th>
                  <th>Menyu Link</th>
                  <th>Menyu Sırası</th>
                  <th>Menyu Statusu</th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>

              <tbody>

                <?php 

                $count=0;

                while($menuTake=$menuQuery->fetch(PDO::FETCH_ASSOC)) { $count++?>


                <tr>
                 <td width="20"><?php echo $count ?></td>
                 <td><?php echo $menuTake['menu_name'] ?></td>
                 <td><?php echo $menuTake['menu_url'] ?></td>
                 <td><?php echo $menuTake['menu_sira'] ?></td>

                 <td><center><?php 

                  if ($menucek['menu_durum']==1) {?>

                  <button class="btn btn-success btn-xs">Aktiv</button>

                

                <?php } else {?>

                <button class="btn btn-danger btn-xs">Passiv</button>


                <?php } ?>
              </center>


            </td>


            <td><center><a href="menu-update.php?menu_id=<?php echo $menuTake['menu_id']; ?>"><button class="btn btn-primary btn-xs">Düzəliş Et</button></a></center></td>
            <td><center><a href="../setting/process.php?menu_id=<?php echo $menuTake['menu_id']; ?>&menudelete=ok"><button class="btn btn-danger btn-xs">Sil</button></a></center></td>
          </tr>



          <?php  }

          ?>


        </tbody>
      </table>

    </div>
  </div>
</div>
</div>




</div>
</div>
<!-- /page content -->

<?php include 'footer.php'; ?>
