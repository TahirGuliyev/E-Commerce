<?php 
include 'header.php';
$menuQuery=$db->prepare("SELECT * FROM menu where menu_seourl=:sef");
$menuQuery->execute(array(
	'sef' => $_GET['sef']
	));
$menuTake=$menuQuery->fetch(PDO::FETCH_ASSOC);
?>
<div class="container">
	<div class="row">
		<div class="col-md-9"><!--Main content-->
        <div class="title-bg">
				<div class="title"><?php echo $menuTake['menu_name'] ?></div>
			</div>
            <div class="page-content">
				<p>
					<?php echo $menuTake['menu_detail']; ?>
				</p>
			</div>
            	</div>
		<?php include 'sidebar.php'; ?>
	</div>
	<div class="spacer"></div>
</div>

<?php include 'footer.php'; ?>