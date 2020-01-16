<?php 
require_once($_SERVER["DOCUMENT_ROOT"]."/public/detection.php");
require_once($_SERVER["DOCUMENT_ROOT"]."/public/conn.php");
$res = $conn->insert('users',['userNm' => $_POST['user'] , 'pwd' => $_POST['pass'],'rank' => $_POST['rank']]);
//print_r($res);
if($res != 0){
	alert("注册成功！","jump","../index.html");
}
?>