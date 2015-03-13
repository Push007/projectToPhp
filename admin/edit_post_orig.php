<?php 
//include ("lock.php");
include ("blocks/bd.php");
if (isset($_GET['id'])) {$id = $_GET['id'];}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="0";>
<title>Страница редактирования мероприятии</title>
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
		    <? 

if (!isset($id))

{
$result = mysql_query("SELECT meas,id FROM measures");      
$myrow = mysql_fetch_array($result);

do 
{
printf ("<p><a href='edit_post.php?id=%s'>%s</a></p>",$myrow["id"],$myrow["meas"]);
}

while ($myrow = mysql_fetch_array($result));

}

else

{

$result = mysql_query("SELECT * FROM data WHERE id=$id");      
$myrow = mysql_fetch_array($result);

print <<<HERE

<form name="form1" method="post" action="update_post.php">
			   <table width="100%"  border="2" rules="all" class="table1">
			<tr>
				<td align="center" colspan="3" width="5%">1 квартал</td>
				<td align="center"colspan="3" width="5%">2 квартал</td>
				<td align="center"colspan="3" width="5%">3 квартал</td>
				<td align="center"colspan="3" width="5%">4 квартал</td>
				
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
				<td align="center"><input value="$myrow[january]" type="text" name="january" id="january"  class="filterInput"></td>
				<td align="center"><input value="$myrow[february]" type="text" name="february" id="february"  class="filterInput"></td>
				<td align="center"><input value="$myrow[march]" type="text" name="march" id="march"  class="filterInput"></td>
				<td align="center"><input value="$myrow[april]" type="text" name="april" id="april"  class="filterInput"></td>
				<td align="center"><input value="$myrow[may]" type="text" name="may" id="may"  class="filterInput"></td>
				<td align="center"><input value="$myrow[june]" type="text" name="june" id="june"  class="filterInput"></td>
				<td align="center"><input value="$myrow[july]" type="text" name="july" id="july"  class="filterInput"></td>
				<td align="center"><input value="$myrow[august]" type="text" name="august" id="august"  class="filterInput"></td>
				<td align="center"><input value="$myrow[september]" type="text" name="september" id="september"  class="filterInput"></td>
				<td align="center"><input value="$myrow[october]" type="text" name="october" id="october"  class="filterInput"></td>
				<td align="center"><input value="$myrow[november]" type="text" name="november" id="november"  class="filterInput"></td>
				<td align="center"><input value="$myrow[december]" type="text" name="december" id="december"  class="filterInput"></td>
			</tr>
			
		</table>
		
		<input name="id" type="hidden" value="$myrow[id]">
		
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
