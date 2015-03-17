<?php

include_once "./lock.php"; ?>
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
		    <form name="form1" method="post" action="add_serv.php">
         <p>
           <label>Введите название услуги<br>
             <input type="text" name="nameserv" id="nameserv" class="filterInput">
             </label>
         </p>
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
