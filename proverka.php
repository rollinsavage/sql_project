<?
 $pass =$_POST['pass'];
if (!$pass)  {
     echo "Данные не введены!";
     exit;
  }
  $pass = addslashes($pass);;
  if ($pass == 1234) 
  { include "sayt1.php";
  }
  else
{
echo"Пароль введен неверно, попробуйте еще раз";
}
  ?>
