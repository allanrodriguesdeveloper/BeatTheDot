<?php

date_default_timezone_set('America/Sao_Paulo');
setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf8', 'portuguese');

//Pastas
define('MODEL_PATH', realpath(dirname(__FILE__) . '/../models'));

require_once(realpath(dirname(__FILE__) . '/Database.php'));

function debug($data): array
{
    echo "<pre>";print_r($data);echo "</pre>";

    return $data;
}