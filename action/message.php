<?php 
require_once($_SERVER["DOCUMENT_ROOT"]."/public/detection.php");
require_once($_SERVER["DOCUMENT_ROOT"]."/public/conn.php");

$res = $conn->insert('msg',['subject'=>$_POST['title'], 'content'=>$_POST['message'],'ptime'=>date("Y-m-d H-i-s",time()), 'userNm' => $_SESSION['USER'] ]);

if($res !=0){
	alert('留言成功！','jump','../message.php');
}
?>