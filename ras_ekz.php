<?php $mysqli = new mysqli("localhost","root","","dekanat"); 
     // подключение к базе данных
	if ($mysqli->connect_errno) {                                        // проверка с условием, если при подключении возникла ошибка

	    printf("Не удалось подключиться: %s\n", $mysqli->connect_error); // выводим "Не удалось подключиться"
	    exit();
        }
?>
<p align="center"><b><font size=7 color="#800000">Расписание экзаменов</font></b></p>
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
<th>Код экзамена</th>
<th>Код деканата</th>
<th>Группа</th>
<th>Предмет</th>
<th>Дата экзамена</th>
<th>Аудитория</th>
</tr>
</thead>
<?php  
  $result = $mysqli->query("SELECT cod_sp,cod_d,nazvanie,predmet,data_e,auditori FROM spisok s,gruppa g where s.cod_gr=g.cod_gr");
if ($result) {
  while ($row = $result->fetch_assoc()){
    ?>
<tr>
<td>
<?php 
echo $row['cod_sp']; ?>
</td>
<td>
<?php echo $row['cod_d']; ?>
</td>
<td>
<?php 
echo $row['nazvanie']; ?>
</td>
<td>
<?php 
echo $row['predmet']; ?>
</td>
<td>
<?php 
echo $row['data_e']; ?>
</td>
<td>
<?php 
echo $row['auditori']; ?>
</td>
 <?php } } ?>
</tr>
</table>
<form>
<input type="button" value="Добавить" onclick="javascript:window.location='insert_s.html'"/>
<input type="button" value="Редактировать" onclick="javascript:window.location='update_s.html'"/>
<input type="button" value="Удалить" onclick="javascript:window.location='delete_s.html'"/>
</form>
</div>