<?php 
$pageTitle="注册";
require_once 'includes/header_b4.php';
 ?>


<div class="container mt-3" >
	<div class="col-md-auto align-self-center">
		<form method="post" action="doAction.php?act=signup"  enctype="multipart/form-data">
		  <div class="form-group">
		    <label for="name">用户名：</label>
		    <input type="text" name="name" class="form-control" id="user_name" placeholder="user name" >
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">密码：</label>
		    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
		  </div>
		  <div>
		  	<label for="avatar">头像：<span style="font-size:12px">&nbsp;(1M以内)</span></label>
    		<input type="file" class="form-control-file" id="avatar" name="avatar" accept="image/jpeg,image/gif,image/jpg,image/png">
		  </div>
		  <div>
		  	<br>
		  	<label for="verify">验证码:</label><br>
			<img style="width:100px" src="getVerify.php" id="verify" alt="点击更换验证码" onclick="reverify()"/><br><br>
			<input type="text" name="verify"><br><br>
		  </div>
		  <br>
		  <button type="submit" name="submit" class="btn btn-primary">注册</button>
		</form>
	</div>
</div>


<?php 
require_once 'includes/footer.php';
 ?>

  <!-- click verify pic to change-->
<script>
function reverify(){
	document.getElementById("verify").src ="getVerify.php?"+new Date;
} 
</script>