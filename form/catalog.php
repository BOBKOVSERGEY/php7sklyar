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
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <input type="text" name="product_id"><br>
  <select name="category">
    <option value="ovenmitt">Pot Holder</option>
    <option value="fryingpan">Fruing Pan</option>
    <option value="torch">Kitchen Torch</option>
  </select><br>
  <input type="submit" name="submit"><br>
</form>
</body>
</html>
<?php
  echo '<pre>';
  print_r($_POST);
  echo '</pre>';
?>
<?php if (isset($_POST['product_id'])) {?>
  <p>product_id: <?php print $_POST['product_id']?></p>
<?php } ?>
<?php if (isset($_POST['category'])) {?>
  <p>category: <?php print $_POST['category']?></p>
<?php } ?>

