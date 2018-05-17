<?php
// установка cookie файла
setcookie('userid', 'ralf');

// срок действия cookie файла истечет через час
setcookie('short-userid', 'ralf', time() + 60 * 60);

// срок действия cookie файла истечет через день
setcookie('loger-userid', 'ralf', time() + 60 * 60 * 24);

// срок действия cookie файла истечет в полдень 1 октября 2019 года
$date = new DateTime("2019-10-01 12:00:00");
setcookie('much-loger-userid', 'ralf', $date->format('U'));

// читаем cookie
if ($_COOKIE) {
  print 'Hello ' . $_COOKIE['userid'];
}
