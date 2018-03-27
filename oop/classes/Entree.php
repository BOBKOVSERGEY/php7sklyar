<?php

class Entree
{
  public $name;
  public $ingredients = [];
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