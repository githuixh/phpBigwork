<?php
	require_once($_SERVER["DOCUMENT_ROOT"]."/public/detection.php");
	require_once($_SERVER['DOCUMENT_ROOT']."/public/conn.php");
	if($_SESSION['rank'] == 'admin'){
		$res = $conn->delete('msg',"msgId = $_GET[id]");
		alert("删除成功！","jump","../message.php");
	}
	
	alert("删除失败！,权限不足！",'back');
?>