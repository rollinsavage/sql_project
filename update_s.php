<html><head> 
</head><body> 
<h1> Результат редактирования </h1> 
<?  
$cod_sp =$_REQUEST[cod_sp];
$cod_d=$_REQUEST[cod_d]; 
$cod_gr=$_REQUEST[cod_gr]; 
$predmet=$_REQUEST[predmet]; 
$data_e =$_REQUEST[data_e]; 
$auditori=$_REQUEST[auditori];
if (!$cod_sp || !$cod_d||!$cod_gr || !$predmet|| !$data_e || !$auditori) { 
echo "Вы внесли не все данные для ввода.<br>" 
."Пожалуйста, вернитесь и попробуйте снова."; 
} 
$cod_sp= addslashes($cod_sp); 
$cod_d= addslashes($cod_d); 
$cod_gr= addslashes($cod_gr); 
$predmet  = addslashes($predmet); 
$data_e= addslashes($data_e);
$auditori = addslashes($auditori);
$db = mysql_pconnect("localhost", "root", ""); 
if (!$db) { 
echo "Ошибка: Не могу соединится с базой данных. Пожалуйста, попробуйте еще раз позже."; 
exit; 
} 
mysql_select_db("dekanat"); 
$query = "UPDATE `spisok` SET `cod_d`='".$cod_d."',`cod_gr` = '".$cod_gr."',`predmet` = '".$predmet."',`data_e` = '".$data_e."' ,`auditori` = '".$auditori."' WHERE `cod_sp` = '".$cod_sp."' LIMIT 7"; 
$result = mysql_query($query); 
if ($result) 
echo mysql_affected_rows()." таблица  изменена."; 
?> 
</body></html>