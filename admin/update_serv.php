<?php 

include_once "./lock.php";
include ("blocks/bd.php");

/* Если существует в глобальном массиве $_POST['title'] опр. ячейка, то мы создаем простую переменную из неё. Если переменная пустая, то уничтожаем переменную. */  
if (isset($_POST['ids']))      {$ids = $_POST['ids']; if ($ids == '') {unset($ids);}}
if (isset($_POST['nameserv']))      {$nameserv = $_POST['nameserv']; if ($nameserv == '') {unset($nameserv);}}
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
	<p align="center" class="title">Услуги</p>
	<div id="coolmenu">
	<a href="new_serv.php">Добавить</a>
	<a href="edit_serv.php">Редактировать</a>
	<a href="del_serv.php">Удалить</a>
	</div>
	
	<p align="center" class="title">Гос.организации</p>
	<div id="coolmenu">
	<a href="new_gosorg.php">Добавить</a>
	<a href="edit_godorg.php">Редактировать</a>
	<a href="del_gosorg.php">Удалить</a>
	</div>
	</td>
			
			<td valign="top">
		    <?php 
if (isset($nameserv))
{
/* Здесь пишем что можно заносить информацию в базу */
$result = mysql_query("UPDATE services SET nameserv='$nameserv' WHERE ids='$ids'");

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
