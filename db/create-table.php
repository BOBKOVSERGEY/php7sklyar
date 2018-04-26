<?php
try {
  $db = new PDO('sqlite:restaurant.db');
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $query = $db->exec("CREATE TABLE dishes (
                     dish_id     INT,
                     dish_name   VARCHAR(255),
                     price       DECIMAL(4,2),
                     is_spicy    INT
                  )");
} catch (PDOException $e) {
  print "Не могу создать таблицу: " . $e->getMessage();
}
