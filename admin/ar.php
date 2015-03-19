<?php
include_once "./lock.php";
include ("blocks/bd.php");
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="0";>
<title>Годовой отчёт</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>

<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF" class="main_border">
  <tr>
    <td width="182px" valign="top" class="left">
	<p align="center" class="title">Мероприятии</p>
	<div id="coolmenu">
	<a href="new_meropri.php">Добавить</a>
	<a href="edit_post.php">Редактировать</a>
	<a href="del_post.php">Удалить</a>
	</div>
	
	<p align="center" class="title">Услуги</p>
	<div id="coolmenu">
	<a href="new_serv.php">Добавить</a>
	<a href="edit_serv.php">Редактировать</a>
	<a href="del_serv.php">Удалить</a>
	</div>
	
	<p align="center" class="title">Отчёт</p>
	<div id="coolmenu">
	<a href="ar.php">Годовой отчёт</a>
	</td>
	
	
			
			<td valign="top">
			
		    <p>Добро пожаловать!!!</p>
			<p>Тест расчет:</p><br />
			<p>
			 <?php  
			$strSQL = "SELECT * FROM item1 WHERE id_month = 1 and id_uslug = 4";
			//echo var_dump($strSQL);
			$rs = mysql_query($strSQL) or die("Invalid query: " . mysql_error());
			$row = mysql_fetch_array($rs);
			$result = $row['n1_1_2'] + $row['n1_1_1'];
			if($result == 0){
				$result = "-";
			}
			echo $result;
			?> 
			</p>
			
			<p>
			<table width="100%"  border="2" rules="all" class="table1">
			<tr>
				<td align="center" width="3%" rowspan="2">№</td>
				<td align="center" width="20%" rowspan="2">Атқарылып жатырған шаралар</td>
				<td align="center" colspan="3" width="16%">1-тоқсан</td>
				<td align="center"colspan="3" width="16%">2-тоқсан</td>
				<td align="center"colspan="3" width="16%">3-тоқсан</td>
				<td align="center"colspan="3" width="16%">4-тоқсан</td>
				<td align="center" width="7%" rowspan="2">Барлығы</td>
				
			</tr>
			
			<tr>
				<td align="center" width="4%">Қаңтар</td>
				<td align="center" width="4%">Ақпан</td>
				<td align="center" width="4%">Наурыз</td>
				<td align="center" width="4%">Сәуір</td>
				<td align="center" width="4%">Мамыр</td>
				<td align="center" width="4%">Маусым</td>
				<td align="center" width="4%">Шілде</td>
				<td align="center" width="4%">Тамыз</td>
				<td align="center" width="3%">Қыркүйек</td>
				<td align="center" width="4%">Қазан</td>
				<td align="center" width="4%">Қараша</td>
				<td align="center" width="3%">Желтоқсан</td>
			</tr>
			
<?php 
include ("rowtable/rt1.php");
include ("rowtable/rt11.php");
include ("rowtable/rt111.php");
include ("rowtable/rt112.php");
include ("rowtable/rt12.php");
include ("rowtable/rt13.php");
include ("rowtable/rt131.php");
include ("rowtable/rt132.php");
include ("rowtable/rt2.php");
include ("rowtable/rt3.php");
include ("rowtable/rt31.php");
include ("rowtable/rt311.php");
include ("rowtable/rt312.php");
include ("rowtable/rt32.php");
include ("rowtable/rt321.php");
include ("rowtable/rt322.php");
include ("rowtable/rt33.php");
include ("rowtable/rt331.php");
include ("rowtable/rt332.php");
include ("rowtable/rt333.php");
include ("rowtable/rt334.php");
include ("rowtable/rt335.php");
include ("rowtable/rt336.php");
include ("rowtable/rt4.php");
include ("rowtable/rt41.php");
include ("rowtable/rt42.php");
include ("rowtable/rt43.php");
include ("rowtable/rt5.php");
include ("rowtable/rt51.php");
include ("rowtable/rt52.php");
include ("rowtable/rt53.php");
include ("rowtable/rt6.php");
include ("rowtable/rt61.php");
include ("rowtable/rt62.php");
include ("rowtable/rt63.php");
include ("rowtable/rt64.php");
include ("rowtable/rt65.php");
include ("rowtable/rt66.php");
include ("rowtable/rt67.php");
include ("rowtable/rt7.php");
include ("rowtable/rt8.php");
include ("rowtable/rt81.php");
include ("rowtable/rt9.php");
include ("rowtable/rt91.php");
include ("rowtable/rt92.php");
include ("rowtable/rt10.php");
include ("rowtable/rt101.php");
include ("rowtable/rt102.php");
include ("rowtable/rt103.php");
include ("rowtable/rt104.php");
include ("rowtable/rt105.php");
include ("rowtable/rt106.php");
include ("rowtable/rt110.php");
include ("rowtable/rt120.php");
include ("rowtable/rt130.php");
?>
			
			
			
		</table>
		</p>
			</td>
			
     
     
	
  </tr>
</table>
</body>
</html>
