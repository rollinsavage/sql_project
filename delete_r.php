<?php 
$mysqli = new mysqli("localhost","root","","dekanat"); 
if ($mysqli->connect_errno) { 
printf("Не удалось подключиться: %s\n", $mysqli->connect_error); 
exit(); 
} 
$result = $mysqli->query("DELETE FROM `ras_se` WHERE `cod_ras` = '$_REQUEST[delete_r]'"); 
if ($result) { 
echo "Расаписание удалено";  
} 
else { 
echo "Провал!"; 
} 
?>