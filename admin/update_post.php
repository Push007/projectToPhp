<?php
include_once "./lock.php";
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
if (isset($_POST['id']))      {$id = $_POST['id']; if ($id == '') {unset($id);}}
if (isset($_POST['february']))      {$february = $_POST['february']; if ($february == '') {unset($february);}}
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


?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="0";>
<title>Обработчик</title>
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
		    <?php 
if (isset($january) || isset($february) || isset($march) || isset($april) || isset($may) || isset($june) || isset($july) || isset($august) || isset($september) || isset($october) || isset($november) || isset($december))
{
/* Здесь пишем что можно заносить информацию в базу */
$result = mysql_query ("UPDATE data SET january='$january', february='$february', march='$march', april='$april', may='$may', june='$june', july='$july', august='$august', september='$september', october='$october', november='$november', december='$december' WHERE id='$id'");

if ($result == 'true') {echo "<p>Ваши данные успешно обновлена!</p>";}
else {echo "<p>Ваши данные не обновлена!</p>";}

}		 
else 

{
echo "<p>Вы не ввели информацию, поэтому данные в базе не может быть обновлена.</p>";
}
/*	
	$rr="UPDATE data SET january='$january', february='$february', march='$march', april='$april', may='$may', june='$june', july='$july', august='$august', september='$september', october='$october', november='$november', december='$december' WHERE id='$id'";
var_dump($rr);	*/
		 
		 
		 ?> 
			</td>
			
     
     
	
  </tr>
</table>
</body>
</html>
