<html><head>
<title>Добавление</title>
</head><body>
<p align="center"><b><font size=7 color="red"> Результат добавления </font></b></p>
<hr>
<?
$cod_d =$_REQUEST[cod_d];
 $naz=$_REQUEST[naz];
 $data_v =$_REQUEST[data_v];

$cod_pr=$_REQUEST[cod_pr];
 if (!$cod_d  || !$naz|| !$data_v || !$cod_pr )  {
     echo "Вы внесли не все данные для ввода.<br>"
               ."Пожалуйста, вернитесь и попробуйте снова.";
exit;   
  }
  $cod_v = addslashes($cod_v);
 $cod_d =addslashes($cod_d);
$naz=addslashes($naz);
  $data_v = addslashes($data_v);
  $cod_pr= addslashes($cod_pr);
 $db = mysql_pconnect("localhost", "root", "");
  if (!$db)  {
     echo "Ошибка: Не могу соединится с базой данных. Пожалуйста, попробуйте еще раз позже.";
     exit;
  }
mysql_query('set character_set_client="utf8"');
  mysql_select_db("dekanat");
  $query = "insert into vedomost values ('".$cod_v."','".$cod_d."', '".$naz."', '".$data_v."', '".$cod_pr."')"; 
  $result = mysql_query($query);
  if ($result)
      echo  mysql_affected_rows()."  информация добавлена в базу."; 
?>
</body></html>
