<?php 
require_once($_SERVER["DOCUMENT_ROOT"]."/public/detection.php");
require_once($_SERVER["DOCUMENT_ROOT"]."/public/conn.php");
if($_SESSION['rank'] == 'admin'){
	$res = $conn->update('msg',['msgId'=>$_POST['msgId'],'subject'=>$_POST['subject'],'content'=>$_POST['content'],'ptime'=>$_POST['ptime'],'userNm'=>$_POST['userNm']],"msgId = $_POST[msgId]");
	if($res != 1){
		alert("修改成功！","jump","../message.php");
	}
}

alert("修改失败或权限不足！","jump","../message.php");
?>