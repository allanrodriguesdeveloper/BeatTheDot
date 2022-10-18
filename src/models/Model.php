<?php

class Model
{
    protected static string $tableName = '';
    protected static array $columns = [];
    protected array $values = [];

    public function __construct($arr)
    {
        $this->loadFromArray($arr);
    }

    public function loadFromArray($arr)
    {
        if ($arr) {
            foreach ($arr as $key => $value) {
                $this->$key = $value;
            }
        }
    }

    public function __get($key)
    {
        return $this->values[$key];
    }

    public function __set($key, $value)
    {
        $this->values[$key] = $value;
    }

    public static function get($filters = [], $columns = '*'): array
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

    public static function getResultSetFromSelect($filters = [], $columns = '*')
    {
        $sql = "SELECT ${columns} FROM "
            . static::$tableName
            . static::getFilters($filters);

        $result = Database::getResultFromQuery($sql);

        if ($result->num_rows === 0) {
            return null;
        }

        return $result;
    }

    private static function getFilters($filters): string
    {
        $sql = '';

        if (count($filters) > 0) {
            $sql .= " WHERE 1 = 1";
            foreach ($filters as $columns => $value) {
                $sql .= " AND ${columns} = " . static::getFormattedValue($value);
            }
        }

        return $sql;
    }

    private static function getFormattedValue($value)
    {
        if (is_null($value)) {
            return "null";
        }

        if (gettype($value) === 'string') {
            return "'${value}'";
        }

        return $value;
    }
}