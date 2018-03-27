<?php
require_once __DIR__ . '/classes/Entree.php';

// создаем экземпляр класса
$soup = new Entree('Chicken Soup', ['chicken', 'water']);



// создаем еще экземпляр
$sandwich = new Entree('Chicken Sandwich', ['chicken', 'bread']);


$ingredients = [
  'chicken',
  'lemon',
  'bread',
  'water'
];

foreach ($ingredients as $ing) {
  if ($soup->hasIngredient($ing)) {
    print "Soup contains {$ing}.<br>" ;
  }
  if ($sandwich->hasIngredient($ing)) {
    print "Sandwiches contains {$ing}.<br>";
  }
}

// вызов статического метода
$sizes = Entree::getSizes();

echo '<pre>';
print_r($sizes);
echo '</pre>';

try {
  $drink = new Entree('Glass of Milk', ['milk', 'syrup']);

  if ($drink->hasIngredient('milk')) {
    print 'Yummy';
  }
} catch (Exception $e) {
  print "Couldn't create the drink: " . $e->getMessage();
}