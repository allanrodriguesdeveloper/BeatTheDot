<?php

namespace Src\models;

use Database;

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

    public function __get($key)
    {
        return $this->values;
    }

    public function __set($key, $value)
    {
        $this->values[$key] = $value;
    }

    public static function get(array $filters = [], string $columns = '*'): array
    {
        $objects = [];
        $result = static::getResultSetFromSelect($filters, $columns);
        if ($result) {
            $class = get_called_class();
            while ($row = $result->fetch_assoc()) {
                $objects[] = new $class($row);
            }
        }

        return $objects;
    }

    public static function getOne(array $filters = [], string $columns = '*')
    {
        $class = get_called_class();
        $result = static::getResultSetFromSelect($filters, $columns);
        return $result ? new $class($result->fetch_assoc()) : null;
    }

    public static function getResultSetFromSelect(array $filters = [], string $columns = '*')
    {
        $sql = sprintf("SELECT %s FROM " . static::$tableName . static::getFilters($filters), $columns);
        $result = Database::getResultFromQuery($sql);

        if ($result->num_rows === 0) {
            return null;
        }
        return $result;
    }

    private static function getFilters(array $filters): string
    {
        $filterData = [];
        $filterData['name'] = sprintf('name = \'%s\'', 'usuario1');
        $filterData['email'] = sprintf('email = \'%s\'', 'usuario1@uniponto.com.br');

        $sql = '';
        if (count($filters) > 0) {
            $parameters = "WHERE " . join(" AND ", $filterData);
            $sql = sprintf(' %s', $parameters);

//            $sql .= " WHERE 1 = 1";
//            foreach ($filters as $columns => $value) {
//                $sql .= sprintf(" AND %s = %s", $columns, static::getFormattedValue($value));
//            }
        }
        return $sql;
    }

    private static function getFormattedValue($value)
    {
        if (is_null($value)) {
            return "null";
        }

        if (gettype($value) == 'string') {
            return "'${value}'";
        }

        return $value;
    }
}