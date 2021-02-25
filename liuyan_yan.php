<?php
	if (isset($_POST['submit'])) {
		$con=mysqli_connect('localhost:3308','root','','liuyan');
		mysqli_query($con,'set names utf8');
		$message=$_POST['message'];
		$sql="INSERT INTO mess (mess_1) ".
		"VALUES ('$message')";
		mysqli_query($con,$sql);
		$sql="select mess_1 from mess";
		$res=mysqli_query($con,$sql);
	}
?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>留言板</title>
	</head>
	<body>
		<form action="" method="post">
			<div >
<?php
	if (isset($_POST['submit'])) {
		while ($row=mysqli_fetch_assoc($res)) {
?>
			<p><?php echo $row['mess_1'] ?></p>
<?php
		}
	}
?>			
			</div><br/>
			<input type="text" name="message">
			<input type="submit" name="submit" value="发送">
		</form>
	</body>
</html>