<?php 

require_once '../src/config.php';

$projects = $db->query("
    SELECT * FROM projects;
")->fetchAll(PDO::FETCH_ASSOC);

require PAGE_ROOT . '/home.php';