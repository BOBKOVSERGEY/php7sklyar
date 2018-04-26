<?php
$sweets = [
  'Sesame Seed Puff',
  'Coconut Milk Gelatin Square',
  'Brown Sugar Cake',
  'Sweet Rice and Meat'
];

function generatorOption($options)
{
  $html = '';
  foreach ($options as $option) {
    $html .= "<option>{$option}</option>";
  }
  return $html;
}

// отобразить форму
function showForm()
{
  $sweets = generatorOption($GLOBALS['sweets']);

  print<<<_HTML_
<form method="post" action="$_SERVER[PHP_SELF]">
Your order: <select name="order">
              {$sweets}
            </select>
            <br>
            <input type="submit" value="Order">
</form>
_HTML_;

}
showForm();