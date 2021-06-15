<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>無標題文件</title>
</head>

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
  <p align="center">訂單
    <?php
	
	
	
    $name = $_POST['t1'];
    $phone = $_POST['t2'];
	
	
    $link = mysqli_connect("localhost", "a0088", "pwd0088");
    mysqli_select_db($link, "a0088");
    mysqli_query($link, "SET NAMES UTF8");

    $sqlstr = "SELECT name,choice,TravelDate,people FROM signup WHERE name='$name' AND phone='$phone';";

    $result = mysqli_query($link, $sqlstr);

    $nrow = mysqli_num_rows($result);

    



    $i = 1;
	
	if($nrow>=1){
		
	echo'<div align="center"><form action="cancel.php" method="post">';
	echo "<table border='1'>";
	
    while ($i <= $nrow) {
		
      echo "<tr>";
      echo "<td width='180'>訂購人</td>";
      echo "<td width='180'>行程方案</td>";
      echo "<td width='180'>旅遊日</td>";
      echo "<td width='180'>人數</td>";
      echo "</tr>";

      echo "<tr>";
      $record = mysqli_fetch_object($result);
      echo "<td>$record->name</td>";
      echo "<td>$record->choice</td>";
      echo "<td>$record->TravelDate</td>";
      echo "<td>$record->people</td>";
      $i++;
      echo "</tr>";
    
    }
	$n=($record->name);
	
	setcookie('mycookie',$n);
	 echo "</table>";
	echo'<div align="center"><br><input type="submit" name="button" id="button" value="取消訂單" />
	</div>
	</form></div>';}
else{
	
echo'查無資料<input type="submit" name="button" id="button" value="重新查詢" onclick="history.back()"  >';
	
}
	

   

    mysqli_free_result($result);
    mysqli_close($link);

    ?></p>
</body>

</html>