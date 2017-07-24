
<?php

print <<<_HTML_
<form method="post" action="$_SERVER[PHP_SELF]">
Ваше имя <input type="text" name="user"><br>
<button type="submit">Отправить</button> 
</form>
_HTML_;

