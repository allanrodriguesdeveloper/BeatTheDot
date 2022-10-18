<?php

require_once(dirname(__FILE__, 2) . '/src/config/Database.php');

$result = Database::getResultFromQuery('SELECT * FROM users');

//while ($row = $result->fetch_assoc()) {
//    echo "<pre>";
//    print_r($row);
//    echo "</pre>";
//}