<? //include ("lock.php");
include ("blocks/bd.php"); ?>
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
		    <form name="form1" method="post" action="add_post.php">
		   
		<p>
           <label>Наименование услуги<br>
           
           <select name="id_gosorg">
           
           <?php
		   
			$result = mysql_query("SELECT gosname,id FROM gosorg",$db);

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
						printf ("<option value='%s'>%s</option>",$myrow["id"],$myrow["gosname"]);



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
		   
			$result = mysql_query("SELECT meas,id FROM measures",$db);

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
						printf ("<option value='%s'>%s</option>",$myrow["id"],$myrow["meas"]);



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
           <label>
           <input type="submit" name="submit" id="submit" value="Далее">
           </label>
         </p>
           </form> 
			</td>
			
     
     
	
  </tr>
</table>
</body>
</html>
