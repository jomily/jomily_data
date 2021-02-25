<?php
	if (isset($_POST['submit'])) {
		echo "请先登录用户！";
		die();
	}
?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>留言板</title>
		<link rel="stylesheet" type="text/css" href="css/liuyancss.css">
	</head>
	<body>
		<div class="box_l">
			<form action="" method="post">
				<div class="liuyan_k">

				</div><br/>
				<input type="text" name="message" class="inp">
				<input type="submit" name="submit" value="发送" class="but">
			</form>
		</div>
		<div class="lianjie">
			<ul>
				<li><a href="login.php">登录</a></li>
				<li>|</li>
				<li><a href="register.php">注册</a></li>
			</ul>
	    </div>
	</body>
</html>