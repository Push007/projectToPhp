<?php

include_once ("./lock.php");
include ("blocks/bd.php");

/* Если существует в глобальном массиве $_POST['title'] опр. ячейка, то мы создаем простую переменную из неё. Если переменная пустая, то уничтожаем переменную. */ 
if (isset($_POST['id_uslug']))      {$id_uslug = $_POST['id_uslug']; if ($id_uslug == '') {unset($id_uslug);}}
if (isset($_POST['id_month']))      {$id_month = $_POST['id_month']; if ($id_month == '') {unset($id_month);}}
if (isset($_POST['n1_1_1']))      {$n1_1_1 = $_POST['n1_1_1']; if ($n1_1_1 == '') {unset($n1_1_1);}}
if (isset($_POST['n1_1_2']))      {$n1_1_2 = $_POST['n1_1_2']; if ($n1_1_2 == '') {unset($n1_1_2);}}
if (isset($_POST['n1_1_3']))      {$n1_1_3 = $_POST['n1_1_3']; if ($n1_1_3 == '') {unset($n1_1_3);}}
if (isset($_POST['n1_2']))      {$n1_2 = $_POST['n1_2']; if ($n1_2 == '') {unset($n1_2);}}
if (isset($_POST['n1_3_1']))      {$n1_3_1 = $_POST['n1_3_1']; if ($n1_3_1 == '') {unset($n1_3_1);}}
if (isset($_POST['n1_3_2']))      {$n1_3_2 = $_POST['n1_3_2']; if ($n1_3_2 == '') {unset($n1_3_2);}}
if (isset($_POST['n2']))      {$n2 = $_POST['n2']; if ($n2 == '') {unset($n2);}}

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="0";>
<title>Главная страница блока администратора</title>
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
	</td>
			
			<td valign="top">
		    <?php //$year=date('Y');
			if (isset($id_month) || isset($n1_1_1) || isset($n1_1_2) || isset($n1_1_3)|| isset($n1_2)|| isset($n1_3_1)|| isset($n1_3_2) || isset($id_uslug) || isset($n2))
			{
/* Здесь пишем что можно заносить информацию в базу */
			$result1 = mysql_query ("INSERT INTO item1 (id_uslug,id_month,n1_1_1,n1_1_2,n1_1_3,n1_2,n1_3_1,n1_3_2) VALUES ('$id_uslug','$id_month','$n1_1_1','$n1_1_2','$n1_1_3','$n1_2','$n1_3_1','$n1_3_2')");
			 
			$result2 = mysql_query ("INSERT INTO item2 (id_uslug,id_month,n2) VALUES ('$id_uslug','$id_month','$n2')");
			/*$rr = "INSERT INTO item1 (id_uslug,id_month,n1_1_1,n1_1_2,n1_1_3,n1_2,n1_3_1,n1_3_2) VALUES ('$id_uslug','$id_month','$n1_1_1','$n1_1_2','$n1_1_3','$n1_2','$n1_3_1','$n1_3_2')";
			var_dump($rr);*/

			if ($result1 == 'true' || $result2 == 'true') {echo "<p>Ваши данные успешно добавлена!</p>";}
			else {echo "<p>Ваши данные не добавлена!</p>";}


			}		 
			else 
			{
			echo "<p>Вы не ввели информацию, поэтому данные в базу не может быть добавлена.</p>";
			}
		 
		 
		 
		 ?> 
			</td>
			
     
     
	
  </tr>
</table>
</body>
</html>
