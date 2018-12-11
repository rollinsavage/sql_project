<?php $mysqli = new mysqli("localhost","root","","dekanat"); 
     // подключение к базе данных
	if ($mysqli->connect_errno) {                                        // проверка с условием, если при подключении возникла ошибка

	    printf("Не удалось подключиться: %s\n", $mysqli->connect_error); // выводим "Не удалось подключиться"
	    exit();
        }
?>
<p align="center"><b><font size=7 color="#800000"> Ведомость  </font></b></p>
<hr>
<style>
   table {
    width: 800px; /* Ширина таблицы */
    border: 1px solid wine; /* Рамка вокруг таблицы */
    margin: auto; /* Выравниваем таблицу по центру окна  */
   }
   td {
    text-align: center; /* Выравниваем текст по центру ячейки */
   }
  </style>
<table border="1">
<thead>
<tr>
<th>Код ведомости</th>
<th>Код деканата</th>
<th>Дата выдачи</th>
<th>Название</th>
<th>Преподаватель</th>
</tr>
</thead>
<?php  
  $result = $mysqli->query("SELECT cod_v,cod_d,data_v,naz,fio_pr FROM vedomost v,prepodavatel p where v.cod_pr=p.cod_pr");
if ($result) {
  while ($row = $result->fetch_assoc()){
    ?>
<tr>
<td>
<?php 
echo $row['cod_v']; ?>
</td>
<td>
<?php echo $row['cod_d']; ?>
</td>
<td>
<?php 
echo $row['data_v']; ?>
</td>
<td>
<?php 
echo $row['naz']; ?>
</td>
<td>
<?php 
echo $row['fio_pr']; ?>
</td>
 <?php } } ?>
</tr>
</table>
<form>
<input type="button" value="Добавить" onclick="javascript:window.location='insert_v.html'"/>
<input type="button" value="Редактировать" onclick="javascript:window.location='update_v.html'"/>
<input type="button" value="Удалить" onclick="javascript:window.location='delete_v.html'"/>
</form>
</div>