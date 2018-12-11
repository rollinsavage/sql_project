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
$qr_result=mysql_query ("select naim_pr,v_kon,nazvanie,fio_pr from peresdachi p, gruppa g, prepodavatel a  where  g.cod_gr=p.cod_gr and p.cod_pr=a.cod_pr  and ".$searchtype." like '%".$searchterm."%'");
    echo '<table border="1">';
        echo '<tr>';
	echo '<th>Наименование предмета</th>';
		echo '<th>Вид контроля</th>';
echo '<th>Группа</th>';
echo '<th>Преподаватель</th>';
echo '</tr>';
	while($data = mysql_fetch_array($qr_result)){
 	echo '<tr>';
 echo '<td>' . $data['naim_pr'] . '</td>';		
 echo '<td>' . $data['v_kon'] . '</td>';	
 echo '<td>' . $data['nazvanie'] . '</td>';
 echo '<td>' . $data['fio_pr'] . '</td>';
    echo '</tr>';
     echo "</p>";
}
?>
</body></html>
