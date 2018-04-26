<?php
  try {
    $db = new PDO('sqlite:restaurant.db');
  } catch (Exception $e) {
    print "Не могу соединиться с БД: " . $e->getMessage();
    exit();
  }

  $fh = fopen('dishes.csv', 'rb');

  $stm = $db->prepare('INSERT INTO dishes (dish_name, price, is_spicy) VALUES(?,?,?)');
  while((!feof($fh)) && ($info = fgets($fh))) {
    $stm->execute($info);

    print "Inserted $info[0]\n";
  }
  fclose($fh);
