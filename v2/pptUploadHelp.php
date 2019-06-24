<?php 
	$pageTitle="PPT上传规范";
	require_once 'includes/header.php';

?>
	
<div class="container mt-5">
	<ul class="list-group list-group-flush">
		<h1 class="mb-5 mx-auto">PPT上传规范</h1>	
		<li class="list-group-item">
			<h3>1.PPT文件导出方法：</h3>
			<h5 class="pl-3">使用微软Office PowerPoint软件</h5>
			<p class="pl-3">打开幻灯片后，点击软件左上角的【文件】标签，按照下图操作，即可导出图片</p>
			<br>
			<img class="pl-3 mb-3" style="max-width: 100%;" src="./images/asset/pptUploadHelp/export.png">
			<img class="pl-3" style="max-width: 100%;" src="./images/asset/pptUploadHelp/all_ppt.png">
			<br>
		</li>
		<li class="list-group-item pt-5">
			<h3>2.文件规范：</h3>
			<p>幻灯片顺序会按照文件名中数字的大小排序，并且支持中文，比如：幻灯片17。</p>
			<p>所以一定要确保文件名内的数字是你要展示的幻灯片的顺序</p>
			<p>本程序最优ppt比例为4:3</p>
			<br>
			<img class="center-block" src="./images/asset/pptUploadHelp/fileName.png">
		</li>
		<li class="list-group-item pt-5">
			<h3>3.上传：</h3>
			<p>上传时支持一键上传多张幻灯片</p>
			<p>所以只需要全选本节课的所有幻灯片图片即可</p>
			<br>
			
		</li>
	</ul>
</div>
<br><br><br><br>




<?php 
require_once 'includes/footer.php';
 ?>