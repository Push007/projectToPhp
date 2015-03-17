<?php // include ("lock.php"); 

include ("blocks/bd.php");
if (isset($_POST['ids'])) {$ids = $_POST['ids'];}

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
			if (isset($ids))
			{

			$result0 = mysql_query ("SELECT id FROM data WHERE id_serv='$ids'",$db);
			if (mysql_num_rows($result0) > 0) {

			echo "<p>В категории, которую Вы хотите удалить, есть данные. Сначала перекиньте их по другим категориям.</p>";

			}

			else

			{
			$result = mysql_query ("DELETE FROM services WHERE ids='$ids'");

			if ($result == 'true') {echo "<p>Успешно удалена!</p>";}
			else {echo "<p>Не удалена!</p>";}

			}
			}		 
			else 

			{
			echo "<p>Вы запустили данный файл без параметра id и поэтому, удалить невозможно (скорее всего Вы не выбрали радиокнопку на предыдущем шаге).</p>";
			}
					 
					 
					 
					 ?>
			</td>
			
     
     
	
  </tr>
</table>
</body>
</html>
