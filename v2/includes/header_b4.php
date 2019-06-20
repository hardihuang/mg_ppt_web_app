<?php
require_once './include.php';
$version = getCurrentVersion()['version'];
?>
<!DOCTYPE HTML>

<html>
<head>
	<meta charset="utf-8">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta http-equiv="x-ua-compatible" content="ie=7" />
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
	<title>MG—<?php echo $pageTitle; ?></title>
	<link rel="stylesheet" href="styles/style.css">
	<link rel="stylesheet" href="styles/bootstrap.css">
	<script src="scripts/jquery.js"></script>
	<script src="scripts/popper.js"></script>
	<script src="scripts/bootstrap.bundle.js"></script>
	<script src="scripts/script.js"></script>
</head>
<body>
	
	<nav class="navbar navbar-expand-lg navbar-light bg-light ">
	  <a class="navbar-brand" href="./index.php">
        <img src="./images/logo.png" height="30" alt="">
      </a>
	  <a class="navbar-brand mr-2"  href="index.php">在线课程系统 </a>
      <a class="navbar-brand mr-2" href="index.php">v<?php echo $version; ?></a>
      <span class="badge badge-warning mr-3">Beta</span>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent" >
	    <ul class="navbar-nav mr-auto ">
	      <li class="nav-item">
	        <a class="nav-link" href="signup.php">注册</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="login.php">登录</a>
	      </li>
	    </ul>
	  </div>
	</nav>
