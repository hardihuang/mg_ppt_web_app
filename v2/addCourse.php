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
		<!-- <form method="post" action="test.php"  enctype="multipart/form-data"> -->
		<form method="post" action="doAction.php?act=addCourse"  enctype="multipart/form-data">
		  <div class="form-group">
		    <label for="name">课程名称：</label>
		    <input type="text" name="name" class="form-control" id="name" placeholder="course name" >
		  </div>
		  <div class="form-group">
		    <label for="summary">课程简介：</label>
		    <textarea class="form-control"  name="summary" id="summary" rows="3" placeholder="course summary"></textarea>
		  </div>
		  <div class="form-group col-md-6 float-left px-0 pt-2">
		  	<label for="slides">课程PPT：<span style="font-size:12px">&nbsp;(请按照顺序命名图片)</span></label>
    		<input type="file" class="form-control-file" id="slides" name="slides[]" accept="image/jpeg,image/gif,image/jpg,image/png" multiple>
		  </div>
		  <div class="form-group col-md-6 px-0 float-left">
		     <label for="type">课程类型</label>
		     <select id="type" name ="type" class="form-control">
		       <option value="1" selected>探索A</option>
		       <option value="2">探索B</option>
		       <option value="3">创想A</option>
		       <option value="4">创想B</option>
		     </select>
		   </div>

		  <br><br>
		  <button type="submit" name="submit" class="btn btn-primary ">创建课程</button>
		</form>
	</div>
</div>


</div>
<?php 
require_once 'includes/footer.php';
 ?>