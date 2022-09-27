<?php

require_once "../vendor/autoload.php";

use Src\config\Database;

//require_once(dirname(__FILE__, 2) . '/src/config/Database.php');

$sql = 'SELECT * FROM users';

$dataBase = Database::getResultFromQuery($sql);

while ($row = $dataBase->fetch_assoc()) {
    dd($row);
}