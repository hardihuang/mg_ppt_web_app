<?php 
$pageTitle="老师端-PPT页面";
require_once 'includes/header.php';
?>


<div class="container-fluid">
	<div class="row">

		<div class="p-3 col-8  float-left" >
			<div id="ppt_main" class="carousel slide carousel-fade border " data-interval="false" data-ride="carousel">
				<?php require 'includes/carousel-inner.php' ?>
			</div><!--end of ppt_main-->
		</div><!--end of p3 col-8-->

		<div class="col-4 float-right">
			<div class="card mb-3 mt-3">
	            <div class="card-header font-weight-bolder">下一张幻灯片 Next Slide</div>
	            <div class="card-body">
	                <div id="ppt_preview" class="carousel slide" data-interval="false"  data-ride="carousel">
	                	<?php require 'includes/carousel-inner.php' ?>
	                </div>
	            </div><!--end of card-body-->
	        </div><!--end of card mb-3 mt-3-->

	        <?php require_once 'includes/admin-control-pannel.php' ?>
		</div><!--end of col-4 -->

	</div><!--end of row-->

</div><!--end of container-fluid-->

<script type="text/javascript" src="scripts/admin.js"></script>

<?php 
require_once 'includes/progress-bar.php';
require_once 'includes/footer.php'
?>
