<?php
try {
  $db = new PDO('sqlite:restaurant.db');
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $affectedRows = $db->exec("INSERT INTO dishes (dish_name, price, is_spicy)
                                            VALUES ('Sesame Seed Puff', 2.50, 0)");
} catch (PDOException $e) {
  print "Не могу вставить данные: " . $e->getMessage();
}
