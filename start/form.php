
<?php/*
// вывести на экран приветсвие, если форма передана на обработку
if ($_POST['user']) {
  print "Hello, ";

  $user = $_POST['user'];

  print $user;
} else {
  // иначе вывести на экран сому форму
  print <<<_HTML_
<form method="post" action="$_SERVER[PHP_SELF]">
Ваше имя <input type="text" name="user"><br>
<button type="submit">Отправить</button> 
</form>
_HTML_;
}
*/
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
<form action="sqllite.php" method="post">
  <input type="text" name="meal">
  <button type="submit">Отправить</button>
</form>
</body>
</html>
