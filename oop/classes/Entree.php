<?php

class Entree
{
  public $name;
  public $ingredients = [];

  // создаем конструктор
  public function __construct($name, $ingredients)
  {
    if (!is_array($ingredients)) {
      throw new Exception('$ingredients must be an array');
    }
    $this->name = $name;
    $this->ingredients = $ingredients;
  }

  public function hasIngredient($ingredient)
  {
    return in_array($ingredient, $this->ingredients); // проверяет присутствее в массиве элемента
  }

  // возможные размеры блюд
  public static function getSizes()
  {
    return ['small', 'medium', 'large'];
  }
}