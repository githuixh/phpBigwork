<?php 
require_once($_SERVER['DOCUMENT_ROOT']."/public/conn.php");
require_once($_SERVER["DOCUMENT_ROOT"]."/public/detection.php");
$conn->select('msg',['msgId','subject','content','ptime','userNm'],'1');
$message = $conn->fetchAll();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1> 留言板 </h1>
	<hr/>
	<div>
		<table>
			<tr>
				<td>序号&nbsp;</td>
				<td>标题&nbsp;</td>
				<td>内容&nbsp;</td>
				<td>时间&nbsp;</td>
				<td>留言人员&nbsp;</td>
				<td>操&nbsp;&nbsp;作</td>
			</tr>
			<?php 
			foreach($message as $value){
				echo "
					<tr>
						<td>$value[msgId]</td>
						<td>$value[subject]</td>
						<td>$value[content]</td>
						<td>$value[ptime]</td>
						<td>$value[userNm]</td>
						<td> <a href='action/del.php?id=$value[msgId]'>删除</a>  <a href='edit.php?id=$value[msgId]'>修改</a></td>
					</tr>
				";
			}
			?>
		</table>
		<hr>
		<h2>请您留言：</h2>
		<form action='action/message.php' method="post">
			<div>标题：<input type="text" name="title"></div>
			<div>内容：<input type="text" name="message"></div>
			
			<button type="submit">提交</button>
		</form>
	</div>
	<a href="public/exit.php">登出</a>
</body>
</html>