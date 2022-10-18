<?php

class Database
{
    /**
     * Database connection - data coming from env.ini
     * Conexão com o banco de dados - dados vindo do env.ini
     */
    private static function getConnection(): mysqli
    {
        $envPath = realpath(dirname(__FILE__) . '/../env.ini');
        $env = parse_ini_file($envPath);
        $connection = new mysqli(
            $env['host'],
            $env['username'],
            $env['password'],
            $env['database']
        );

        if ($connection->connect_error) {
            return $connection->connect_error;
        }

        return $connection;
    }

    /**
     * Retrieve the result from the database
     * Recupera o resultado do banco de dados
     */
    public static function getResultFromQuery(string $querySql)
    {
        $connection = self::getConnection();
        $result = $connection->query($querySql);
        $connection->close();
        return $result;
    }
}