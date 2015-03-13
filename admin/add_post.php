<?php 
//include ("lock.php");
include ("blocks/bd.php");
if (isset($_POST['january']))       
{
$january = $_POST['january']; 

if ($january == '') 
{
unset($january);
}  

}

/* Если существует в глобальном массиве $_POST['title'] опр. ячейка, то мы создаем простую переменную из неё. Если переменная пустая, то уничтожаем переменную. */  
if (isset($_POST['february']))      {$february = $_POST['february']; if ($february == '') {unset($february);}}
if (isset($_POST['id_serv']))      {$id_serv = $_POST['id_serv']; if ($id_serv == '') {unset($id_serv);}}
if (isset($_POST['id_meas']))      {$id_meas = $_POST['id_meas']; if ($id_meas == '') {unset($id_meas);}}
if (isset($_POST['march']))      {$march = $_POST['march']; if ($march == '') {unset($march);}}
if (isset($_POST['april']))      {$april = $_POST['april']; if ($april == '') {unset($april);}}
if (isset($_POST['may']))      {$may = $_POST['may']; if ($may == '') {unset($may);}}
if (isset($_POST['june']))      {$june = $_POST['june']; if ($june == '') {unset($june);}}
if (isset($_POST['july']))      {$july = $_POST['july']; if ($july == '') {unset($july);}}
if (isset($_POST['august']))      {$august = $_POST['august']; if ($august == '') {unset($august);}}
if (isset($_POST['september']))      {$september = $_POST['september']; if ($september == '') {unset($september);}}
if (isset($_POST['october']))      {$october = $_POST['october']; if ($october == '') {unset($october);}}
if (isset($_POST['november']))      {$november = $_POST['november']; if ($november == '') {unset($november);}}
if (isset($_POST['december']))      {$december = $_POST['december']; if ($december == '') {unset($december);}}
if (isset($_POST['year']))      {$year = $_POST['year']; if ($year == '') {unset($year);}}


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
	<a href="new_post.php">Добавить</a>
	<a href="edit_post.php">Редактировать</a>
	<a href="del_post.php">Удалить</a>
	</div>
	</td>
			
			<td valign="top">
		    <?php $year=date('Y');
			if (isset($january) || isset($february) || isset($march) || isset($april) || isset($may) || isset($june) || isset($july) || isset($august) || isset($september) || isset($october) || isset($november) || isset($december) || isset($id_meas) || isset($year) || isset($id_serv))
			{
/* Здесь пишем что можно заносить информацию в базу */
			$result = mysql_query ("INSERT INTO data
			(january,february,march,april,may,june,july,august,september,october,november,december,id_meas,year,id_serv) VALUES ('$january', '$february','$march','$april','$may','$june','$july','$august','$september','$october','$november','$december','$id_meas','$year','$id_serv')");
			
			

			if ($result == 'true') {echo "<p>Ваше данные успешно добавлена!</p>";}
			else {echo "<p>Ваше данные не добавлена!</p>";}


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
