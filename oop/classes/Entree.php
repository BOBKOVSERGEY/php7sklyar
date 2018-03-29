<?php

class Entree
{
  private $name; // private - припятствует юбому коду за пределами класса обращаться к его свойству
  protected $ingredients = []; // protected обращаться можно только из подкласса

  // свойство $name объявлено закрытым, ниже предоставляется метод для чтения его записи
  public function getName()
  {
    return $this->name;
  }

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