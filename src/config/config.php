<?php

date_default_timezone_set('America/Sao_Paulo');
setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'portuguese');

/**
 * PASTAS
 **/
define('MODEL_PATH', realpath(dirname(__FILE__) . '/../models'));
define('VIEW_PATH', realpath(dirname(__FILE__) . '/../views'));

/**
 * ARQUIVOS
 */
require_once(realpath(dirname(__FILE__) . '/Database.php'));
require_once(realpath(MODEL_PATH . '/Model.php'));