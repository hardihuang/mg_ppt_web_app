<?php 
header("content-type:text/html;charset=utf-8");
date_default_timezone_set("PRC");

define("ROOT",dirname(__FILE__));

set_include_path(".".PATH_SEPARATOR.ROOT."/lib".PATH_SEPARATOR.ROOT."/core".PATH_SEPARATOR.get_include_path());

require_once 'configs.php';
require_once 'mysql.func.php';
require_once 'classData.api.php';
//connect();