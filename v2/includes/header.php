<?php
require_once './include.php';

checkLogin();
$avatar=getUserByUid($_SESSION['uid'])['avatar'];
$uid=$_SESSION['uid'];
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

	<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom pl-3 shadow-sm fixed-top" style="height:60px;">
      <a class="navbar-brand" href="./courseList.php">
        <img src="./images/logo.png" height="30" alt="">
      </a>
      <a class="navbar-brand mr-2"  href="courseList.php">在线课程系统 </a>
      <a class="navbar-brand mr-2" href="./version.php" data-toggle="tooltip" data-placement="bottom" title="查看版本更新记录">v<?php echo $version; ?></a>
      <span class="badge badge-warning mr-3">Beta</span>
      <div class="collapse navbar-collapse " id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0 font-weight-bolder">
          <li class="nav-item ">
            <a class="nav-link" href="#">启蒙</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">探索</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">创想</a>
          </li>
        </ul>
        
        <span class="mr-1">
          <?php 
            echo('<img  src="./images/uploads/avatar_50/'.$avatar.'" alt="..." style="width:50px; border-style:solid; border-width:medium;border-color:#e6e6e6" class="rounded-circle mr-3 " >'.$_SESSION['name'])
           ?>
        </span>
        <button type="button" class="btn btn-outline-primary ml-2">
          <a href="doAction.php?act=logout" style="text-decoration:none;">退出</a>
        </button> 
      </div>
    </nav>
    <div class="navSpacer" style="height:70px"> </div>
	
