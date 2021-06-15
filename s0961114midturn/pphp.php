<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>無標題文件</title>
</head>

<body>



	<?php
	$day1 = strtotime($_POST["datef"]);
	$day1 = date('Y-m-d H:i:s', $day1);
	$day2 = strtotime($_POST["TravelDatef"]);
	$day2 = date('Y-m-d H:i:s', $day2);

	$name = $_POST['namef'];
	$gender = $_POST['genderf'];

	$phone = $_POST['phonef'];
	$email = $_POST['emailf'];
	$choice = $_POST['choicef'];

	$people = $_POST['peoplef'];

	$link = mysqli_connect("localhost", "a0088", "pwd0088");
	mysqli_select_db($link, "a0088");

	mysqli_query($link, "SET NAMES UTF8");

	$sqlstr = "INSERT INTO `signup` (`name`, `gender`, `birthday`, `phone`, `email`, `choice`, `TravelDate`, `people`) VALUES ('$name', '$gender', '$day1', '$phone', '$email', '$choice', '$day2', '$people');";
	mysqli_query($link, $sqlstr);

	if ($choice = 'first') {
		$total = mysqli_query($link, "SELECT SUM(people) FROM signup WHERE choice='first' and TravelDate='$day2';");
		$row1 = mysqli_fetch_assoc($total);
		$sum1 = $row1['SUM(people)'];


		if ($sum1 <= 10) {

			echo "<script>
	
	alert('報名成功');</script>";
		} else {
			echo "<script>alert('人數已滿')</script>";
			mysqli_query($link, "DELETE FROM `signup` WHERE `signup`.`name` = '$name'");
		}
	} else if ($choice = 'second') {

		$total2 = mysqli_query($link, "SELECT SUM(people) FROM signup WHERE choice='second' and TravelDate='$day2';");
		$row2 = mysqli_fetch_assoc($total2);
		$sum2 = $row2['SUM(people)'];

		if ($sum2 <= 10) {

			echo "<script>alert('報名成功')</script>";
		} else {
			echo "<script>alert('人數已滿')</script>";
			mysqli_query($link, "DELETE FROM `signup` WHERE `signup`.`name` = '$name'");
		}
	}

	echo "<script>window.location.href = 'p.html'</script>";



	mysqli_close($link);

	?>

</body>

</html>