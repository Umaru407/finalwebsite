<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
</head>

<body>


<?php
	
	$q1=$_POST['radio1'];
	$q2=$_POST['radio2'];
	$q3=$_POST['radio3'];
	$q4=$_POST['radio4'];
	$q5=$_POST['radio5'];
	$q6=$_POST['radio6'];
	$timestamp = date("Y-m-d H:i:s");
	$link = mysqli_connect("localhost","a0088","pwd0088");
	mysqli_select_db($link,"a0088");
	
	mysqli_query($link,"SET NAMES UTF8");
	
	$sqlstr="INSERT INTO feedback VALUES('$timestamp','$q1','$q2','$q3','$q4','$q5','$q6','0')";
	
	
	
	mysqli_query($link,$sqlstr);
	mysqli_query($link,'update feedback set total = Q1+Q2+Q3+Q4+Q5+Q6');
	
	mysqli_close($link);
	
	echo"<script>alert('提交成功')</script>";
	echo "<script>window.location.href = 'feedback2.html'</script>";

?>






</body>
</html>