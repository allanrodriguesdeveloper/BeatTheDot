<?php

require_once(dirname(__FILE__, 2) . '/src/config/Database.php');

$user = Database::getConnection();

echo "<pre>";
print_r($user);
echo "<pre>";