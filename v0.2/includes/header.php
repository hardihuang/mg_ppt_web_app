<?php
require_once './include.php';
?>
<!DOCTYPE HTML>

<html>
<head>
	<meta charset="utf-8">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta http-equiv="x-ua-compatible" content="ie=7" />
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
	<title>MG-web-app</title>
	<link rel="stylesheet" href="styles/style.css">
	<link rel="stylesheet" href="styles/bootstrap.css">
	<script src="scripts/jquery.js"></script>
	<script src="scripts/popper.js"></script>
	<script src="scripts/bootstrap.bundle.js"></script>
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-light border-bottom pl-3" style="height:60px;">
      <a class="navbar-brand" href="./index.html">
        <img src="./images/logo.png" height="30" alt="">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
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
          <li>
            fetch data area:
            <p id="fetchData"></p>
          </li>
        </ul>
        <button type="button" class="btn btn-outline-primary mr-3"  data-toggle="tooltip" data-placement="bottom" title="测试按钮">
          <a href="./admin.html" style="text-decoration:none;">xxx</a>
        </button> 
        <span class="mr-1">
          <img  src="./images/avatar/harry.png" alt="..." style="width:60px; border-style:solid; border-width:medium;" class="rounded-circle mr-3 border-secondary" >哈利·波特  
        </span>
      </div>
    </nav>
	
