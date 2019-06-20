<?php 
$pageTitle="添加课程";
require_once 'includes/header.php';

 ?> 


<div class="container mt-5" >
	<div class="col-md-auto align-self-center">
		<form method="post" action="doAction.php?act=addCourse"  enctype="multipart/form-data">
		  <div class="form-group">
		    <label for="course_name">课程名称：</label>
		    <input type="text" name="course_name" class="form-control" id="course_name" placeholder="course name" >
		  </div>
		  <div class="form-group">
		    <label for="course_content">课程简介：</label>
		    <textarea class="form-control"  name="course_content" id="course_content" rows="3"></textarea>
		  </div>
		  <div>
		  	<label for="thumbnail">课程缩略图：<span style="font-size:12px">&nbsp;(1M以内)</span></label>
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