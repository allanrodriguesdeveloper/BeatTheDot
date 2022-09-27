<?php

namespace Src\models;

class Model
{
    protected static string $tableName = '';
    protected static array $columns = [];
    protected array $values = [];

    public function __construct(array $arr)
    {
        $this->loadFromArray($arr);
    }

    public function loadFromArray(array $arr)
    {
        if ($arr) {
            foreach ($arr as $key => $value) {
                $this->$key = $value;
            }
        }
    }

    public function __get($key) {
        return $this->values;
    }

    public function __set($key, $value)
    {
        $this->values[$key] = $value;
    }
}