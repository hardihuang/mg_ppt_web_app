<?php 
$pageTitle="学生端-PPT页面";
require_once 'includes/header.php';
$students = getClassStudents($uid);
//print_r($students);
?>

<div class="container-fluid">
	<div class="row">
	<div id="fetchData"></div>
		<div class="p-3 col-8  float-left" >
			<div id="ppt_main" class="carousel slide carousel-fade border " data-interval="false" data-ride="carousel">
				<?php require_once 'includes/carousel-inner.php' ?>
			</div><!--end of ppt_main-->
		</div><!--end of p3 col-8-->

		<div class="col-4 float-right">
			<?php require_once 'includes/modal.php' ?>
			<?php require_once 'includes/leader-board.php' ?>
		</div><!--end of col-4 -->

	</div><!--end of row-->

</div><!--end of container-fluid-->
<script type="text/javascript" src="scripts/student.js"></script>
<?php 
require_once 'includes/progress-bar.php';
require_once 'includes/footer.php'
?>
