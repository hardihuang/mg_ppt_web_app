<?php 
	$pageTitle="版本更新记录";
	require_once 'includes/header.php';

	$rows=getVersionList();

	if($uid == 1){
		echo('
			<div class="container mt-5" >
				<form  method="post" action="doAction.php?act=newVersion"  enctype="multipart/form-data">
				  <div class="row">
				    <div class="col-md-2">
				      <input type="version" name="version" class="form-control" placeholder="version">
				    </div>
				    <div class="col-md-8 ">
				      <input type="content" name="content" class="form-control" placeholder="content">
				    </div>
				    <button type="submit" name="submit" class="btn btn-primary">记录</button>
				  </div>
				  
				</form>
			</div>

			');
	}


	echo('<div class="container mt-5" >
		<ul class="list-group list-group-flush">
		');

	foreach ($rows as $row) {
		echo('
			<li class="list-group-item">
			  	<h5><span class="badge badge-secondary mr-1">V'.$row['version'].'</span>
			  		'.$row['dateTime'].'</h5>
			  	<p>'.$row['content'].'</p>
		  	</li>
		  ');
	};
	echo('</ul></div>');
?>
	<br><br>





<?php 
require_once 'includes/footer.php';
 ?>

<!--
待添加新功能：

·添加ppt上传功能，一键上传所有ppt页面
·支持图片拖拽排序


-->