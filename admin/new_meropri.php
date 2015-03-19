<?php
include_once "./lock.php";
include ("blocks/bd.php");
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
		    <form name="form1" method="post" action="add_meropri.php">
			
			<p>
           <label>Выберите гос.услугу<br>
           
           <select name="id_uslug">
           
           <?php
		   
       $result = mysql_query("SELECT tguslug,id FROM gosuslug",$db);

						if (!$result)
						{
						echo "<p>Запрос на выборку данных из базы не прошел. Напишите об этом администратору autconsys@gmail.com <br> <strong>Код ошибки:</strong></p>";
						exit(mysql_error());
						}

						if (mysql_num_rows($result) > 0)

						{
						$myrow = mysql_fetch_array($result); 

						do 
						{
						printf ("<option value='%s'>%s</option>",$myrow["id"],$myrow["tguslug"]);



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
           <label>Выберите месяц<br>
           
           <select name="id_month">
           
           <?php
		   
       $result = mysql_query("SELECT monthname,id FROM months",$db);

						if (!$result)
						{
						echo "<p>Запрос на выборку данных из базы не прошел. Напишите об этом администратору autconsys@gmail.com <br> <strong>Код ошибки:</strong></p>";
						exit(mysql_error());
						}

						if (mysql_num_rows($result) > 0)

						{
						$myrow = mysql_fetch_array($result); 

						do 
						{
						printf ("<option value='%s'>%s</option>",$myrow["id"],$myrow["monthname"]);



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
           <label>Пункт 1.1.1<br>
             <input type="text" name="n1_1_1" id="n1_1_1">
             </label>
         </p>
		 <p>
           <label>Пункт 1.1.2<br>
             <input type="text" name="n1_1_2" id="n1_1_2">
             </label>
         </p>
		 <p>
           <label>Пункт 1.1.3<br>
             <input type="text" name="n1_1_3" id="n1_1_3">
             </label>
         </p>
		 <p>
           <label>Пункт 1.2<br>
             <input type="text" name="n1_2" id="n1_2">
             </label>
         </p>
		 <p>
           <label>Пункт 1.3.1<br>
             <input type="text" name="n1_3_1" id="n1_3_1">
             </label>
         </p>
		 <p>
           <label>Пункт 1.3.2<br>
             <input type="text" name="n1_3_2" id="n1_3_2">
             </label>
         </p>
		 <p>
           <label>Пункт 2<br>
             <input type="text" name="n2" id="n2">
             </label>
         </p>
         <p>
           <label>
           <input type="submit" name="submit" id="submit" value="Занести данных в базу">
           </label>
         </p>
       </form>
			</td>
			
     
     
	
  </tr>
</table>
</body>
</html>
