<html><head>
  <title> Результат </title>
</head>
<body>
 <p align="center"><b><font size=7 color="#800000"> Результат </font></b></p>
<hr>
<?
  $searchtype = $_REQUEST['searchtype'];
  $searchterm = $_REQUEST['searchterm'];

  if (!$searchtype || !$searchterm)  {
     echo "Вы не ввели условия поиска. Пожалуйста. Попробуйте снова.";
     exit;
  }
  $searchtype = addslashes($searchtype);
  $searchterm = addslashes($searchterm);
  @ $db = mysql_pconnect("localhost", "root", "");
  if (!$db)  {
     echo " Ошибка: Не могу соединится с базой данных. Пожалуйста, попробуйте еще раз позже.";
     exit;
  }
mysql_select_db("dekanat");
 $query = "select predmet,yavka from rezultat  where  yavka='Нет'  and ".$searchtype." like '%".$searchterm."%'";
   $result = mysql_query($query);
   $num_results = mysql_num_rows($result);
  echo "<p>Неявок: ".$num_results."</p>";
  for ($i=0; $i <$num_results; $i++)  {
     $row = mysql_fetch_array($result);
     echo "<p><strong>".($i+1).". Предмет ";
     echo stripslashes($row["predmet"]);
     echo "</strong><br>Явка: ";
     echo stripslashes($row["yavka"]);
     echo "</p>";
}
?>
</body></html>
