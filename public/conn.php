<?php 
require_once($_SERVER['DOCUMENT_ROOT']."/class/Mysql.class.php");
$config = require($_SERVER['DOCUMENT_ROOT']."/config/database.php");
$conn = new mysql();

$conn->connect($config);

?>