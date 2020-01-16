<?php
session_start();
require_once($_SERVER["DOCUMENT_ROOT"]."/func/alert.php");
if($_SESSION == null){
	alert("未登录！请登录或者注册！","jump","../index.html");
}
?>