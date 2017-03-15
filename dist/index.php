<?php 

require_once '../src/start.php';


$projects = $db->query("
    SELECT * FROM projects;
");

require VIEW_ROOT . '/templates/header.php'; 