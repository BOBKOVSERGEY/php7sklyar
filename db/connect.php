<?php
try {
  $db = new PDO('mysql:host=localhost;dbname=sklyardb','root', '');
} catch (PDOException $e) {
  print "Не могу соедениться с БД: " . $e->getMessage();
}