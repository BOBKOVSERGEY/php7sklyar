
<?php
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

