<?php 
$pageTitle="添加课程";
require_once 'includes/header.php';
$user = getUserByUid($uid);

if($user['isAdmin']!=1){
	echo "<p style='padding-top:20px;font-size:15px'>权限不足，无法访问本页面</p><meta http-equiv='refresh' content='1;url=courseList.php'/>";
	exit;
}
?> 
<div class="container mt-5" >
	<div class="col-md-auto align-self-center">
		<form method="post" action="doAction.php?act=addCourse"  enctype="multipart/form-data">
		  <div class="form-group">
		    <label for="name">课程名称：</label>
		    <input type="text" name="name" class="form-control" id="name" placeholder="course name" >
		  </div>
		  <div class="form-group">
		    <label for="summary">课程简介：</label>
		    <textarea class="form-control"  name="summary" id="summary" rows="3" placeholder="course summary"></textarea>
		  </div>
		  <div>
		  	<label for="thumbnail">课程缩略图：<span style="font-size:12px">&nbsp;(1M以内，800*600分辨率)</span></label>
    		<input type="file" class="form-control-file" id="thumbnail" name="thumbnail" accept="image/jpeg,image/gif,image/jpg,image/png">
		  </div>
		  <br>
		  <button type="submit" name="submit" class="btn btn-primary">创建课程</button>
		</form>
	</div>
</div>


</div>
<?php 
require_once 'includes/footer.php';
 ?>