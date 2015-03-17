<?php // include ("lock.php");

include ("blocks/bd.php"); 

if (isset($_GET['ids'])) {$ids = $_GET['ids'];}

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="0";>
<title>Страница редактирования наименование услуги</title>
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
		    <? 

if (!isset($ids))

{
$result = mysql_query("SELECT nameserv,ids FROM services");      
$myrow = mysql_fetch_array($result);

do 
{
printf ("<p><a href='edit_serv.php?ids=%s'>%s</a></p>",$myrow["ids"],$myrow["nameserv"]);
}

while ($myrow = mysql_fetch_array($result));

}

else

{

$result = mysql_query("SELECT * FROM services WHERE ids=$ids");      
$myrow = mysql_fetch_array($result);

echo "<h3 align='center'>Редактирование</h3>";

print <<<HERE

<form name='form1' method='post' action='update_serv.php'>
         <p>
           <label>Введите название категории<br>
             <input value="$myrow[nameserv]" type="text" name="nameserv" id="nameserv">
             </label>
         </p>
		 <input name="ids" type="hidden" value="$myrow[ids]">
		 
         <p>
           <label>
           <input type="submit" name="submit" id="submit" value="Сохранить изменения">
           </label>
         </p>
       </form>



HERE;
}


?>
			</td>
			
     
     
	
  </tr>
</table>
</body>
</html>
