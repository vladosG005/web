<?php
spl_autoload_register();

use MVC\Controllers\Controller;

//$obj = new Controller('users.rss');
//$obj = new Controller('users/1.html');
$obj = new Controller('users.md');
echo $obj->render();
