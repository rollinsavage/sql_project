<?
 $pass =$_POST['pass'];
if (!$pass)  {
     echo "������ �� �������!";
     exit;
  }
  $pass = addslashes($pass);;
  if ($pass == 1234) 
  { include "sayt1.php";
  }
  else
{
echo"������ ������ �������, ���������� ��� ���";
}
  ?>
