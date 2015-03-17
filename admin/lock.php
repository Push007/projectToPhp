<?php
if(empty($_SERVER['PHP_AUTH_USER'])) 
{ 
header("WWW-Authenticate: Basic realm=\"Administrative resource\""); 
header("HTTP/1.0 401 Unauthorised"); 
exit(); 
}
include 'auth.php'; 
$key = false; 
foreach($admins as $admin => $password) 
if($_SERVER['PHP_AUTH_USER'] === $admin && md5($_SERVER['PHP_AUTH_PW']) === $password) 
$key = true;
if(empty($key)) 
{ 
header ('WWW-Authenticate: Basic realm="Admin Page"'); 
header ('HTTP/1.0 401 Unauthorized'); 
exit(); 
}
?>