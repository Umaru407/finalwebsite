<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>

<?php
	
	
	$name=$_POST['namef'];
	$phone=$_POST['phonef'];
	$email=$_POST['emailf'];
	$message=$_POST['messagef'];
	
	$link = mysqli_connect("localhost","a0088","pwd0088");
	mysqli_select_db($link,"a0088");
	
	mysqli_query($link,"SET NAMES UTF8");
	
	$sqlstr="INSERT INTO contact VALUES('".$name."','".$phone."','".$email."','".$message."');";
	mysqli_query($link,$sqlstr);
	
	mysqli_close($link);
	
	echo "<script>alert('送出成功')</script>";
	echo "<script>window.location.href = 'contact2.html'</script>";
?>

</body>
</html>