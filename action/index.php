<?php 
session_start();
require_once($_SERVER['DOCUMENT_ROOT']."/func/alert.php");
if($_POST['user'] ==NULL){
	alert("请你输入账号密码","jump","../index.html");
}else{
	 require_once($_SERVER['DOCUMENT_ROOT']."/public/conn.php");
}
$result = $conn->select('users',['userId','userNm','rank'],"userNm = '$_POST[user]' and pwd = '$_POST[pass]'");
if($result == 0){
	alert("登录失败！检查账号密码！","jump","../index.html");
}
$res = $conn->fetchAll();
$_SESSION['ID'] = $res[0]['userId'];
$_SESSION['USER'] = $res[0]['userNm'];
$_SESSION['rank'] = $res[0]['rank'];
if($res[0]['rank'] == 'admin'){
	alert("管理员登录成功！","jump","../message.php");
}else{
	alert("登录成功！","jump","../message.php");
}
?>