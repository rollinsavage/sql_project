<?php 
$mysqli = new mysqli("localhost","root","","dekanat"); 
if ($mysqli->connect_errno) { 
printf("Не удалось подключиться: %s\n", $mysqli->connect_error); 
exit(); 
} 
$result = $mysqli->query("DELETE FROM `vedomost` WHERE `cod_v` = '$_REQUEST[delete_v]'"); 
if ($result) { 
echo "Ведомость удалена";  
} 
else { 
echo "Провал!"; 
} 
?>