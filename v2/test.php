<?php 
require_once 'includes/header.php';
//header("content-type:text/html;charset=GB2312");
$slides_folder = '735ec64482b49cca6e9a4c675844413f';
$test = sortImgByFilename('images/course/'.$slides_folder);
print_r($test);
?>