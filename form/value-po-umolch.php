<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $defaults = $_POST;
} else {
  $defaults = [
    'delivery' => 'yes',
    'size' => 'medium',
    'main_dish' => ['taro', 'tripe'],
    'sweet' => 'cake'
  ];
}

print '<input type="text" name="my_name" value="'. htmlentities($defaults['my_name']) .'"><br>';

print '<textarea name="comments">';
print htmlentities($defaults['comments']);
print '</textarea><br>';