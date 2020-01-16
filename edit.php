<?php 

require_once($_SERVER['DOCUMENT_ROOT']."/public/conn.php");
require_once($_SERVER["DOCUMENT_ROOT"]."/public/detection.php");
if($_SESSION['rank'] != 'admin'){
	alert("无权限此操作！","back","");
}
$conn->select('msg',['msgId','subject','content','ptime','userNm'],"msgId = $_GET[id]");
$res = $conn->fetchAll();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1> 学生管理系统</h1>
	<hr/>
	<form method="post" action="action/edit.php">
		<div>&nbsp;&nbsp;&nbsp;ID&nbsp;&nbsp;:&nbsp;<input type="text" name="msgId" value="<?php echo $res[0]['msgId'] ?>"></div>
		<div>标题：<input type="text" name="subject" value="<?php echo $res[0]['subject'] ?>"></div>
		<div>内容：<input type="text" name="content" value="<?php echo $res[0]['content'] ?>"></div>
		<div>时间：<input type="text" name="ptime" value="<?php echo $res[0]['ptime'] ?>"></div>
		<div>昵称：<input type="text" name="userNm" value="<?php echo $res[0]['userNm'] ?>"></div>
		<div><button type="submit">修改</button></div>
	</form>
	<a href="public/exit.php">登出</a>
</body>
</html>