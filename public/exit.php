<?php 
require_once($_SERVER["DOCUMENT_ROOT"]."/func/alert.php");
$_SESSION = array();
alert('登出成功！',"jump","../index.html");
?>