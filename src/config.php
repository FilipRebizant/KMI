<?php

ini_set('display_errors', 'On');

define('APP_ROOT', __DIR__);
define('VIEW_ROOT', APP_ROOT . '/views');
define('PAGE_ROOT', APP_ROOT . '/pages');
define('BASE_URL', 'http://localhost/projekty/KMI/dist');


$db = new PDO('mysql:host=127.0.0.1;dbname=kmi', 'root', '');