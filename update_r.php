<html><head> 
</head><body> 
<h1> Результат редактирования </h1> 
<?  
$cod_ras =$_REQUEST[cod_ras];
$cod_d=$_REQUEST[cod_d]; 
$predmet=$_REQUEST[predmet]; 
$vid_kon =$_REQUEST[vid_kon]; 
$data=$_REQUEST[data];
if (!$cod_ras || !$cod_d|| !$predmet|| !$vid_kon || !$data) { 
echo "Вы внесли не все данные для ввода.<br>" 
."Пожалуйста, вернитесь и попробуйте снова."; 
} 
$cod_ras= addslashes($cod_ras); 
$cod_d= addslashes($cod_d); 
$predmet  = addslashes($predmet); 
$vid_kon= addslashes($vid_kon);
$data = addslashes($data);
$db = mysql_pconnect("localhost", "root", ""); 
if (!$db) { 
echo "Ошибка: Не могу соединится с базой данных. Пожалуйста, попробуйте еще раз позже."; 
exit; 
} 
mysql_select_db("dekanat"); 
$query = "UPDATE `ras_se` SET `cod_d`='".$cod_d."',`predmet` = '".$predmet."',`vid_kon` = '".$vid_kon."' ,`data` = '".$data."' WHERE `cod_ras` = '".$cod_ras."' LIMIT 6"; 
$result = mysql_query($query); 
if ($result) 
echo mysql_affected_rows()." таблица  изменена."; 
?> 
</body></html>