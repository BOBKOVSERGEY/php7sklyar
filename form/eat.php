<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
  <select name="lunch[]" multiple>
    <option value="Свин">BBQ PORK BUN</option>
    <option value="Курица">CHICKEN BUN</option>
    <option value="Лотус">LOTUS SEED BUN</option>
    <option value="Бен">BEAN PASTE BUN</option>
    <option value="Нест">BIRD NEST BUN</option>
  </select><br>
  <input type="submit" name="submit">
</form>
</body>
</html>

<?php
  if (isset($_POST['submit'])) {
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';
  }
?>

<?php if (isset($_POST['lunch'])) {
  $lunch = $_POST['lunch'];
  foreach ($lunch as $choice) {
    print "Ваш выбор {$choice}<br>";
  }
}?>
