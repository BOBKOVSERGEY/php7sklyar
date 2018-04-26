<?php
session_start();

$_SESSION['name'] = 'Sergey';


// загружаем файл шаблона
$page = file_get_contents('page-template.html');

// вывести заглавие страницы
$page = str_replace('{page_title}', 'Welcome', $page);

// окрасить страницу голубым цветом после полудня и зеленым цветом
// с утра
if (date('H') >= 12) {
  $page = str_replace('{color}', 'blue', $page);
} else {
  $page = str_replace('{color}', 'green', $page);
}

$page = str_replace('{name}', $_SESSION['name'], $page);

// вывести на экран
echo $page;

// ЗАПИСЬ В ФАЙЛ

 file_put_contents('page.html', $page);