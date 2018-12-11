<html><head> 
</head><body> 
<h1> Результат редактирования </h1> 
<?  
$cod_v =$_REQUEST[cod_v];
$cod_d=$_REQUEST[cod_d]; 
$naz=$_REQUEST[naz]; 
$data_v =$_REQUEST[data_v]; 
$cod_pr=$_REQUEST[cod_pr];
if (!$cod_v || !$cod_d|| !$naz|| !$data_v  || !$cod_pr) { 
echo "Вы внесли не все данные для ввода.<br>" 
."Пожалуйста, вернитесь и попробуйте снова."; 
} 
$cod_v= addslashes($cod_v); 
$cod_d= addslashes($cod_d); 
$naz  = addslashes($naz); 
$data_v= addslashes($data_v);
$cod_pr= addslashes($cod_pr);
$db = mysql_pconnect("localhost", "root", ""); 
if (!$db) { 
echo "Ошибка: Не могу соединится с базой данных. Пожалуйста, попробуйте еще раз позже."; 
exit; 
} 
mysql_select_db("dekanat"); 
$query = "UPDATE `vedomost` SET `cod_d`='".$cod_d."',`naz` = '".$naz."',`data_v` = '".$data_v."' ,`cod_pr` = '".$cod_pr."' WHERE `cod_v` = '".$cod_v."' LIMIT 6"; 
$result = mysql_query($query); 
if ($result) 
echo mysql_affected_rows()." таблица  изменена."; 
?> 
</body></html>