<?php 
$pageTitle="登录";
require_once 'includes/header_b4.php';
 ?>

<div class="container mt-3" >
	<div class="col-md-auto align-self-center">
		<form method="post" action="doAction.php?act=login">
		  <div class="form-group">
		    <label for="name">用户名：</label>
		    <input type="text" name="name" class="form-control" id="user_name" placeholder="user name" >
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">密码：</label>
		    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
		  </div>
		  <button type="submit" class="btn btn-primary">登录</button>
		</form>
	</div>
</div>
</div>

<?php 
require_once 'includes/footer.php';
 ?>