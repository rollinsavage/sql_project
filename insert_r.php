<html><head>
<title>Добавление</title>
</head><body>
<p align="center"><b><font size=7 color="red"> Результат добавления </font></b></p>
<hr>
<?
$cod_d =$_REQUEST[cod_d];
 $predmet=$_REQUEST[predmet];
 $vid_kon =$_REQUEST[vid_kon];
 $data=$_REQUEST[data];
 if (!$cod_d  || !$predmet|| !$vid_kon || !$data )  {
     echo "Вы внесли не все данные для ввода.<br>"
               ."Пожалуйста, вернитесь и попробуйте снова.";
exit;   
  }
  $cod_ras = addslashes($cod_ras);
 $cod_d =addslashes($cod_d);
$predmet=addslashes($predmet);
  $vid_kon = addslashes($vid_kon);
  $data = addslashes($data);
 $db = mysql_pconnect("localhost", "root", "");
  if (!$db)  {
     echo "Ошибка: Не могу соединится с базой данных. Пожалуйста, попробуйте еще раз позже.";
     exit;
  }
mysql_query('set character_set_client="utf8"');
  mysql_select_db("dekanat");
  $query = "insert into ras_se values ('".$cod_ras."','".$cod_d."', '".$predmet."', '".$vid_kon."', '".$data."')"; 
  $result = mysql_query($query);
  if ($result)
      echo  mysql_affected_rows()."  информация добавлена в базу."; 
?>
</body></html>
