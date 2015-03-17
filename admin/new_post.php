<?php
 
include_once "./lock.php";
include ("blocks/bd.php"); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="0";>
<title>Страница добавления новой мероприятии</title>
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
		   <form name="form1" method="post" action="add_post.php">
		   
		<p>
           <label>Наименование услуги<br>
           
           <select name="id_serv">
           
           <?php
		   
			$result = mysql_query("SELECT nameserv,ids FROM services",$db);

						if (!$result)
						{
						echo "<p>Запрос на выборку данных из базы не прошел. Напишите об этом администратору autconsys@gmail.com. <br> <strong>Код ошибки:</strong></p>";
						exit(mysql_error());
						}

						if (mysql_num_rows($result) > 0)

						{
						$myrow = mysql_fetch_array($result); 

						do 
						{
						printf ("<option value='%s'>%s</option>",$myrow["ids"],$myrow["nameserv"]);



						}
						while ($myrow = mysql_fetch_array($result));



						}

						else
						{
						echo "<p>Информация по запросу не может быть извлечена в таблице нет записей.</p>";
						exit();
						}
?>
       
       
       
           </select>
           
           </label>
         </p>   
	   
	   <p>
           <label>Выберите мероприятию<br>
           
           <select name="id_meas">
           
           <?php
		   
			$result = mysql_query("SELECT meas,idm FROM measures",$db);

						if (!$result)
						{
						echo "<p>Запрос на выборку данных из базы не прошел. Напишите об этом администратору autconsys@gmail.com. <br> <strong>Код ошибки:</strong></p>";
						exit(mysql_error());
						}

						if (mysql_num_rows($result) > 0)

						{
						$myrow = mysql_fetch_array($result); 

						do 
						{
						printf ("<option value='%s'>%s</option>",$myrow["idm"],$myrow["meas"]);



						}
						while ($myrow = mysql_fetch_array($result));



						}

						else
						{
						echo "<p>Информация по запросу не может быть извлечена в таблице нет записей.</p>";
						exit();
						}
?>
       
       
       
           </select>
           
           </label>
         </p>
	   
	   
			   <table width="100%"  border="2" rules="all" class="table1">
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
				<td align="center"><input type="text" name="january" id="january"  class="filterInput"></td>
				<td align="center"><input type="text" name="february" id="february"  class="filterInput"></td>
				<td align="center"><input type="text" name="march" id="march"  class="filterInput"></td>
				<td align="center"><input type="text" name="april" id="april"  class="filterInput"></td>
				<td align="center"><input type="text" name="may" id="may"  class="filterInput"></td>
				<td align="center"><input type="text" name="june" id="june"  class="filterInput"></td>
				<td align="center"><input type="text" name="july" id="july"  class="filterInput"></td>
				<td align="center"><input type="text" name="august" id="august"  class="filterInput"></td>
				<td align="center"><input type="text" name="september" id="september"  class="filterInput"></td>
				<td align="center"><input type="text" name="october" id="october"  class="filterInput"></td>
				<td align="center"><input type="text" name="november" id="november"  class="filterInput"></td>
				<td align="center"><input type="text" name="december" id="december"  class="filterInput"></td>
			</tr>
			
		</table>
	<p>
           <label>
           <input type="submit" name="submit" id="submit" value="Занести данные в базу">
           </label>
         </p>
           </form>
			</td>
			
     
     
	
  </tr>
</table>
</body>
</html>
