<?php

class Database
{
    /**
     * Database connection - data coming from env.ini
     * Conexão com o banco de dados - dados vindo do env.ini
     */
    public static function getConnection()
    {
        $envPath = realpath(dirname(__FILE__) . '/../env.ini');
        $env = parse_ini_file($envPath);
        $conn = new mysqli(
            $env['host'],
            $env['username'],
            $env['password'],
            $env['database']
        );

        if ($conn->connect_error) {
            die("Error:" . $conn->connect_error);
        }

        return $conn;
    }

    /**
     * Retrieve the result from the database
     * Recupera o resultado do banco de dados
     */
    public static function getResultFromQuery($sql)
    {
        $conn = self::getConnection();
        $result = $conn->query($sql);
        $conn->close();
        return $result;
    }
}