<?php
//error_reporting(-1);
require_once __DIR__ . '/classes/Entree.php';
require_once __DIR__ . '/classes/ComboMeal.php';

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
    print 'Yummy<br>';
  }
} catch (Exception $e) {
  print "Couldn't create the drink: " . $e->getMessage();
}

// составное блюдо
$combo = new ComboMeal('Soup+Sandwich', [$soup, $sandwich]);

foreach (['chicken', 'water', 'pickles'] as $ing) {
  if ($combo->hasIngredient($ing)) {
    print "Something in the combo contains {$ing}<br>";
  }
}