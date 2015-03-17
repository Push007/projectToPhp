<?php // include ("lock.php");
include ("blocks/bd.php");
 ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="0";>
<title>Страница удаление названии услуги</title>
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
		    <p><strong>Выберите название услуги для удаление</strong></p>
          <form action="drop_serv.php" method="post">
					<? 

					$result = mysql_query("SELECT nameserv,ids FROM services");      
					$myrow = mysql_fetch_array($result);

					do 
					{
					printf ("<p><input name='ids' type='radio' value='%s'><label> %s</label></p>",$myrow["ids"],$myrow["nameserv"]);
					}

					while ($myrow = mysql_fetch_array($result));
					?>

					<p> <input name="submit" type="submit" value="Удалить!!!"></p>

					</form>
			</td>
			
     
     
	
  </tr>
</table>
</body>
</html>
