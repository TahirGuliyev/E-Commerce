<?php
include 'header.php';
$aboutQuery = $db->prepare("SELECT * FROM about WHERE about_id=:id");
$aboutQuery->execute(array(
  'id' => 0
));
$aboutTake = $aboutQuery->fetch(PDO::FETCH_ASSOC);
?>

	
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="page-title-wrap">
					<div class="page-title-inner">
					<div class="row">
						<div class="col-md-4">
							<div class="bigtitle">Haqqımızda</div>
						</div>
					</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-9"><!--Main content-->
				<div class="title-bg">
					<div class="title"><?php echo $aboutTake['about_title'] ?></div>
				</div>
				<div class="page-content">
					<?php echo $aboutTake['about_content'] ?>
				</div>
				<div class="title-bg">
					<div class="title">Vision</div>
					
				</div><blockquote><?php echo $aboutTake['about_vision'] ?></blockquote>
				<div class="title-bg">
					<div class="title">Missiyamız</div>
					
				</div><blockquote><?php echo $aboutTake['about_mission'] ?></blockquote>
			</div>
		<?php
		include 'sidebar.php';
		?>
		</div>
		<div class="spacer"></div>
	</div>
	<?php
	include 'footer.php';
	?>