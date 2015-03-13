<?php include ("blocks/bd.php"); 

$result = mysql_query("SELECT meas FROM measures WHERE page='index'",$db);

if (!$result)
{
echo "<p>Запрос на выборку данных из базы не прошел. Напишите об этом администратору admin@ruseller.com. <br> <strong>Код ошибки:</strong></p>";
exit(mysql_error());
}

if (mysql_num_rows($result) > 0)

{
$myrow = mysql_fetch_array($result); 
}

else
{
echo "<p>Информация по запросу не может быть извлечена в таблице нет записей.</p>";
exit();
}



?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="js/functions.js"></script>
<!--[if lt IE 9]>
<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="style.css" />
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<title>Untitled Document</title>
</head>

<body>
<div class="main">

<table width="100%" border="2" rules="all">
	<tr>
		<td align="center" colspan="3" width="16%">1 квартал</td>
		<td align="center"colspan="3"width="16%">2 квартал</td>
		<td align="center"colspan="3"width="16%">3 квартал</td>
		<td align="center"colspan="3"width="16%">4 квартал</td>
		
	</tr>
	
	<tr>
		<td align="center">Январь</td>
		<td align="center">Февраль</td>
		<td align="center">Март</td>
		<td align="center">Апрель</td>
		<td align="center">Май</td>
		<td align="center">Июнь</td>
		<td align="center">Июль</td>
		<td align="center">Август</td>
		<td align="center">Сентябрь</td>
		<td align="center">Октябрь</td>
		<td align="center">Ноябрь</td>
		<td align="center">Декабрь</td>
	</tr>
	
	<tr>
		<td align="center"><input type="text" name="first_name" form="myform" class="filterInput"></td>
		<td align="center"><input type="text" name="first_name" form="myform" class="filterInput"></td>
		<td align="center"><input type="text" name="first_name" form="myform" class="filterInput"></td>
		<td align="center"><input type="text" name="first_name" form="myform" class="filterInput"></td>
		<td align="center"><input type="text" name="first_name" form="myform" class="filterInput"></td>
		<td align="center"><input type="text" name="first_name" form="myform" class="filterInput"></td>
		<td align="center"><input type="text" name="first_name" form="myform" class="filterInput"></td>
		<td align="center"><input type="text" name="first_name" form="myform" class="filterInput"></td>
		<td align="center"><input type="text" name="first_name" form="myform" class="filterInput"></td>
		<td align="center"><input type="text" name="first_name" form="myform" class="filterInput"></td>
		<td align="center"><input type="text" name="first_name" form="myform" class="filterInput"></td>
		<td align="center"><input type="text" name="first_name" form="myform" class="filterInput"></td>
	</tr>
	
	<tr>
		<td align="center"><input type="text" name="first_name" form="myform" class="filterInput"></td>
		<td align="center"><input type="text" name="first_name" form="myform" class="filterInput"></td>
		<td align="center"><input type="text" name="first_name" form="myform" class="filterInput"></td>
		<td align="center"><input type="text" name="first_name" form="myform" class="filterInput"></td>
		<td align="center"><input type="text" name="first_name" form="myform" class="filterInput"></td>
		<td align="center"><input type="text" name="first_name" form="myform" class="filterInput"></td>
		<td align="center"><input type="text" name="first_name" form="myform" class="filterInput"></td>
		<td align="center"><input type="text" name="first_name" form="myform" class="filterInput"></td>
		<td align="center"><input type="text" name="first_name" form="myform" class="filterInput"></td>
		<td align="center"><input type="text" name="first_name" form="myform" class="filterInput"></td>
		<td align="center"><input type="text" name="first_name" form="myform" class="filterInput"></td>
		<td align="center"><input type="text" name="first_name" form="myform" class="filterInput"></td>
	</tr>
</table>
	 
</div>
</body>
</html>
