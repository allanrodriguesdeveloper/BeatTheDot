<?php

function loadModel(string $modelName)
{
    require_once(CONTROLLER_PATH . "/{$modelName}.php");
}

function loadView(string $viewName, array $params = [])
{
    if (count($params) > 0) {
        foreach ($params AS $key => $value)
        {
            if (strlen($key) > 0) {
                ${$key} = $value;
            }
        }
    }

    require_once(VIEW_PATH . "/{$viewName}.php");
}