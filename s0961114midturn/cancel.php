<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
<style type="text/css">
  body {
    background-color: #e3e1db;
  }

  body,
  td,
  th {
    font-size: 30px;
    font-family: Verdana, Geneva, sans-serif;
  }
  </style>
</head>



<body>

<?php

    
    $n2 = $_COOKIE['mycookie'];
	$link = mysqli_connect("localhost","a0088","pwd0088");
	mysqli_select_db($link,"a0088");
	mysqli_query($link,"SET NAMES UTF8");

	$sqlstr="DELETE FROM signup WHERE name='$n2';";
	
	mysqli_query($link,$sqlstr);
	echo $n2;
	echo'您的訂單取消成功';

?>
</body>
</html>
