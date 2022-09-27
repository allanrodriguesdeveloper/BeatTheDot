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
                $this->set($key, $value);
            }
        }
    }

    public function get($key) {
        return $this->values;
    }

    public function set($key, $value)
    {
        $this->values[$key] = $value;
    }
}