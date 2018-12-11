<?php 
$mysqli = new mysqli("localhost","root","","dekanat"); 
if ($mysqli->connect_errno) { 
printf("Не удалось подключиться: %s\n", $mysqli->connect_error); 
exit(); 
} 
$result = $mysqli->query("DELETE FROM `spisok` WHERE `cod_sp` = '$_REQUEST[delete_s]'"); 
if ($result) { 
echo "Расаписание удалено";  
} 
else { 
echo "Провал!"; 
} 
?>