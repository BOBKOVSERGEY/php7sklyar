<?php
// читаем cookie
if ($_COOKIE) {
  print 'Hello ' . $_COOKIE['userid'];
}
