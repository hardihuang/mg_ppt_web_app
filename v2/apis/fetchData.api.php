<?php 

require_once '../include.php';

$uid=$_SESSION['uid'];

echo json_encode(fetchClassData($uid));

 ?>