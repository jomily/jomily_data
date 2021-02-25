<?php
	session_start();
	if (isset($_POST['submit'])) {
		$con=mysqli_connect('localhost:3308','root','','liuyan');
		mysqli_query($con,'set names utf8');
		$message=$_POST['message'];
		$name=@$_SESSION['username'];
		$sql="select mess_1 from mess order by id desc limit 1";
		$res=mysqli_query($con,$sql);
		$row=mysqli_fetch_assoc($res);
		if ($message!=$row['mess_1']) {
			if ($name!=null && $message!=null) {
				$sql="INSERT INTO mess (name,mess_1) ".
					 "VALUES ('$name','$message')";
			    mysqli_query($con,$sql);
			}
		}	
	}
?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>留言板</title>
	</head>
	<link rel="stylesheet" type="text/css" href="css/liuyancss.css">
	<body>
		<div class="box_l">
		<form action="" method="post">
			<div class="liuyan_k">
				<span  class="p1"><input type="submit" name="loading" value="加载" style="margin:0px auto;"></span><br/>
<?php
	if (isset($_POST['submit'])) {
				$sql="select * from mess order by id";
				$res=mysqli_query($con,$sql);
				while ($row=mysqli_fetch_assoc($res)) {
?>	
				<span class="p1"><?php echo $row['name'] . "："; ?></span>
				<span class="p2"><?php echo $row['mess_1']; ?></span><br/>
				<p></p>
<?php
			
		}
	}
?>			
			</div><br/>
			<input type="text" name="message" class="inp">
			<input type="submit" name="submit" value="发送" class="but">
		</form>
		</div>
			<div class="lianjie">
<?php

//判断会话中是否已经有商家登录了
if(isset($_SESSION['username'])){
?>
	<h5>
		<?php echo "你好，" . $_SESSION['username']; ?>
	</h5>
<?php
}
?>
			</div>
	</body>
</html>