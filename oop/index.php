<?php
require_once __DIR__ . '/classes/Entree.php';

// создаем экземпляр класса
$soup = new Entree();

$soup->name = 'Chicken Soup';
$soup->ingredients = ['chicken', 'water'];


// создаем еще экземпляр
$sandwich = new Entree();
$sandwich->name = 'Chicken Sandwich';
$sandwich->ingredients = ['chicken', 'bread'];

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