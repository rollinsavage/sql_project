<html><head>
<title>Добавление</title>
</head><body>
<p align="center"><b><font size=7 color="red"> Результат добавления </font></b></p>
<hr>
<?
$cod_d =$_REQUEST[cod_d];
 $cod_gr=$_REQUEST[cod_gr];
 $predmet =$_REQUEST[predmet];
 $data_e=$_REQUEST[data_e];
 $auditori=$_REQUEST[auditori];
 if (!$cod_d  || !$cod_gr|| !$predmet || !$data_e ||!$auditori )  {
     echo "Вы внесли не все данные для ввода.<br>"
               ."Пожалуйста, вернитесь и попробуйте снова.";
exit;   
  }
  $cod_sp = addslashes($cod_sp);
 $cod_d =addslashes($cod_d);
$cod_gr =addslashes($cod_gr);
$predmet=addslashes($predmet);
  $data_e = addslashes($data_e);
  $auditori= addslashes($auditori);
 $db = mysql_pconnect("localhost", "root", "");
  if (!$db)  {
     echo "Ошибка: Не могу соединится с базой данных. Пожалуйста, попробуйте еще раз позже.";
     exit;
  }
mysql_query('set character_set_client="utf8"');
  mysql_select_db("dekanat");
  $query = "insert into spisok values ('".$cod_sp."','".$cod_d."', '".$cod_gr."','".$predmet."', '".$data_e."', '".$auditori."')"; 
  $result = mysql_query($query);
  if ($result)
      echo  mysql_affected_rows()."  информация добавлена в базу."; 
?>
</body></html>
