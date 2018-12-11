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
$qr_result=mysql_query("SELECT  AVG(ocenka) as sr from rezultat  where ".$searchtype." like '%".$searchterm."%'"); 
 echo '<table border="1">';
	echo '<tr>';
	echo '<th>Средний балл в группе</th>';
	echo '</tr>';
	while($data = mysql_fetch_array($qr_result)){
 	echo '<tr>';
    echo '<td>' . $data['sr'] . '</td>';	
    echo '</tr>';
     echo "</p>";
}
?>
</body></html>
