<?php 
	$pageTitle="版本更新记录~~";
	require_once 'includes/header.php';

	$rows=getVersionList();


	


	echo('<div class="container mt-5" >
		<ul class="list-group list-group-flush">
		');

	echo('<h1 class="mb-5 mx-auto">网站版本更新记录</h1>');
	if($uid == 1){
		echo('
			<form class="my-5" method="post" action="doAction.php?act=newVersion"  enctype="multipart/form-data">
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
			');
	}

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

·支持图片拖拽排序
·admin页面点击下课后，自动清空mg_student表格中上此课的所有学生，以及mg_class中该课的条目
·student.php 右下角排行榜更改为当前课堂学生
·老师通过ajax控制页面
·判断无课信息

-->