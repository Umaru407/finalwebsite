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
    <form action="remain.php" method="post">
      <div align="center">
        查詢剩餘名額

        <table width="513" height="245" border="0.3" align="center">
          <thead>
            <tr>
              <th class="tg-0pky" colspan="4"></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td width="144">選擇日期</td>
              <td width="359"><input name="t2" type="date" id="t2" /></td>
            </tr>
            <tr>
              <td height="60">選擇行程</td>
              <td>
                <select name="choicef" id="choicef">
                  <option value="first">行程一</option>
                  <option value="second">行程二</option>
                </select>
              </td>
            </tr>
            <tr>
              <td>剩餘
               <?php
   
   if (isset($_POST["submit"])){ 
   	
   	$remain = strtotime($_POST["t2"]);
	$remain = date('Y-m-d H:i:s', $remain);
	$choice = $_POST['choicef'];
   
   $link = mysqli_connect("localhost", "a0088", "pwd0088");
	mysqli_select_db($link, "a0088");

	mysqli_query($link, "SET NAMES UTF8");
    
	$str="SELECT * FROM signup WHERE TravelDate='$remain' AND choice='$choice'";
	
    $result=mysqli_query($link,$str);
	
 	$nrow=mysqli_num_rows($result);
	$i=1;
	$t=0;
	while($i<=$nrow)
{

$record=mysqli_fetch_object($result);
$p=($record->people);
$t+=$p;
$i++;
}
	echo 10-$t;
	mysqli_free_result($result); 
   }
   ?>人</td>
              <td>
                <input type="submit" name="submit" id="button" value="確定" />
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    
    </form>
  </body>

  
 

  
  
  
</h1>
</div>
</body>
</html>